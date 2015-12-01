<?php namespace Modules\Supportprograms\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Ahmedtest\Entities\AhmedTest;
use Modules\Supportprograms\Entities\SupportprogramsApplication;
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
	public function store(SupportprogramsApplication $SubProgModel, Request $req){
dd("dddddd");
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
	
	
}