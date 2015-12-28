<?php namespace Modules\Registration\Http\Controllers;

use Modules\Registration\Entities\RegistrationFile;
use Pingpong\Modules\Routing\Controller;

class FilesController extends Controller {
	
	public function index(RegistrationFile $File,$registration_id)
	{
		$files = $File->where('registration_id', $registration_id)->paginate(30);
		$types = config('registration.files.types');
		$new_types = collect(array_keys($types));
		$exist_types = collect($files->lists('type')->toArray());
		

		
		
		
		$intersects = $new_types->intersect($files->lists('type')->toArray());
		dd($intersects);
		return view('registration::files.index', compact('files'));
	}
	
}