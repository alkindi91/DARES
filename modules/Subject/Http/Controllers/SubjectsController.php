<?php namespace Modules\Subject\Http\Controllers;


use Illuminate\Http\Request;
use Modules\Academystructure\Entities\Term;
use Modules\Subject\Entities\SubjectSubject;
use Pingpong\Modules\Routing\Controller;

class SubjectsController extends Controller {
	

	// this block for subject
	public function index()
	{   	
		$subjects = SubjectSubject::paginate(20);
	
		return view('subject::subjects.index',compact('subjects'));
	}

	public function create(Term $term){
		
		$terms = $term->lists('name' ,'id')->toArray();

		return view('subject::subjects.create',compact('terms'));

	}//

	 //this block for subject
	public function store(SubjectSubject $subject, Request $req)
	{   
		$subject->fill($req->all())->save();

		$message = 'تم اضافة المادة بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('subject.index')->with('success' ,$message);

		
	}

	public function edit(Term $term,$id){
		$subjects = SubjectSubject::findOrFail($id);

		$terms = $term->lists('name' ,'id')->toArray();

		return view('subject::subjects.edit' ,compact('terms','subjects'));

	}
	public function update(SubjectSubject $subject,Request $req, $id)
	{   
		$subject = $subject->findOrFail($id);

    	$subject->fill($req->all())->save();

    	return redirect()->route('subject.index');
		
	}

	public function delete(SubjectSubject $subject, $id){
	
		$subject = $subject->findOrFail($id)->delete();

    	
    	return redirect()->route('subject.index');
		
	}
	

	
}