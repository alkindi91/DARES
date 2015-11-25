<?php namespace Modules\Subject\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Subject\Entities\SubjectElement;
use Modules\Subject\Entities\SubjectLesson;
use Pingpong\Modules\Routing\Controller;

class SubjectController extends Controller {
	

	// this block for lessons
	public function index()
	{
		$tasks = SubjectElement::all();
		/*
		OR send model as argument

		 */ 
		return view('subject::index')->withTasks($tasks);
	}

	public function create_lesson()
	{
		return view('subject::create_lesson');
	}

	public function store_lesson(SubjectLesson $sub, Request $req)
	{
		$input = $req->only('name');
		//dd($input);
		$sub->fill($input)->save();

		//dd($input);
		return redirect()->back();
		//return view('subject::store_lesson');
	}

	public function edit_lesson()
	{
		return view('subject::edit_lesson');
	}

	public function update_lesson()
	{
		return view('subject::update_lesson');
	}

	public function delete_lesson()
	{
		return view('subject::delete_lesson');
	}

	// end block 

	public function element()
	{
		echo "sami";
		//return view('subject::element.index_element');
	}
	
}