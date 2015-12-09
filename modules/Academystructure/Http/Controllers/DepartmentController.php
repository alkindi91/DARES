<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Entities\Year;
use Modules\Academystructure\Entities\Term;
use Modules\Academystructure\Entities\Department;
use Modules\Academystructure\Http\Requests\Department\validationRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller {

	public function index(Term $term)
	{
		$term->load('departments');
		$departments = $term->departments;
		
		return view('academystructure::departments.index' , compact('departments' , 'term'));
	}
	
	public function create(Term $term , Department $department)
	{		
	    $menu = $department->menu()->get();
	    //$menu = $department->menu()->where()->get();
		return view('academystructure::departments.create',compact('term' , 'menu'));
	}	
	public function store(Department $department , validationRequest $request)
	{
		
		$input = $request->all();
		$department->fill($input)->save();
		
		$term_id = $request->input('term_id');
		
		return redirect()->route('as.departments.index' , [$term_id]);
	}
	/////////////////////////////////////////////////////////////////////////////	
	public function edit(Department $department)
	{		
	    $menu = $department->menu()->get();
		return view('academystructure::departments.edit',compact('department', 'menu'));
	}
	public function update(Department $department , validationRequest $request)
	{
		$department ->name = $request->input('name');		
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