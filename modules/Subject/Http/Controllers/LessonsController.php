<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectLesson;
use Pingpong\Modules\Routing\Controller;

class LessonsController extends Controller {
	
	public function index()
	{
		dd('5');
		$tasks = SubjectLesson::paginate(20);
		/*
		OR send model as argument

		 */ 
		return view('subject::lessons.index',compact('tasks'));
	}

	public function create_lesson()
	{
		return view('subject::lessons.create_lesson');
	}

	public function store_lesson(SubjectLesson $sub, Request $req)
	{
		$input = $req->all();
		//dd($input);
		$sub->fill($input)->save();

		//dd($input);
		return redirect()->back();
		//return view('subject::store_lesson');
	}

	public function edit_lesson($id)
	{
		//dd("sss");
		$task = SubjectLesson::findOrFail($id);
		
    	//return view('ahmedtest::edit')->withTask($task);
		return view('subject::lesson.edit_lesson',compact('task'));
	}

	public function update_lesson()
	{
		return view('subject::lesson.update_lesson');
	}

	public function delete_lesson()
	{
		return view('subject::lesson.delete_lesson');
	}
	
}