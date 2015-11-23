<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectLesson;
use Pingpong\Modules\Routing\Controller;

class LessonsController extends Controller {
	
	public function index()
	{
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
		$tasks = SubjectLesson::findOrFail($id);
		
    	//return view('ahmedtest::edit')->withTask($task);
		//return view('subject::lesson.edit_lesson')->withTask($task);
		return view('subject::lessons.edit_lesson',compact('tasks'));
	}

	public function update_lesson($id,SubjectLesson $sub, Request $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->save();
    	return redirect()->route('subject.index');
		//return view('subject::lesson.update_lesson');
	}

	public function delete_lesson($id,SubjectLesson $sub, Request $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->delete();
    	return redirect()->route('subject.index');
	}
	
}