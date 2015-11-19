<?php namespace Modules\Registration\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class RegistrationController extends Controller {
	
	public function index()
	{
		return view('registration::index');
	}
	
}