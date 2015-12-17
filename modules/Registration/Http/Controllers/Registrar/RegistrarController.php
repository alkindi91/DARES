<?php namespace Modules\Registration\Http\Controllers\Registrar;

use DomDocument;
use Illuminate\Http\Request;
use Modules\Academystructure\Entities\Department;
use Modules\Academystructure\Entities\Specialty;
use Modules\Lists\Entities\Country;
use Modules\Registration\Entities\Registration;
use Modules\Registration\Entities\RegistrationFile;
use Modules\Registration\Entities\RegistrationHistory as History;
use Modules\Registration\Entities\RegistrationPeriod;
use Modules\Registration\Entities\RegistrationStep;
use Modules\Registration\Entities\RegistrationType;
use Modules\Registration\Events\RegistrationCreated;
use Modules\Registration\Events\RegistrationStepChanged;
use Modules\Registration\Events\RegistrationUpdated;
use Modules\Registration\Http\Requests\RegisterRequest;
use Pingpong\Modules\Routing\Controller;
class RegistrarController extends Controller {
	
	public function index(RegistrationPeriod $PeriodModel)
	{
		$period = $PeriodModel->orderBy('id' ,'desc')
		                      ->with('year')
		                      ->current()
		                      ->first();
       
		return view('registration::registrar.index' ,compact('period'));
	}

	
	
	public function portal()
	{
		return view('registration::registrar.portal');
	}

	public function status(History $History)
	{
		$histories = $History->with('creator', 'step', 'registration')->where('registration_id', daress_registerd()->id)->get();

		return view('registration::registrar.status' ,compact('histories'));
	}

	public function files()
	{
		$files = RegistrationFile::where('registration_id', daress_registerd()->id)->get();
		$registration = daress_registerd();
		return view('registration::registrar.files', compact('files', 'registration'));
	}

	

	public function form(RegistrationPeriod $PeriodModel,
	 Country $CountryModel ,
	 Specialty $Specialty ,
	 Registration $Registration ,
	 RegistrationType $type)
	{
		$registration = $Registration->with('degrees','contactcountry', 'contactcity', 'birthcountry', 'nationalitycity')->find(daress_registerd()->id);

		$specialties = $Specialty->lists('name', 'id');

		$registration_types = $type->lists('title', 'id')->toArray();

		$countries = $CountryModel->all();

		$countries_list = [""=>""]+$countries->lists('name' ,'id')->toArray();

		$codes_list = [""=>""]+$countries->lists('calling_code' ,'id')->toArray();
		
		$stay_types = config('registration.stay_types');
		
		$social_status = [""=>""]+config('registration.social_status');

		$social_job_status = [""=>"",'unemployed'=>'بدون عمل' ,'employed'=>'أعمل' ,'retired'=>'متقاعد'];

		$computer_skills = [""=>"",'excellent'=>'ممتاز' ,'great'=>'جيد جدا' ,'very_low'=>'ضعيف جدا' ,'low'=>'ضعيف' ,'good'=>'جيد'];

		$social_job_types = [""=>"",'government'=>'عام' ,'private'=>'خاص' ,'free'=>'حر'];

		$social_jobs = [""=>"",'unemployed'=>'بدون عمل' ,'employed'=>'أعمل' ,'retired'=>'متقاعد'];

		$references = [""=>"",'iiswebsite'=>'موقع كلية العلوم الشرعية','iisewebsite'=>'موقع مركز التعليم عن بعد','iisfriend'=>'صديق يدرس بالكلية','iisefriend'=>'صديق يدرس بمركز التعليم عن بعد','other'=>'أخرى'];

		return view('registration::registrar.form' ,compact('registration','specialties','registration_types', 'period' ,'countries' ,'stay_types' ,'countries_list' ,'references','computer_skills','codes_list' ,'social_job_types','social_status' ,'social_jobs'));

	}

	
	public function uploadDone(){
		$registration = daress_registerd();
		$step = $registration->step;
		$step->load('children');

		$nextStepId = $step->children->first()->id;
		$registration->registration_step_id = $nextStepId;
		$registration->save();
		$registration->load('step');
		session()->put(config('registration.session_key'), $registration);
		event(new RegistrationStepChanged($registration));
		return redirect()->route('registration.registrar.index')->with('success',trans('registration.registrar.processing_files'));
	}
}
