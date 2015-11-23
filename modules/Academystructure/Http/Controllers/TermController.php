<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Term\CreateRequest;
use Modules\Academystructure\Http\Requests\Term\UpdateRequest;
use Illuminate\Http\Request;

class TermController extends Controller {

	public function index()
	{
		return view('academystructure::index');
	}
	public function create_tearm()
	{
		return view('academystructure::index');
	}
	public function delete_term()
	{
		return view('academystructure::index');
	}
	public function edit_term()
	{
		return view('academystructure::index');
	}
	
}