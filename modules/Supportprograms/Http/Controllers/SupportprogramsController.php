<?php namespace Modules\Supportprograms\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Ahmedtest\Entities\AhmedTest;
use Modules\Supportprograms\Entities\SupportprogramsApplication;
use Modules\Supportprograms\Http\Requests\ProgramRequest;
use Pingpong\Modules\Routing\Controller;

class SupportprogramsController extends Controller {
	
	public function index(SupportprogramsApplication $AppModel)
	{


		$programs = $AppModel->all();
				

		return view('supportprograms::index',compact('programs'));
	}

	public function create(){

		return view('supportprograms::create');

	}
	public function store(SupportprogramsApplication $SubProgModel, ProgramRequest $req){
		$input = $req->all();

		$SubProgModel->fill($input)->save();

		$message = 'تم اضافة البرنامج بنجاح';	

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('supportprograms.index')->with('success' ,$message);

	}
	public function edit(SupportprogramsApplication $SubProgModel,$id){

		$program = $SubProgModel->findOrFail($id);
		return view('supportprograms::edit',compact('program'));

	}
	public function update(SupportprogramsApplication $SubProgModel ,ProgramRequest $req, $id){

		$program = $SubProgModel->findOrFail($id);
		$input   = $req->all();
		$program->fill($input)->save();
		$message = 'تم تعديل البينات بنجاح';

		if(request('submit')=='save')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('supportprograms.index')->with('success', $message);
	}
	
	public function delete(SupportprogramsApplication $SubProgModel , $id)
	{
		
		$program = $SubProgModel->findOrFail($id)->delete();

    	$message = 'تم حذف البرنامج بنجاح';

		if(request('submit')=='delete')
		return redirect()->back()->with('success' ,$message);
		else
		return redirect()->route('supportprograms.index')->with('success', $message);
	}
	/**
	 * [deletebulk description]
	 * @param  SupportprogramsApplication $SubProgModel [support programs model]
	 * @param  Request                    $req          [check the reqested array of ids]
	 * @return [type]                                   [return redirect to support programs index page]
	 */
	public function deletebulk(SupportprogramsApplication $SubProgModel ,Request $req) {
		
		// if the table_records is empty we redirect to the support programs index
		if(!$req->has('table_records')) return redirect()->route('supportprograms.index');
		// we delete all the programs with the ids $ids
		$SubProgModel->destroy($req->input('table_records'));
		// we redirect to the support programs index view with a success message
		return redirect()->route('supportprograms.index')->with('success' ,trans('users::users.delete_bulk_success'));
	}
	
}