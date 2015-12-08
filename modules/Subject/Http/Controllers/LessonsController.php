<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;



use Modules\Subject\Entities\SubjectLesson;
use Modules\Subject\Http\Requests\Lesson\LessonRequest;
use Pingpong\Modules\Routing\Controller;

class LessonsController extends Controller {
	
	public function index($sid)
	{
		//$tasks = SubjectLesson::where('academystructure_subject_id',$id)->paginate(20);
		$lessons = SubjectLesson::paginate(20);
		/*
		OR send model as argument

		 */ 
		return view('subject::lessons.index',compact('lessons','sid'));
	}

	public function create($sid)
	{
		return view('subject::lessons.create_lesson',compact('sid'));
	}

	public function store($sid,SubjectLesson $sub, LessonRequest $req)
	{

		$input = $req->all();
	
		$sub->fill($input)->save();

		$message = 'تم اضافة الدرس بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('subject.index')->with('success' ,$message);
	}

	public function edit($id)
	{
		$lesson = SubjectLesson::findOrFail($id);
		return view('subject::lessons.edit_lesson',compact('lesson'));
	}

	public function update($id,SubjectLesson $sub, LessonRequest $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->save();
    	return redirect()->route('subject.index');
	}

	public function delete($id,SubjectLesson $sub, Request $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->delete();
    	return redirect()->route('subject.index');
	}
	public function deleteBulk(Request $req ,SubjectLesson $UserModel) {
		// if the table_records is empty we redirect to the users index
		if(!$req->has('table_records')) return redirect()->route('lessons.index');

		// we get all the ids and put them in a variable
		$ids = $req->input('table_records');
		// we delete all the lessons with the ids $ids
		$UserModel->destroy($ids);
		// we redirect to the user index view with a success message
		return redirect()->route('lessons.index')->with('success');
	}
	
}