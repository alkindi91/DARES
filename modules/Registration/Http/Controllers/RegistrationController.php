<?php namespace Modules\Registration\Http\Controllers;

use Modules\Registration\Entities\Registration;
use Pingpong\Modules\Routing\Controller;

class RegistrationController extends Controller {
	
	public function index(Registration $Registration)
	{
		$registrations = $Registration->orderBy('id', 'desc');

		$registrations = $registrations->paginate(50);
		return view('registration::index', compact('registrations'));
	}
	
}