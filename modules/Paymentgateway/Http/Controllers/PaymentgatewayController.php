<?php namespace Modules\Paymentgateway\Http\Controllers;

use Pingpong\Modules\Routing\Controller;

class PaymentgatewayController extends Controller {
	
	public function index()
	{
		return view('Paymentgateway::index');
	}
	
}