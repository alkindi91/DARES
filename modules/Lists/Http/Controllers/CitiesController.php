<?php namespace Modules\Lists\Http\Controllers;

use Illuminate\Http\Request;
use Modules\Lists\Entities\City;
use Modules\Lists\Entities\Country;
use Modules\Lists\Http\Requests\City\CreateCityRequest;
use Modules\Lists\Http\Requests\City\UpdateCityRequest;
use Pingpong\Modules\Routing\Controller;

class CitiesController extends Controller {
	
	public function index(Country $country)
	{
		$country->load('cities');
		
		$cities = $country->cities;

		return view('lists::cities.index' ,compact('cities' ,'country'));
	}

	public function create(Country $country) {

		return view('lists::cities.create' ,compact('country'));

	}

	public function store(CreateCityRequest $req ,Country $country ,City $City) {

		$city = $City->fill($req->all());
		$city->country_id = $country->id;
		$city->save();

		return redirect()->route('cities.index' ,$country->id)
						 ->with('success' ,trans('lists::cities.create_success', ['name'=>$city->name]));
	}

	public function edit(City $city) {
		$city->load('country');
		$country = $city->country;
		return view('lists::cities.edit' ,compact('city' ,'country'));
	}

	public function update(UpdateCityRequest $req ,City $City) {

		$City->fill($req->all())->save();

		return redirect()->route('cities.index' ,$City->country_id)
						 ->with('success' ,trans('lists::cities.update_success' ,['name'=>$City->name]));

	}

	public function delete(City $city) {
		
		$city->delete();

		return redirect()->route('cities.index' ,$city->country_id)->with('success' ,trans('lists::cities.delete_success' ,['name'=>$city->name]));
	}

	public function deleteBulk(Request $req ,City $CityModel ,Country $country) {
		
		if(!$req->has('table_records')) return redirect()->route('cities.index');
		
		$ids = $req->input('table_records');

		$CityModel->destroy($ids);
		
		return redirect()->route('cities.index' ,$country->id)->with('success' ,trans('lists::cities.delete_bulk_success'));
	}
	
}