<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Faculty\CreateRequest;
use Modules\Academystructure\Http\Requests\Faculty\UpdateRequest;
use Illuminate\Http\Request;

class FacultyController extends Controller {
	
	public function index()
	{
		return view('academystructure::index');
	}
	public function create_faculty()
	{
		return view('academystructure::faculty.create');
	}
	public function store_faculty(AcademystructureFaculty $faculty , CreateRequest $request)
	{
				
		$input = $request->all();			
		$faculty->fill($input)->save();
		
		return redirect()->back();
		/*return view('academystructure::index');*/
	}
	public function delete_faculty()
	{
		return view('academystructure::index');
	}
	public function edit_faculty()
	{
		return view('academystructure::index');
	}
		
}