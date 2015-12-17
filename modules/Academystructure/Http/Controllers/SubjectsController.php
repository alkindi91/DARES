<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SubjectsController extends Controller {
	
	public function index()
	{
		return view('academystructure::index');
	}
	
}