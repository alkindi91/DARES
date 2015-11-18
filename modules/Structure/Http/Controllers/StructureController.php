<?php namespace Modules\Structure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class StructureController extends Controller {
	
	public function index()
	{
		return view('structure::index');
	}

	public function store() {
		$faculty = new Faculty;
		$faculty->fill($request->all());
		$faculty->save();
	}
	
}