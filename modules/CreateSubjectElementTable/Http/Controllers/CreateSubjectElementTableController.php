<?php namespace Modules\Createsubjectelementtable\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class CreateSubjectElementTableController extends Controller {
	
	public function index()
	{
		return view('createsubjectelementtable::index');
	}
	
}