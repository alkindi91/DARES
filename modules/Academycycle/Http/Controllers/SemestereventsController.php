<?php namespace Modules\Academycycle\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SemestereventsController extends Controller {
	
	public function index()
	{
		return view('academycycle::index');
	}
	
}