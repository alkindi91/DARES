<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Http\Requests\CreateStructureRequest;

use Modules\Academystructure\Entities\Faculty;
use Modules\Users\Entities\User;

class AcademyStructureController extends Controller {
	
	public function index()
	{
		return view('academystructure::index');
	}

	public function create(User $UserModel) {
		
		$users = $UserModel->lists('name' ,'id')->toArray();
				
		return view('academystructure::create' ,compact('users'));
	}

	public function store(CreateStructureRequest $request ,Faculty $FacultyModel) {
		
		$FacultyModel->fill($request->all())->save();

		return redirect()->route('academystructure.index')->with('success' ,'تم الاضفة');
	}


	
}