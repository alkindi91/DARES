<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Subject\CreateRequest;
use Modules\Academystructure\Http\Requests\Subject\UpdateRequest;
use Illuminate\Http\Request;

class SubjectController extends Controller {

	public function index()
	{
		return view('academystructure::index');
	}
	public function create_subject()
	{
		return view('academystructure::index');
	}
	public function delete_subject()
	{
		return view('academystructure::index');
	}
	public function edit_subject()
	{
		return view('academystructure::index');
	}
	
}