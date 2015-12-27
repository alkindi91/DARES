<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Entities\Year;
use Modules\Academystructure\Entities\Department;
use Modules\Academystructure\Http\Requests\Year\validationRequest;
use Illuminate\Http\Request;

class YearController extends Controller {
	/**
	* @desc show list of years per faculty
	* @param Faculty $faculty int to load years 
	* @param Department $department fro breadcrumbs
	**/
	public function index(Faculty $faculty, Department $department)
	{		
		$faculty->load('years');
		$years = $faculty->years;
		
		return view('academystructure::years.index' , compact('years' , 'faculty' , 'menu'));
	}
	/**
	* @desc Add New Year 
	* @create function Open Create From view
	* @param Faculty $faculty 
	* @store  function insert Year 
	* @param validationRequest $request paramter send from create form
	* @redirct to year index with Faculty_id
 	**/
	public function create(Faculty $faculty)
	{
		return view('academystructure::years.create',compact('faculty'));
	}	
	public function store(Year $year , validationRequest $request)
	{
		$input = $request->all();			
		$year->fill($input)->save();
		
		$faculty_id = $request->input('faculty_id');
		return redirect()->route( 'as.years.index' , [$faculty_id] );
	}
	/**
	* @desc Edit Year 
	* @Edit function Open Edit From view
	* @param Year $year (get year data from provider route model binding $router->model)
	* @update Function Update year
	* @param Year $year (get year that will update from provider route model binding $router->model)
	* @param validationRequest $request paramter send from edit form
	* @redirct to year index with Faculty_id
 	**/
	public function edit(Year $year)
	{		
		return view('academystructure::years.edit',compact('year'));
	}
	public function update(Year $year , validationRequest $request)
	{
		$year->name = $request->input('name');		
		$year->save();
		
		$faculty_id = $request->input('faculty_id');	
		return redirect()->route('as.years.index' , [$faculty_id]);
	}
	
	/**
	* @desc Delete Year 
	* @param Year $year (get year from provider route model binding $router->model)
	* @redirect to year index with faculty_id
	**/
	public function delete(Year $year)
	{
		$faculty_id = $year->faculty_id;
		$year->delete();
		return redirect()->route('as.years.index' , [$faculty_id] );
	}
	
}