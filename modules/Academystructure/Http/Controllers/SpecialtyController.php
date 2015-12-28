<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Specialty;
use Modules\Academystructure\Http\Requests\Faculty\validationRequest;

class SpecialtyController extends Controller {
	/**
	* @desc display list of faculties
	**/
	public function index(Specialty $specialty)
	{
		$specialties = $specialty->get();
		return view('academystructure::specialties.index' ,compact('specialties'));
	}
	/**
	* @desc Add New Specialty 
	* @create function Open Create From view
	* @store  function insert Specialty 
	* @redirect to specialty index
 	**/
	public function create()
	{
		return view('academystructure::specialties.create');
	}
	public function store(Specialty $specialty , validationRequest $request)
	{				
		$input = $request->all();			
		$specialty->fill($input)->save();
		

		$message = 'تمت الاضافة بنجاح';
		return redirect()->route('as.specialties.index')->with('success',trans('academystructure::specialties.create_success'));
	}
	/**
	* @desc Edit Specialty
	* @edit   Function sent faculty data to edit from 
	* @param Specialty $specialty (get specialty data from provider route model binding $router->model)
	* @update Function Update specialty 
	* @redirct to specialty index
	**/
	public function edit(Specialty $specialty)
	{
		return view('academystructure::specialties.edit',compact('specialty'));
	}
	public function update(Specialty $specialty , validationRequest $request)
	{				
		$specialty->name = $request->input('name');
		$specialty->code = $request->input('code');			
		$specialty->save();
		
		return redirect()->route('as.specialties.index')->with('success',trans('academystructure::specialties.update_success'));
	}
	/**
	* @desc Delete specialty
	* @param Specialty $specialty (get specialty data from provider route model binding $router->model lisner)
	* @delete Function delete specialty 
	* @redirct to specialty index
	**/
	public function delete(Specialty $specialty)
	{
		$specialty->delete();
		return redirect()->route('as.specialties.index');
	}
	
}