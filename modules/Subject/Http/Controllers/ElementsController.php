<?php namespace Modules\Subject\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ElementsController extends Controller {
	
	public function index()
	{
		return view('subject::index');
	}
	
}