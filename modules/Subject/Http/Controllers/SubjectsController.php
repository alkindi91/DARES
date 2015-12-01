<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectElement;
use Modules\Subject\Entities\SubjectLesson;
use Pingpong\Modules\Routing\Controller;

class SubjectsController extends Controller {
	

	// this block for subject
	public function subject_index()
	{   
	
		return view('subject::subjects.index');
	}

	public function subject_create(){
	
		return view('subject::subjects.create');

	}
	
}