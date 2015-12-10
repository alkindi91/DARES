<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Specialty;
use Modules\Academystructure\Http\Requests\Faculty\validationRequest;

class SpecialtyController extends Controller {
	
	public function index(Specialty $specialty)
	{
		$specialties = $specialty->get();
		return view('academystructure::specialties.index' ,compact('specialties'));
	}
	public function create()
	{
		return view('academystructure::specialties.create');
	}
	public function store(Specialty $specialty , validationRequest $request)
	{				
		$input = $request->all();			
		$specialty->fill($input)->save();
		
		return redirect()->route('as.specialties.index');
	}
	public function edit(Specialty $specialty)
	{
		//return 55;
		return view('academystructure::specialties.edit',compact('specialty'));
	}
	public function update(Specialty $specialty , validationRequest $request)
	{				
		$specialty->name = $request->input('name');
		$specialty->code = $request->input('code');			
		$specialty->save();
		
		return redirect()->route('as.specialties.index');
	}
	public function delete(Specialty $specialty)
	{
		$specialty->delete();
		return redirect()->route('as.specialties.index');
	}
	
}