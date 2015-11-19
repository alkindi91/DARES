<?php namespace Modules\Lists\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ListsController extends Controller {
	
	public function index()
	{
		return view('lists::index');
	}
	
}