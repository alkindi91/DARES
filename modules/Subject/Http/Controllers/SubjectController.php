<?php namespace Modules\Subject\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class SubjectController extends Controller {
	

	// this block for lessons
	public function index()
	{
		return view('subject::index_lessons');
	}

	public function create_lessons()
	{
		return view('subject::create_lessons');
	}

	public function store_lessons()
	{
		return view('subject::store_lessons');
	}

	public function edit_lessons()
	{
		return view('subject::edit_lessons');
	}

	public function update_lessons()
	{
		return view('subject::update_lessons');
	}

	public function delete_lessons()
	{
		return view('subject::delete_lessons');
	}

	// end block 
}