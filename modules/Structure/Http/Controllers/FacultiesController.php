<?php namespace Modules\Structure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Structure\Entities\Faculty;
use Illuminate\Http\Request;

class FacultiesController extends Controller {
	
	public function index()
	{
		return view('structure::index');
	}

	public function create() {
		return view("structure::faculties.create");
	}

	public function store(Request $req ,Faculty $FacultyModel) {
		$FacultyModel->fill($req->all())->save();
	}
	
}