<?php namespace Modules\Questionbank\Http\Controllers;


use Modules\Subject\Entities\Lesson;
use Modules\Subject\Entities\Subject;
use Pingpong\Modules\Routing\Controller;

class QuestionbankController extends Controller {
	
	public function index()
	{		$subjects = Subject::paginate(20);
		//$subjects = Subject::all()->toArray();
		
		return view('questionbank::index',compact('subjects'));
	}

public function index_lesson ($subjectid){

		$lessons=Lesson::where('subject_subject_id',$subjectid)->paginate(20);
		return view('questionbank::lesson',compact('lessons'));

}

	public function create($id)

	{	$type=config('questionbank.types');
		$difficulty=config('questionbank.difficulty');
		$level=config('questionbank.level');

		return view('questionbank::create', compact('id','type','difficulty','level'));
	}

	public function store()
	{
		return view('questionbank::index');
	}

	public function update()
	{
		return view('questionbank::index');
	}

	public function edit()
	{
		return view('questionbank::index');
	}


	public function delete()
	{
		return view('questionbank::index');
	}

	
}