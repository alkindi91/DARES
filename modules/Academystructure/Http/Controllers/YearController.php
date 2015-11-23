<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Year\CreateRequest;
use Modules\Academystructure\Http\Requests\Year\UpdateRequest;
use Illuminate\Http\Request;

class yearController extends Controller {

	public function index()
	{
		return view('academystructure::index');
	}
	public function create_year()
	{
		return view('academystructure::index');
	}
	public function delete_year()
	{
		return view('academystructure::index');
	}
	public function edit_year()
	{
		return view('academystructure::index');
	}
	
}