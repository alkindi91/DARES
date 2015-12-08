<?php namespace Modules\Registration\Http\Controllers;

use DomDocument;
use Modules\Lists\Entities\Country;
use Modules\Registration\Entities\RegistrationPeriod;
use Modules\Registration\Http\Requests\RegisterRequest;
use Pingpong\Modules\Routing\Controller;
class RegistrarController extends Controller {
	
	public function index(RegistrationPeriod $PeriodModel)
	{
		

		$period = $PeriodModel->orderBy('id' ,'desc')
		                      ->with('year')
		                      ->where(function($sql) {
		                      	$sql->where('start_at','<=' ,date('Y-m-d'))
		                      	    ->where('finish_at','>=' ,date('Y-m-d'));
		                      })
		                      ->first();
       
		return view('registration::registrar.index' ,compact('period'));
	}

	public function apply(RegistrationPeriod $PeriodModel, Country $CountryModel)
	{
		
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

		return view('registration::registrar.apply' ,compact('period' ,'countries' ,'stay_types' ,'countries_list' ,'references','computer_skills','codes_list' ,'social_job_types','social_status' ,'social_jobs'));
	}

	public function store(RegisterRequest $request) {
		
	}
	
}
