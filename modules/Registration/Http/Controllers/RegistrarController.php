<?php namespace Modules\Registration\Http\Controllers;

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

	public function apply()
	{
		return view('registration::registrar.apply');
	}
	
}