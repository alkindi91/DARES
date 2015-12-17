<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SubjectsController extends Controller {
	
	public function index($depid)
	{
		return view('academystructure::subjects.index');
	}
	
}