<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Entities\Year;
use Modules\Academystructure\Entities\Term;
use Modules\Academystructure\Http\Requests\Term\validationRequest;
use Illuminate\Http\Request;

class TermController extends Controller {

	public function index(Year $year)
	{
		$year->load('terms');
		$terms = $year->terms;
		
		return view('academystructure::terms.index' , compact('terms' , 'year'));
	}
	/////////////////////////////////////////////////////////////////////////////
	public function create(Year $year)
	{
		return view('academystructure::terms.create',compact('year'));
	}	
	public function store(Term $term , validationRequest $request)
	{
		$input = $request->all();
		$term->fill($input)->save();
		
		$year_id = $request->input('year_id');
		return redirect()->route('as.terms.index' , [$year_id]);
	}
	/////////////////////////////////////////////////////////////////////////////	
	public function edit(Term $term)
	{		
		return view('academystructure::terms.edit',compact('term'));
	}
	public function update(Term $term , validationRequest $request)
	{
		$term ->name = $request->input('name');		
		$term ->save(); 
		
		$year_id = $request->input('year_id');	

		return redirect()->route('as.terms.index' , [$year_id]);
	}
	/////////////////////////////////////////////////////////////////////////////	
	public function delete(Term $term)
	{
		$term->delete();
		
		$year_id = $term->year_id;
		return redirect()->route('as.terms.index' , [$year_id] );
	}
	
}