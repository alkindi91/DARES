<?php namespace Modules\Academystructure\Http\Controllers;

use Modules\Subject\Entities\Subject;
use Pingpong\Modules\Routing\Controller;

class SubjectsController extends Controller {
	
	public function index($depid)
	{
		$subjects=Subject::lists('name','id')->toArray();
		return view('academystructure::subjects.index',compact('subjects'));
	}
	
}