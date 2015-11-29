<?php namespace Modules\Lists\Http\Controllers\Api;

use Pingpong\Modules\Routing\Controller;

class CountriesController extends Controller {
	
	public function index()
	{
		return view('lists::index');
	}
	
}