<?php namespace Modules\Academycycle\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class AcademycycleController extends Controller {
	
	public function index()
	{
		return view('academycycle::index');
	}
	
}