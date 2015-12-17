<?php namespace Modules\Registration\Http\Controllers\Registrar;

use Illuminate\Support\Facades\Auth;
use Modules\Academystructure\Entities\Specialty;
use Modules\Lists\Entities\Country;
use Modules\Registration\Entities\Registration;
use Modules\Registration\Entities\RegistrationDegree;
use Modules\Registration\Entities\RegistrationPeriod;
use Modules\Registration\Entities\RegistrationStep;
use Modules\Registration\Entities\RegistrationType;
use Modules\Registration\Events\RegistrarLogin;
use Modules\Registration\Events\RegistrationCreated;
use Modules\Registration\Events\RegistrationStepChanged;
use Modules\Registration\Events\RegistrationUpdated;
use Modules\Registration\Http\Requests\RegisterRequest;
use Modules\Registration\Http\Requests\Registrar\LoginRequest;
use Pingpong\Modules\Routing\Controller;

class AuthController extends Controller {
	
	public function postLogin(LoginRequest $request)
	{
		$input = $request->only('username', 'password');
		if(strlen($input['username'])>5) {
			$input['username'] = substr($input['username'], -5);
		}

		
		if(!$registration = Registration::login($input)->first()) {
			return redirect()->route('registration.registrar.login')->with('error', trans('registration::registrar.unvalid_credentials'));
		}
		$registration->load('step','type','degrees','speciality','period','birthcountry','contactcountry','contactcity','nationalitycity');
		
		event(new RegistrarLogin($registration));
		
		session()->put(config('registration.session_key'), $registration);

		return redirect()->route('registration.registrar.index');
	}
	

	public function getLogin(RegistrationPeriod $PeriodModel)
	{
		
		
		$period = $PeriodModel->orderBy('id' ,'desc')
		->with('year')
		->current()
		->first();

		return view('registration::registrar.auth.login' ,compact('period'));
	}

	public function getLogout()
	{
		session()->forget(config('registration.session_key'));
		return redirect()->route('registration.registrar.index');
	}

	public function apply(RegistrationPeriod $PeriodModel,
		Country $CountryModel ,
		Specialty $Specialty ,
		RegistrationType $type)
	{
		$period = $PeriodModel->orderBy('id' ,'desc')
		->with('year')
		->current()
		->first();
		if(!$period) {
			return redirect()->route('welcome');
		}

		$specialties = $Specialty->lists('name', 'id');

		$registration_types = $type->lists('title', 'id')->toArray();

		$countries = $CountryModel->all();

		$countries_list = [""=>""]+$countries->lists('name' ,'id')->toArray();

		$codes_list = [""=>""]+$countries->lists('calling_code' ,'id')->toArray();
		
		$stay_types = config('registration.stay_types');
		
		$social_status = [""=>"",'single'=>'أعزب' ,'married'=>'متزوج / متزوجة' ,'divorced'=>'مطلق / مطلقة' ,'widow'=>'أرمل /أرملة'];

		$social_job_status = [""=>"",'unemployed'=>'بدون عمل' ,'employed'=>'أعمل' ,'retired'=>'متقاعد'];

		$computer_skills = [""=>"",'excellent'=>'ممتاز' ,'great'=>'جيد جدا' ,'very_low'=>'ضعيف جدا' ,'low'=>'ضعيف' ,'good'=>'جيد'];

		$social_job_types = [""=>"",'government'=>'عام' ,'private'=>'خاص' ,'free'=>'حر'];

		$social_jobs = [""=>"",'unemployed'=>'بدون عمل' ,'employed'=>'أعمل' ,'retired'=>'متقاعد'];

		$references = [""=>"",'iiswebsite'=>'موقع كلية العلوم الشرعية','iisewebsite'=>'موقع مركز التعليم عن بعد','iisfriend'=>'صديق يدرس بالكلية','iisefriend'=>'صديق يدرس بمركز التعليم عن بعد','other'=>'أخرى'];

		$period = $PeriodModel->orderBy('id' ,'desc')
		->with('year')
		->where(function($sql) {
			$sql->where('start_at','<=' ,date('Y-m-d'))
			->where('finish_at','>=' ,date('Y-m-d'));
		})
		->first();

		return view('registration::registrar.apply' ,compact('specialties','registration_types', 'period' ,'countries' ,'stay_types' ,'countries_list' ,'references','computer_skills','codes_list' ,'social_job_types','social_status' ,'social_jobs'));
	}

	public function store(RegisterRequest $request ,
		Registration $registration ,
		RegistrationPeriod $PeriodModel,
		RegistrationStep $StepModel
		)
	{
		$input = $request->all();

		$registration->fill($input);

		$step = $StepModel->verifyEmail()
		->first();

		$period = $PeriodModel->current()
		->first();

		$username = daress_generate_username();
		$registration->username = $username;
		$registration->registration_period_id = $period->id;
		$registration->registration_step_id = $step->id;


		if($registration->save()) {
			
			/** check for extra degrees an dstore them */
			$this->saveExtraDegrees($input, $registration->id);
			/** end check for extra degrees */
			
			event(new RegistrationCreated($registration));
			event(new RegistrationUpdated($registration));
			event(new RegistrationStepChanged($registration, ['comment'=>'تفعيل البريد الإلكتروني']));

			return view('registration::registrar.signup_success');
		} else {
			return redirect()->back()->with('error', 'لم يتم تسجيل طلبك ، المرجو التواصل مع الدعم الفني للمزيد من المعلومات');
		}

	}

	public function verifyEmail($token, Registration $RegistrationModel)
	{
		if(!$registration = $RegistrationModel->whereVerificationToken($token)->first()) {
			return redirect()->route('welcome');
		}
		
		if($registration->email_verified) {
			return redirect()->route('registration.registrar.index')->with('success', trans('registration::registrar.already_verified_email'));
		}
		$nextStep = $registration->step->children()->first();
		
		$registration->email_verified = 1;
		$registration->registration_step_id = $nextStep->id;
		$registration->save();
		// event(new RegistrationUpdated($registration));
		event(new RegistrationStepChanged($registration, ['comment'=>'يرجى تحميل ملفاتك']));

		return redirect()->route('registration.registrar.index')->with('success', trans('registration::registrar.email_verified', ['name'=>$registration->fullname]));
	}

	public function saveExtraDegrees($input, $registration_id)
	{
		$extra_degrees_keys=[];
			foreach($input as $key=>$value){
				if(count($parts = explode('degree_name', $key))>1) {
					$extra_degrees_keys[] = $parts[1];
				}
			}

			$extra_degrees = [];
			foreach ($extra_degrees_keys as $key) {

				$extra_degrees[] = [
				'registration_id'		 =>$registration_id,
				'degree_name'		     =>$input['degree_name'.$key],
				'degree_country_id'      =>$input['degree_country_id'.$key],
				'degree_speciality'      =>$input['degree_speciality'.$key],
				'degree_institution'     =>$input['degree_institution'.$key],
				'degree_graduation_year' =>$input['degree_graduation_year'.$key],
				'degree_score'           =>$input['degree_score'.$key],
				];
			}

			if(!empty($extra_degrees)) {
				RegistrationDegree::insert($extra_degrees);
			}
	}
}