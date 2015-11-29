<?php namespace Modules\Lists\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Lists\Entities\State;
use Pingpong\Modules\Routing\Controller;

class StatesController extends Controller {
	
	public function index(Request $request ,State $state)
	{
		$states = $state->orderBy('id' ,'desc');

		if($request->has('city_id')) {
			$states->where('city_id' ,$request->input('city_id'));
		}

		$states = $states->get();
		
		return $states;
	}
	
}