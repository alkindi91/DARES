<<<<<<< HEAD
<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Faculty\CreateRequest;
use Modules\Academystructure\Http\Requests\Faculty\UpdateRequest;
use Illuminate\Http\Request;

class FacultyController extends Controller { 
	
	public function index(AcademystructureFaculty $faculty)
	{
		$faculties = $faculty->get();
		
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
		
		return redirect()->route('faculty.index');
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
	public function delete_faculty(AcademystructureFaculty $faculty)
	{
		$faculty->delete();
		return redirect()->route('faculty.index');
	}
		
=======
<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Http\Requests\Faculty\validationRequest;
use Illuminate\Http\Request;

class FacultyController extends Controller { 
	
	public function index(Faculty $faculty)
	{
		$faculties = $faculty->get();
		
		return view('academystructure::faculties.index' ,compact('faculties'));
	}
	public function create()
	{
		return view('academystructure::faculties.create');
	}
	public function store(Faculty $faculty , validationRequest $request)
	{				
		$input = $request->all();			
		$faculty->fill($input)->save();
		
		return redirect()->route('as.faculties.index');
	}
	public function edit(Faculty $faculty)
	{
		//return 55;
		return view('academystructure::faculties.edit',compact('faculty'));
	}
	public function update(Faculty $faculty , validationRequest $request)
	{				
		$faculty->name = $request->input('name');		
		$faculty->save();
		
		return redirect()->route('as.faculties.index');
	}
	public function delete(Faculty $faculty)
	{
		$faculty->delete();
		return redirect()->route('as.faculties.index');
	}
		
>>>>>>> 2b6f9ef3aea52fb6c39c2df7ebd66a02e8ef6d15
}