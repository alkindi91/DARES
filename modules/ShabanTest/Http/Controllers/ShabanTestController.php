<?php namespace Modules\Shabantest\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class ShabanTestController extends Controller {
	
	public function index()
	{
		return view('shabantest::index');
	}
	
}