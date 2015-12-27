<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\Faculty;
use Modules\Academystructure\Entities\Year;
use Modules\Academystructure\Entities\Term;
use Modules\Academystructure\Entities\Department;
use Modules\Academystructure\Http\Requests\Term\validationRequest;
use Illuminate\Http\Request;

class TermController extends Controller {
	/**
	* @desc show list of terms per year
	* @param Year $year int to load terms 
	* @param Department $department fro breadcrumbs
	**/
	public function index(Year $year, Department $department , Faculty $faculty)
	{
		$year->load('terms');
		$terms = $year->terms;
		$breadcrumbs = $faculty->breadcrumbs()->where('ay.id', '=', $year->id)->first();
		//dd($breadcrumbs);
		return view('academystructure::terms.index' , compact('terms' , 'year' , 'breadcrumbs'));
	}
	/**
	* @desc Add New Term 
	* @create function Open Create From view
	* @param Year $year 
	* @store  function insert Year 
	* @param validationRequest $request paramters send from create form
	* @redirct to term index with year_id
 	**/
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
	/**
	* @desc Edit Term 
	* @Edit function Open Edit From view
	* @param Term $term (get term data from provider route model binding $router->model)
	* @update Function Update term
	* @param Term $term (get year that will update from provider route model binding $router->model)
	* @param validationRequest $request paramter send from edit form
	* @redirct to term index with year_id
 	**/
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
	/**
	* @desc Delete term 
	* @param Term $term (get term from provider route model binding $router->model)
	* @redirect to term index with year_id
	**/	
	public function delete(Term $term)
	{
		$term->delete();
		
		$year_id = $term->year_id;
		return redirect()->route('as.terms.index' , [$year_id] );
	}
	
}