<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;



use Modules\Subject\Entities\Lesson;
use Modules\Subject\Http\Requests\Lesson\LessonRequest;
use Pingpong\Modules\Routing\Controller;

class LessonsController extends Controller {
	
	public function index($sid)
	{
		//$tasks = Lesson::where('academystructure_subject_id',$id)->paginate(20);
		$lessons=Lesson::where('subject_subject_id',$sid)->paginate(20);
//		$lessons = Lesson::paginate(20);
		/*
		OR send model as argument

		 */ 
		return view('subject::lessons.index',compact('lessons','sid'));
	}

	public function create($sid)
	{
		$types=config('subject.lesson_type');
		$state=config('subject.state');
		return view('subject::lessons.create_lesson',compact('sid','types','state'));
	}

	public function store($sid,Lesson $sub, LessonRequest $req)
	{

		$input = $req->all();
			$sub->fill($input)->save();

		$message = 'تم اضافة الدرس بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('lessons.index',$sid)->with('success' ,$message);
	}

	public function edit($id)
	{
		$types=config('subject.lesson_type');
		$state=config('subject.state');
		$lesson = Lesson::findOrFail($id);
		return view('subject::lessons.edit_lesson',compact('lesson','types','state'));
	}

	public function update($id,Lesson $sub, LessonRequest $req)
	{
		$lesson = $sub->findOrFail($id);

    	$input = $req->all();

    	$lesson->fill($input)->save();
    	$message = 'تم تعديل الدرس بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('lessons.index',$lesson->subject_subject_id)->with('success' ,$message);

	}

	public function delete($id,Lesson $sub, Request $req)
	{
		$lesson = $sub->findOrFail($id);

    	$input = $req->all();

    	$lesson->fill($input)->delete();
    	return redirect()->route('lessons.index',$lesson->subject_subject_id);
	}
	public function deleteBulk($id,Request $req ,Lesson $UserModel) {
		// if the table_records is empty we redirect to the users index
		if(!$req->has('table_records')) return redirect()->route('lessons.index');

		// we get all the ids and put them in a variable
		$ids = $req->input('table_records');
		// we delete all the lessons with the ids $ids
		$UserModel->destroy($ids);
		// we redirect to the user index view with a success message
		return redirect()->route('lessons.index',$id)->with('success');
	}
	
}