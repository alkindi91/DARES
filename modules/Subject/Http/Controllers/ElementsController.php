<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectElement;
use Modules\Subject\Http\Requests\Element\ElementRequest;
use Pingpong\Modules\Routing\Controller;

class ElementsController extends Controller {
	
	public function index($lessonid)
	{ 	

		$elements = SubjectElement::where('subject_lesson_id',$lessonid)->paginate(20);
		
		return view('subject::elements.index_element', array('elements'=>$elements,'id'=>$lessonid));
	}
	
	public function create($lessonid)
	{
		
		return view('subject::elements.create_element',array('id'=>$lessonid)); 
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
		//dd($elements);
		return view('subject::elements.edit_element',compact('elements'));
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
}