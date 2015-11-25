<?php namespace Modules\Lists\Http\Controllers;

use Modules\Lists\Entities\Country;
use Modules\Lists\Http\Requests\Country\CreateCountryRequest;
use Modules\Lists\Http\Requests\Country\UpdateCountryRequest;
use Pingpong\Modules\Routing\Controller;

class CountriesController extends Controller {
	
	public function index()
	{
		$countries = Country::orderBy('id' ,'desc');

		$countries = $countries->get();
		
		return view('lists::countries.index' ,compact('countries'));

	}

	public function create() {

		return view('lists::countries.create');

	}

	public function store(CreateCountryRequest $req ,Country $Country) {

		$country = $Country->fill($req->all())->save();

		$message = trans('lists::countries.create_success');

		if(request('submit')=='save') {
			return redirect()->back()
						 ->with('success' ,$message);
		} else {
			return redirect()->route('countries.index')
						 ->with('success' ,$message);
		}
	}

	public function edit(Country $country) {
		return view('lists::countries.edit' ,compact('country'));
	}

	public function update(UpdateCountryRequest $req ,Country $Country) {

		
		$Country->fill($req->all())->save();

		$message = trans('lists::countries.update_success' ,['name'=>$Country->name]);

		if(request('submit')=='save') {
			return redirect()->back()
						 ->with('success' ,$message);
		} else {
			return redirect()->route('countries.index')
						 ->with('success' ,$message);
		}
	}

	public function delete(Country $country) {
		
		$country->delete();

		return redirect()->route('countries.index')->with('success' ,trans('lists::countries.delete_success' ,['name'=>$country->name]));
	}

	public function deleteBulk(Request $req ,Country $CountryModel) {
		
		if(!$req->has('table_records')) return redirect()->route('countries.index');
		
		$ids = $req->input('table_records');

		$CountryModel->destroy($ids);
		
		return redirect()->route('countries.index')->with('success' ,trans('lists::countries.delete_bulk_success'));
	}
	
}