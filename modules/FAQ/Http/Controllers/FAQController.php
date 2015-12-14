<?php namespace Modules\Faq\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class FAQController extends Controller {
	
	public function index()
	{
		return view('faq::index');
	}
	
}