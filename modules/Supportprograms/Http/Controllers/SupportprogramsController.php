<?php namespace Modules\Supportprograms\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Ahmedtest\Entities\AhmedTest;
use Modules\Supportprograms\Entities\SupportprogramsApplication;
use Modules\Supportprograms\Http\Requests\ProgramRequest;
use Pingpong\Modules\Routing\Controller;

class SupportprogramsController extends Controller {

	/**
	 * Display All the Programs
	 * @param  SupportprogramsApplication   $AppModel The Supportprograms model
	 * @return \Illuminate\View\View            the Supportprograms index view index.blade.php
	 */
	public function index(SupportprogramsApplication $AppModel)
	{
		// get an instance of the Supportprograms model
		// get our programs with pagination with 20 program per page
		$programs = $AppModel->paginate(20);

		// return the index view of the Supportprograms module with a collection of programs objects
		return view('supportprograms::index',compact('programs'));
	}
	/**
	 * Display the form to create new program
	 * @return return to the program index view index.blade.php
	 */
	public function create(){

		return view('supportprograms::create');

	}
	/**
	 * Create a new program with data sent from the create form
	 * @param  SupportprogramsApplication $SubProgModel The Supportprograms model
	 * @param  ProgramRequest             $req          CreateUserRequest $request we validate the data sent from the form in this class before we continue our logic
	 * @return return to the program index view index.blade.php
	 */
	public function store(SupportprogramsApplication $SubProgModel, ProgramRequest $req){
		$input = $req->all();

		$SubProgModel->fill($input)->save();

		$message = trans('supportprograms::programs.create_success');

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('supportprograms.index')->with('success' ,$message);

	}
	/**
	 * Display the view to edit a program
	 * @param  SupportprogramsApplication $SubProgModel we receive an inject model of the program
	 * @param  int                        $id 			we receive the id of the program we want to edit
	 * @return return to the program edit view edit.blade.php
	 */
	public function edit(SupportprogramsApplication $SubProgModel,$id){

		$program = $SubProgModel->findOrFail($id);
		return view('supportprograms::edit',compact('program'));

	}
	/**
	 * update a program with the data from the edit form
	 * @param  SupportprogramsApplication $SubProgModel he Supportprograms model
	 * @param  ProgramRequest             $req          CreateUserRequest $request we validate the data sent from the form in this class before we continue our logic
	 * @param  int                        $id           program id to be updated   
	 * @return return to the program index view index.blade.php                                 [description]
	 */
	public function update(SupportprogramsApplication $SubProgModel ,ProgramRequest $req, $id){

		$program = $SubProgModel->findOrFail($id);
		$input   = $req->all();
		$program->fill($input)->save();
		$message = trans('supportprograms::programs.update_success');

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('supportprograms.index')->with('success', $message);
	}
	/**
	 * Delete a single program
	 * @param  SupportprogramsApplication $SubProgModel Supportprograms model
	 * @param  int                     $id           we receive the id of the program we want to delete
	 * @return return to the program index view index.blade.php       
	 */
	public function delete(SupportprogramsApplication $SubProgModel , $id)
	{
		
		$program = $SubProgModel->findOrFail($id)->delete();

    	$message = trans('supportprograms::programs.delete_success');

		if(request('submit')=='delete')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('supportprograms.index')->with('success', $message);
	}
	/**
	 * delete all selected programs at once
	 * @param  SupportprogramsApplication $SubProgModel Supportprograms model
	 * @param  Request                    $req          CreateUserRequest $request we validate the data sent from the form in this class before we continue our logic
	 * @return return to the program index view index.blade.php 
	 */
	public function deletebulk(SupportprogramsApplication $SubProgModel ,Request $req) {
		
		// if the table_records is empty we redirect to the support programs index
		if(!$req->has('table_records')) return redirect()->route('supportprograms.index');
		// we delete all the programs with the ids $ids
		$SubProgModel->destroy($req->input('table_records'));
		// we redirect to the support programs index view with a success message
		return redirect()->route('supportprograms.index')->with('success' ,trans('supportprograms::programs.delete_bulk_success'));
	}
	
}