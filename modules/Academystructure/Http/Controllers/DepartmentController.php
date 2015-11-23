<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Department\CreateRequest;
use Modules\Academystructure\Http\Requests\Department\UpdateRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller {

	public function index()
	{
		return view('academystructure::index');
	}
	public function create_department()
	{
		return view('academystructure::index');
	}
	public function delete_department()
	{
		return view('academystructure::index');
	}
	public function edit_department()
	{
		return view('academystructure::index');
	}
	
}