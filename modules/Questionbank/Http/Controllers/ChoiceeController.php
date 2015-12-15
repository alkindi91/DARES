<?php namespace Modules\Questionbank\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class choiceeController extends Controller {
	
	public function index()
	{
		return view('questionbank::index');
	}
	
}