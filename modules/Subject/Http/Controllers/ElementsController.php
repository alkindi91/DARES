<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectElement;
use Pingpong\Modules\Routing\Controller;

class ElementsController extends Controller {
	
	public function element($lessonid)
	{ 	

		$elements = SubjectElement::where('subject_lesson_id',$lessonid)->paginate(20);
		
		return view('subject::elements.index_element', array('elements'=>$elements,'id'=>$lessonid));
	}
	
	public function create_element($lessonid)
	{
		
		return view('subject::elements.create_element',array('id'=>$lessonid)); 
	}

	public function store_element(SubjectElement $elelment, Request $req,$lessonid)
	{
		$elelment->fill($req->all())->save();

		$message = 'تم اضافة العنصر بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('subject.element',array('id'=>$lessonid))->with('success' ,$message);

	}

	public function edit_element($elementid)
	{
		$elements = SubjectElement::findOrFail($elementid);
		//dd($elements);
		return view('subject::elements.edit_element',compact('elements'));
	}

	public function update_element($elementid,SubjectElement $element, Request $req)
	{
		$element = $element->findOrFail($elementid);
    	
    	$element->fill($req->all())->save();

    	return redirect()->route('subject.element',$element->subject_lesson_id);
	}

	public function delete_element($elementid,SubjectElement $element)
	{
		$message = 'تم حذف العنصر بنجاح';
		$element = $element->findOrFail($elementid);
    	
    	$element->delete();

    	return redirect()->route('subject.element',$element->subject_lesson_id)->with('success' ,$message);
	}
}