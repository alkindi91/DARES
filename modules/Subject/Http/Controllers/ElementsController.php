<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\Element;
use Modules\Subject\Entities\Lesson;
use Modules\Subject\Http\Requests\Element\ElementRequest;
use Pingpong\Modules\Routing\Controller;

class ElementsController extends Controller {
	
	public function index($lessonid)
	{ 	

		$elements = Element::where('subject_lesson_id',$lessonid)->paginate(20);

		$lesson_name=Lesson::findOrFail($lessonid)->toArray();
		return view('subject::elements.index_element', compact('elements','lessonid','lesson_name'));
	}
	
	public function create($lessonid)
	{
		$types=config('subject.element_type');
		$state=config('subject.state');
		return view('subject::elements.create_element',compact('lessonid','state','types')); 
	}

	public function store(Element $elelment, ElementRequest $req,$lessonid)
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
		$elements = Element::findOrFail($elementid);
		$state=config('subject.state');
		$types=config('subject.element_type');
		//dd($elements);
		return view('subject::elements.edit_element',compact('elements','state','types'));
	}

	public function update($elementid,Element $element, ElementRequest $req)
	{
		$element = $element->findOrFail($elementid);
    	
    	$element->fill($req->all())->save();

    	$message = 'تم التعديل بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('elements.index',$element->subject_lesson_id)->with('success' ,$message);

		
	}

	public function delete($elementid,Element $element)
	{
		$message = 'تم حذف العنصر بنجاح';
		$element = $element->findOrFail($elementid);
    	
    	$element->delete();

    	return redirect()->route('elements.index',$element->subject_lesson_id)->with('success' ,$message);
	}

		public function deleteBulk($lessonid,Request $req ,Element $ElementModel) {
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