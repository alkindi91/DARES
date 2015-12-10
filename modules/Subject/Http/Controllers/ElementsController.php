<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectElement;
use Modules\Subject\Http\Requests\Element\ElementRequest;
use Pingpong\Modules\Routing\Controller;

class ElementsController extends Controller {
	
	public function index($lessonid)
	{ 	

		$elements = SubjectElement::where('subject_lesson_id',$lessonid)->paginate(20);
		
		return view('subject::elements.index_element', compact('elements','lessonid'));
	}
	
	public function create($lessonid)
	{
		$state=config('subject.state');
		return view('subject::elements.create_element',compact('lessonid','state')); 
	}

	public function store(SubjectElement $elelment, ElementRequest $req,$lessonid)
	{
		$elelment->fill($req->all())->save();

		$message = 'تم اضافة العنصر بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('elements.index',array('id'=>$lessonid))->with('success' ,$message);

	}

	public function edit($elementid)
	{
		$elements = SubjectElement::findOrFail($elementid);
		$state=config('subject.state');
		//dd($elements);
		return view('subject::elements.edit_element',compact('elements','state'));
	}

	public function update($elementid,SubjectElement $element, ElementRequest $req)
	{
		$element = $element->findOrFail($elementid);
    	
    	$element->fill($req->all())->save();

    	return redirect()->route('elements.index',$element->subject_lesson_id);
	}

	public function delete($elementid,SubjectElement $element)
	{
		$message = 'تم حذف العنصر بنجاح';
		$element = $element->findOrFail($elementid);
    	
    	$element->delete();

    	return redirect()->route('elements.index',$element->subject_lesson_id)->with('success' ,$message);
	}

		public function deleteBulk($lessonid,Request $req ,SubjectElement $ElementModel) {
		// if the table_records is empty we redirect to the users index
		if(!$req->has('table_records')) return redirect()->route('elements.index');

		// we get all the ids and put them in a variable
		$ids = $req->input('table_records');
		// we delete all the subject with the ids $ids
		$ElementModel->destroy($ids);
		// we redirect to the user index view with a success message
		return redirect()->route('elements.index',$lessonid)->with('success');
	}
}