<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckcodeController extends Controller
{
    function check(Request $req){
        if($req->code=='CAZZAROLA'){
            return "HAI VINTO!";
        }
        else{
            return redirect('/wrong');
        }
      
    }
}
