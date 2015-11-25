<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Entities\AcademystructureYear;
use Modules\Academystructure\Http\Requests\Year\CreateRequest;
use Modules\Academystructure\Http\Requests\Year\UpdateRequest;
use Illuminate\Http\Request;

class YearController extends Controller {

	public function index(AcademystructureFaculty $faculty )
	{
		$faculty->load('years');
		$years = $faculty->years;
		//$faculty = Faculty::with('years' ,'photos')->paginate(10);
		
		return view('academystructure::year.index' , compact('years' , 'faculty'));
	}
	
	public function create_year(AcademystructureFaculty $faculty)
	{
		return view('academystructure::year.create',compact('faculty'));
	}	
	public function store_year(AcademystructureYear $year , CreateRequest $request)
	{
		$input = $request->all();			
		$year->fill($input)->save();
		
		$faculty_id = $request->input('faculty_id');
		return redirect()->route( 'year.index' , [$faculty_id] );
	}
	
	public function edit_year(AcademystructureYear $year)
	{		
		return view('academystructure::year.edit',compact('year'));
	}
	public function update_year(AcademystructureYear $year , UpdateRequest $request)
	{
		$year->name = $request->input('name');		
		$year->save();
		
		$faculty_id = $request->input('faculty_id');	
		//return($faculty_id);
		return redirect()->route('year.index' , [$faculty_id]);
	}
	
	public function delete_year(AcademystructureYear $year)
	{
		$faculty_id = $year->faculty_id;
		$year->delete();
		return redirect()->route( 'year.index' , [$faculty_id] );
	}
	
	
}