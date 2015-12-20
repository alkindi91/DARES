<?php namespace Modules\Questionbank\Http\Controllers;


use Illuminate\Http\Request;
use Modules\Questionbank\Entities\choice;
use Modules\Questionbank\Entities\Question;
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
	public function questionlistsub($id){
		$subject = Subject::with('questions')->find($id);
		$questions = $subject->questions;
		
		return view('questionbank::questionlistsub',compact('questions', 'subject'));		

	}
	public function questionlist($lessonid){
		$questions = Question::paginate(20)->where('lesson_id',$lessonid);
		//var_dump($questions->toArray());
		return view('questionbank::questionlist',compact('questions'));
	}

	public function create($id)

	{	$type=config('questionbank.types');
		$difficulty=config('questionbank.difficulty');
		$level=config('questionbank.level');

		return view('questionbank::create', compact('id','type','difficulty','level'));
	}

	public function store(Question $question, Request $req,$id)
	{
		
	$question->fill($req->all())->save();

	
		$message = 'تم اضافة السؤال بنجاح';
		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('elements.index',array('id'=>$lessonid))->with('success' ,$message);

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
		
	}

	
}