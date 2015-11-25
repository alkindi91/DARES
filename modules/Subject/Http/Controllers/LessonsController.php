<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectLesson;
use Modules\Subject\Http\Requests\Lesson\LessonRequest;
use Pingpong\Modules\Routing\Controller;

class LessonsController extends Controller {
	
	public function index()
	{
		//$tasks = SubjectLesson::where('academystructure_subject_id',$id)->paginate(20);
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

	public function store_lesson(SubjectLesson $sub, LessonRequest $req)
	{

		$input = $req->all();
		$sub->fill($input)->save();

		$message = 'تم اضافة الدرس بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('subject.index')->with('success' ,$message);
	}

	public function edit_lesson($id)
	{
		$lesson = SubjectLesson::findOrFail($id);
		return view('subject::lessons.edit_lesson',compact('lesson'));
	}

	public function update_lesson($id,SubjectLesson $sub, LessonRequest $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->save();
    	return redirect()->route('subject.index');
	}

	public function delete_lesson($id,SubjectLesson $sub, Request $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->delete();
    	return redirect()->route('subject.index');
	}
	
}