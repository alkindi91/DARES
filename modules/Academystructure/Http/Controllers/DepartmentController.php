<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Entities\Year;
use Modules\Academystructure\Entities\Term;
use Modules\Academystructure\Entities\Department;
use Modules\Academystructure\Entities\Specialty;
use Modules\Academystructure\Http\Requests\Department\validationRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller {

	public function index(Term $term , Department $department)
	{		
	    $departments = $department->menu()->with('parent_department')->where('term_id', '=', $term->id)->get();
		
		return view('academystructure::departments.index' , compact('departments' , 'term'));
	}
	
	public function create(Term $term , Department $department ,Specialty $specialty)
	{		
		$specialties = $specialty->get();
	    $menu = $department->menu()->get();

		return view('academystructure::departments.create',compact('term' , 'specialties' , 'menu'));
	}	
	public function store(Department $department , validationRequest $request)
	{
		
		$input = $request->all();
		$department->fill($input)->save();
		
		$term_id = $request->input('term_id');
		
		return redirect()->route('as.departments.index' , [$term_id]);
	}
	/////////////////////////////////////////////////////////////////////////////	
	public function edit(Department $department, Specialty $specialty)
	{		
	    //$department_info = $department->menu()->whereRaw('academystructure_departments.id='.$department->id)->first();		
	    $menu = $department->menu()->get();
		$specialties = $specialty->get();
		
		return view('academystructure::departments.edit',compact('department' ,'menu', 'specialties'));
	}
	public function update(Department $department , validationRequest $request)
	{
		$department ->spec_id = $request->input('spec_id');
		$department ->parent_id = $request->input('parent_id');	
		$department ->save(); 
		
		$term_id = $request->input('term_id');	

		return redirect()->route('as.departments.index' , [$term_id]);
	}
	/////////////////////////////////////////////////////////////////////////////	
	public function delete(Department $department)
	{
				
		$department->delete();
		$term_id = $department->term_id;
		
		return redirect()->route('as.departments.index' , [$term_id] );
	}
	
}