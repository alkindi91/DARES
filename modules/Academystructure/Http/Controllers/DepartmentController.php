<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Entities\Year;
use Modules\Academystructure\Entities\Term;
use Modules\Academystructure\Entities\Department;
use Modules\Academystructure\Entities\Specialty;
use Modules\Subject\Entities\Subject;
use Modules\Academystructure\Http\Requests\Department\validationRequest;
use Illuminate\Http\Request;

class DepartmentController extends Controller {
	/**
	* @desc show list of department and its parent sequence and subject per year
	* @param Term $term int to load terms 
	* @param Department $department to load parent_deparment_sequence	
	* @param Department $department to load list of subject append them to its department object
	* @param Faculty $faculty for breadcrumbs
	**/
	public function index(Term $term , Department $department, Faculty $faculty, Subject $subject)
	{		
	    $departments = $department->menu()->with('parent_department')->where('term_id', '=', $term->id)->get();
		$subjects = 	$subject->all();
			
		foreach($departments as &$department) {
			
			$department->subjects = $subjects->filter(function($subject) use ($department) {
						return in_array($subject->id ,json_decode($department->subject_ids,TRUE));
				});	
		}
		
		$breadcrumbs = $faculty->breadcrumbs()->where('at.id', '=', $term->id)->first();
		return view('academystructure::departments.index' , compact('departments' , 'term' , 'breadcrumbs'));
	}
	/**
	* @desc Add New Department 
	* @create function Open Create From view
	* @param Term $term 
	* @param Department $department for parent department list
	* @param Specialty $specialty for parent specialty list
	* @param Subject $subject for parent subject list	
	**/
	public function create(Term $term , Department $department ,Specialty $specialty , Subject $subject)
	{	
		$subjects = 	$subject->lists('name','id')->toArray();
		$specialties = $specialty->get();
	    $menu = $department->menu()->get();
		
		return view('academystructure::departments.create',compact('term' , 'specialties' , 'menu' , 'subjects'));
	}
	/**	
	* @store  function insert Department 
	* @param validationRequest $request paramters send from create form
	* @redirct to department index with term_id
 	**/
	public function store(Department $department , validationRequest $request)
	{
		// save list of selected subject as json ex:["1","2","3"]
		$department->subject_ids = json_encode($request->input('subject_ids'));
		
		$input = $request->all();
		$department->fill($input)->save();
		
		$term_id = $request->input('term_id');
		
		return redirect()->route('as.departments.index' , [$term_id]);
	}		
	/**
	* @desc Edit Department 
	* @Edit function Open Edit From view
	* @param Department $department (get department data from provider route model binding $router->model)
	* @param Specialty $specialty for parent specialty list
	* @param Subject $subject for parent subject list	
	**/
	public function edit(Department $department, Specialty $specialty, Subject $subject)
	{	
		$subjects = 	$subject->lists('name','id')->toArray();		
	    $menu = $department->menu()->get();
		$specialties = $specialty->get();
		
		return view('academystructure::departments.edit',compact('department' ,'menu', 'specialties', 'subjects'));
	}	
	/**
	* @update Function Update department
	* @param Department $department (get department that will update from provider route model binding $router->model)
	* @param validationRequest $request paramter send from edit form
	* @redirct to department index with term_id
 	**/
	public function update(Department $department , validationRequest $request)
	{
		$department ->spec_id = $request->input('spec_id');
		$department ->parent_id = $request->input('parent_id');	
		$department->subject_ids = json_encode($request->input('subject_ids'));
		$department ->save(); 
		
		$term_id = $request->input('term_id');	

		return redirect()->route('as.departments.index' , [$term_id]);
	}
	/**
	* @desc Delete term 
	* @param Department $department (get department that will update from provider route model binding $router->model)
	* @redirct to department index with term_id
	**/	
	public function delete(Department $department)
	{				
		$department->delete();
		$term_id = $department->term_id;
		
		return redirect()->route('as.departments.index' , [$term_id] );
	}
	
}