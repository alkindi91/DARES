<?php namespace Modules\Mustafatest\Http\Controllers;



use Modules\Mustafatest\Entities\MustafaTest;
use Modules\Users\Entities\User;
use Pingpong\Modules\Routing\Controller;

class MustafaTestController extends Controller {
	
	public function index(MustafaTest $mst)
	{

		$data = $mst->all();
		
		return view('mustafatest::index', compact('data'));
	}


	public function Create()
	{
		return view('mustafatest::create');
	}
	public function Store()
	{
		return view('mustafatest::store');
	}
	
}