<?php namespace Modules\Lists\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Lists\Entities\City;
use Pingpong\Modules\Routing\Controller;

class CitiesController extends Controller {
	
	public function index(City $city ,Request $request)
	{
		$cities = $city->orderBy('id' ,'desc');

		if($request->has('country_id')) {
			$cities->where('country_id' ,$request->input('country_id'));
		}

		return $cities->get();
	}
	
}