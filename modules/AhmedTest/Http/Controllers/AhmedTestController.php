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
		
    	return view('ahmedtest::show')->withTask($task);
		//return view('ahmedtest::show');
		
	}
	public function edit($id){
		$task = Ahmedtest::findOrFail($id);
		
    	return view('ahmedtest::edit')->withTask($task);
		
	}
	public function update($id, Request $req,AhmedTest $a){
		$task = $a->findOrFail($id);

    	$input = $req->all();

    	$task->fill($input)->save();
    	return redirect()->route('ahmedtest.index');

		/*$input = $req->all();

		$ahmed->find($id);
		//dd($req->all());
		$ahmed->update($input);
		
		return redirect()->back();*/
	}
}