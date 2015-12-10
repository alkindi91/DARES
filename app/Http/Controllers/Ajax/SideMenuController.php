<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Session;

class SideMenuController extends Controller
{
   

    
    public function toggle(Request $request)
    {
        Session::put('sidebar' ,'toggeled');
        if(Session::has('sidebar')) {
            Session::forget('sidebar');
        } else {
             Session::put('sidebar' ,'toggeled');
        }

        if($request->ajax()) {
            return response()->json(Session::has('sidebar'));
        }

        return redirect()->route('welcome');
    }
}
