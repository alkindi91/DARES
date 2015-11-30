<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Http\Requests\Department\validationRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller {

	public function index()
	{
		return view('academystructure::index');
	}
	public function create()
	{
		return view('academystructure::index');
	}
	public function delete()
	{
		return view('academystructure::index');
	}
	public function edit()
	{
		return view('academystructure::index');
	}
	
}