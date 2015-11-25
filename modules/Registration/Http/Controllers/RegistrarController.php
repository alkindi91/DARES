<?php namespace Modules\Registration\Http\Controllers;

use Modules\Lists\Entities\Country;
use Modules\Registration\Entities\RegistrationPeriod;
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
		$countries = $CountryModel->lists('name' ,'id')->toArray();
		$stay_types = config('registration.stay_types');
		
		$period = $PeriodModel->orderBy('id' ,'desc')
		                      ->with('year')
		                      ->where(function($sql) {
		                      	$sql->where('start_at','<=' ,date('Y-m-d'))
		                      	    ->where('finish_at','>=' ,date('Y-m-d'));
		                      })
		                      ->first();

		return view('registration::registrar.apply' ,compact('period' ,'countries' ,'stay_types'));
	}
	
}