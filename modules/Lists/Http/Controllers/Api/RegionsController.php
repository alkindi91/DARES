<?php namespace Modules\Lists\Http\Controllers\Api;

use Illuminate\Http\Request;
use Modules\Lists\Entities\Region;
use Pingpong\Modules\Routing\Controller;

class RegionsController extends Controller {
	
	public function index(Request $request ,Region $region)
	{
		$regions = $region->orderBy('id' ,'desc');

		if($request->has('state_id')) {
			$regions->where('state_id' ,$request->input('state_id'));
		}

		$regions = $regions->get();
		
		return $regions;
	}
	
}