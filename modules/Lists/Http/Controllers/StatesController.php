<?php namespace Modules\Lists\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Lists\Entities\State;
use Modules\Lists\Entities\City;
use Modules\Lists\Http\Requests\State\CreateRequest;
use Modules\Lists\Http\Requests\State\UpdateRequest;
use Pingpong\Modules\Routing\Controller;

class StatesController extends Controller {
	
	public function index(City $city)
	{
		$city->load('states' ,'country');
		
		$states = $city->states;

		return view('lists::states.index' ,compact('states' ,'city'));
	}

	public function create(City $city) {

		$city->load('country');

		return view('lists::states.create' ,compact('city'));

	}

	public function store(CreateRequest $req ,City $city ,State $State) {

		$state = $State->fill($req->all());

		$state->city_id = $city->id;
		$state->save();

		$message = trans('lists::states.create_success' ,['name'=>$State->name]);
		
		if(request('submit')=='save') {
			return redirect()->back()
						 ->with('success' ,$message);
		} else {
			return redirect()->route('states.index' ,$State->city_id)
						 ->with('success' ,$message);
		}
	}

	public function edit(State $state) {
		$state->load('city' ,'city.country');
		$city = $state->city;
		return view('lists::states.edit' ,compact('state' ,'city'));
	}

	public function update(UpdateRequest $req ,State $State) {

		$State->fill($req->all())->save();

		$message = trans('lists::states.update_success' ,['name'=>$State->name]);

		if(request('submit')=='save') {
			return redirect()->back()
						 ->with('success' ,$message);
		} else {
			return redirect()->route('states.index' ,$State->city_id)
						 ->with('success' ,$message);
		}

	}

	public function delete(State $state) {
		
		$state->delete();

		return redirect()->route('states.index' ,$state->city_id)->with('success' ,trans('lists::states.delete_success' ,['name'=>$state->name]));
	}

	public function deleteBulk(Request $req ,State $StateModel ,City $city) {
		
		if(!$req->has('table_records')) return redirect()->route('states.index');
		
		$ids = $req->input('table_records');

		$StateModel->destroy($ids);
		
		return redirect()->route('states.index' ,$city->id)->with('success' ,trans('lists::states.delete_bulk_success'));
	}
	
}