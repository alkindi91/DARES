<?php namespace Modules\Registration\Http\Controllers\Registrar;

use DomDocument;
use Modules\Academystructure\Entities\Department;
use Modules\Academystructure\Entities\Specialty;
use Modules\Lists\Entities\Country;
use Modules\Registration\Entities\Registration;
use Modules\Registration\Entities\RegistrationPeriod;
use Modules\Registration\Entities\RegistrationStep;
use Modules\Registration\Entities\RegistrationType;
use Modules\Registration\Events\RegistrationCreated;
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

	public function status()
	{
		return view('registration::registrar.status');
	}

	public function files()
	{
		return view('registration::registrar.files');
	}

	public function form()
	{
		return view('registration::registrar.form');
	}

}
