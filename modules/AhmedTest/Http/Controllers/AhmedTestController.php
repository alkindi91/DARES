<?php namespace Modules\Ahmedtest\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Modules\Ahmedtest\Entities\AhmedTest;
use Modules\Users\Http\Requests\CreateUserRequest;
use Pingpong\Modules\Routing\Controller;

class AhmedTestController extends Controller {
	
	public function index()
	{
		$tasks = Ahmedtest::all();
		/*
		OR send model as argument
		
		 */ 
    	return view('ahmedtest::index')->withTasks($tasks);
	}
	public function test(){ 
		# code...
		return view('ahmedtest::test');
	}
	public function store(AhmedTest $ahmed, Request $req){

		
		$input = $req->all();
		//dd($input);
		$ahmed->fill($input)->save();
		return redirect()->back();
	}
	public function create(){

		return view('ahmedtest::create');
	}

	public function show($id){

		$task = Ahmedtest::findOrFail($id);

		if(request('age')) {

		}

		
    	return view('ahmedtest::show')->withTask($task);
		//return view('ahmedtest::show');
		
	}
	public function edit(){

    	return view('Ahmedtest::edit');
		
	}
}