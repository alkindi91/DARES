<?php namespace Modules\Academystructure\Http\Controllers;

use Pingpong\Modules\Routing\Controller;
use Modules\Academystructure\Entities\AcademystructureFaculty;
use Modules\Academystructure\Http\Requests\Faculty\CreateRequest;
use Modules\Academystructure\Http\Requests\Faculty\UpdateRequest;
use Illuminate\Http\Request;

class AcademystructureController extends Controller {
	
	public function index()
	{
		return view('academystructure::index');
	}
	
}