<?php

namespace App\Http\Controllers\Ajax;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class SideMenuController extends Controller
{
   

    
    public function toggle(Request $request)
    {
        if($request->session()->has('sidebar_hidden')) {
            $request->session()->forget('sidebar_hidden');
        } else {
             $request->session()->put('sidebar_hidden' ,1);
        }

        if($request->ajax()) {
            return response()->json(1);
        }

        return redirect()->route('welcome');
    }
}
