<?php namespace Modules\Subject\Http\Controllers;


use Illuminate\Http\Request;
use Modules\Academystructure\Entities\Term;
use Modules\Subject\Entities\SubjectSubject;
use Modules\Subject\Http\Requests\Subject\SubjectRequest;
use Pingpong\Modules\Routing\Controller;

class SubjectsController extends Controller {
	

	// this block for subject
	public function index()
	{   	
		$subjects = SubjectSubject::with('prerequest' ,'children')->paginate(20);
		

		
		return view('subject::subjects.index',compact('subjects'));
	}

	public function create(Term $term){
		
		

		$types=config('subject.types');
		$pre_request=SubjectSubject::lists('name' ,'id')->toArray();
		return view('subject::subjects.create',compact('types','pre_request'));

	}//

	 //this block for subject
	public function store(SubjectSubject $subject, SubjectRequest $req)
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

		$types=config('subject.types');

		$pre_request=SubjectSubject::lists('name' ,'id')->toArray();
		
		return view('subject::subjects.edit' ,compact('subjects','types','pre_request'));

	}
	public function update(SubjectSubject $subject,SubjectRequest $req, $id)
	{   
		$subject = $subject->findOrFail($id);

    	$subject->fill($req->all())->save();
	$message = 'تم تعديل المادة بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
    	return redirect()->route('subject.index')->with('success' ,$message);
		
	}

	public function delete(SubjectSubject $subject, $id){
	
		$subject = $subject->findOrFail($id)->delete();

    	$message ="تم حذف المادة بنجاح";
    	return redirect()->route('subject.index')->with('success' ,$message);
		
	}
	
	public function deleteBulk(Request $req ,SubjectSubject $SubjectModel) {

		// if the table_records is empty we redirect to the subject index
		if(!$req->has('table_records')) return redirect()->route('subject.index');

		// we get all the ids and put them in a variable
		$ids = $req->input('table_records');
		// we delete all the subject with the ids $ids
		$SubjectModel->destroy($ids);
		// we redirect to the user index view with a success message
		return redirect()->route('subject.index')->with('success');
	}

	
}