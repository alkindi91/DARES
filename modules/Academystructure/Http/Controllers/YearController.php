<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Entities\Year;
use Modules\Academystructure\Http\Requests\Year\validationRequest;
use Illuminate\Http\Request;

class YearController extends Controller {

	public function index(Faculty $faculty)
	{
		
		$faculty->load('years');
		$years = $faculty->years;
		
		return view('academystructure::years.index' , compact('years' , 'faculty'));
	}
	
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
	
	public function edit(Year $year)
	{		
		return view('academystructure::years.edit',compact('year'));
	}
	public function update(Year $year , validationRequest $request)
	{
		$year->name = $request->input('name');		
		$year->save();
		
		$faculty_id = $request->input('faculty_id');	
		//return($faculty_id);
		return redirect()->route('as.years.index' , [$faculty_id]);
	}
	
	public function delete(Year $year)
	{
		$faculty_id = $year->faculty_id;
		$year->delete();
		return redirect()->route('as.years.index' , [$faculty_id] );
	}
	
}