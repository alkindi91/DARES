<?php namespace Modules\Supportprograms\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SupportprogramsController extends Controller {
	
	public function index()
	{
		return view('supportprograms::index');
	}
	
}