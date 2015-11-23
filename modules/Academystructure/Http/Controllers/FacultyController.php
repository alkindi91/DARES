<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Faculty\CreateRequest;
use Modules\Academystructure\Http\Requests\Faculty\UpdateRequest;
use Illuminate\Http\Request;

class FacultyController extends Controller {
	
	public function index(AcademystructureFaculty $FacultyModel)
	{
		// get an instance of the faculty model 
		$faculties = $FacultyModel->orderBy('id' ,'desc');
		
		// get our results with pagination with 20 faculty per page
		$faculties = $faculties->paginate(20);

		// return the index view of the faculties module with a collection of faculties objects
		return view('academystructure::faculty.index' ,compact('faculties'));
	}
	public function create_faculty()
	{
		return view('academystructure::faculty.create');
	}
	public function store_faculty(AcademystructureFaculty $faculty , CreateRequest $request)
	{				
		$input = $request->all();			
		$faculty->fill($input)->save();
		
		//return redirect()->route('faculty.index');
	}
	public function edit_faculty(AcademystructureFaculty $faculty)
	{
		//return 55;
		return view('academystructure::faculty.edit',compact('faculty'));
	}
	public function update_faculty(AcademystructureFaculty $faculty , CreateRequest $request)
	{				
		$faculty->name = $request->input('name');		
		$faculty->save();
		
		return redirect()->route('faculty.index');
	}
	public function delete_faculty()
	{
		return view('academystructure::faculty.index');
	}
		
}