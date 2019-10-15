<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckcodeController extends Controller
{
    function check(Request $req){
        if($req->code=='carote'){
            return redirect('/home');
        }
        else{
            return redirect('/wrong');
        }
      
    }
}
