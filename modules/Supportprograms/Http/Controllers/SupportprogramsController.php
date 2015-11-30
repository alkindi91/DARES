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
	public function store(){

		
		
	}
	
	
}