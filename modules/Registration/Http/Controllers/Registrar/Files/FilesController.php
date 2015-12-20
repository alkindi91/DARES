<?php namespace Modules\Registration\Http\Controllers\Registrar\Files;

use Illuminate\Http\Request;
use Modules\Registration\Entities\RegistrationFile as File;
use Pingpong\Modules\Routing\Controller;

class FilesController extends Controller {
	
	public function store(Request $request){

		$file = new File;
		$file->fill($request->only('type','file'));
		$file->registration_id = daress_registerd()->id;
		$file->save();

		$file->isImage = substr($file->file->contentType() ,0 ,5)=='image';
		$file->file_url = asset($file->file->url());
		
		return $file;
	}

	public function delete($id, File $File){
		$file = $File->where('registration_id', daress_registerd()->id)->findOrFail($id);
		$file->delete();
		return response()->json(['success'=>1]);
	}
	
}