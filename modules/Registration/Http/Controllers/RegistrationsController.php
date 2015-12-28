<?php namespace Modules\Registration\Http\Controllers;

use Modules\Academycycle\Entities\AcademycycleYear;
use Modules\Lists\Entities\Country;
use Modules\Registration\Entities\Registration;
use Modules\Registration\Entities\RegistrationStep;
use Pingpong\Modules\Routing\Controller;

class RegistrationsController extends Controller {
	
	public function index(Registration $Registration)
	{
		$registrations = $Registration->with('step','period','period.year')->orderBy('id', 'desc');
		
		$steps         = RegistrationStep::lists('name','id')->toArray();
		
		$countries     = Country::lists('name','id')->toArray();
		
		$search_fields = ['gender','registration_step_id','nationality_type','contact_country_id','social_status','social_job'];
		
		$years         = AcademycycleYear::lists('name', 'id')->toArray();

		$genders = config('registration.genders');

		foreach($search_fields as $field) {
			if(request($field)) {
				$registrations->whereIn($field,request($field));
			}
		}

		if(request('academycycle_year')) {
			$registrations->whereHas('period', function($query){
				
					$query->whereHas('year',function($query2){
						$query2->whereIn('id',request('academycycle_year'));
					});
				
			});
		}

		if(request('national_id')) {
			$registrations->where('national_id', request('national_id'));
		}

		if(request('contact_email')) {
			$registrations->where('contact_email', request('contact_email'));
		}

		$registrations = $registrations->paginate(50);
		return view('registration::registrations.index', compact('registrations', 'steps', 'countries', 'years'));
	}

	
	
}