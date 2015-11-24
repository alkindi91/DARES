<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectElement;
use Pingpong\Modules\Routing\Controller;

class ElementsController extends Controller {
	
	public function element()
	{ 	
		$elements = SubjectElement::paginate(20);
		//echo "sami";
		return view('subject::element.index_element', compact('elements'));
	}
	
	public function create_element()
	{
		return view('subject::element.create_element');
	}

	public function store_element(SubjectElement $elelment, Request $req)
	{
		$elelment->fill($req->all())->save();
		
		return redirect()->back();
	}

	public function edit_element($id)
	{
		$elements = SubjectElement::findOrFail($id);
	
		return view('subject::element.edit_element',compact('elements'));
	}

	public function update_element($id,SubjectLesson $sub, Request $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->save();
    	return redirect()->route('subject.index');
		//return view('subject::lesson.update_lesson');
	}

	public function delete_element($id,SubjectLesson $sub, Request $req)
	{
		$task = $sub->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->delete();
    	return redirect()->route('subject.index');
	}
}