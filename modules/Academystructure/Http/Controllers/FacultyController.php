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
		
}