<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Http\Requests\Faculty\validationRequest;
use Illuminate\Http\Request;

class FacultyController extends Controller { 
	/**
	* @desc display list of faculties
	**/
	public function index(Faculty $faculty)
	{
		$faculties = $faculty->get();
		
		return view('academystructure::faculties.index' ,compact('faculties'));
	}
	/**
	* @desc Add New Faculty 
	* @create function Open Create From view
	* @store  function insert Faculty 
	* @redirect to faculty index
 	**/
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
	/**
	* @desc Edit Faculty
	* @edit   Function sent faculty data to edit from 
	* @param Faculty $faculty (get faculty data from provider route model binding $router->model)
	* @update Function Update faculty 
	* @redirct to faculty index
	**/
	public function edit(Faculty $faculty)
	{
		return view('academystructure::faculties.edit',compact('faculty'));
	}
	public function update(Faculty $faculty , validationRequest $request)
	{				
		$faculty->name = $request->input('name');		
		$faculty->save();
		
		return redirect()->route('as.faculties.index');
	}
	/**
	* @desc Delete Faculty
	* @param Faculty $faculty (get faculty data from provider route model binding $router->model lisner)
	* @delete Function delete faculty 
	* @redirct to faculty index
	**/
	public function delete(Faculty $faculty)
	{
		$faculty->delete();
		return redirect()->route('as.faculties.index');
	}
		
}