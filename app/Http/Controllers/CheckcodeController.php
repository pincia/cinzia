<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckcodeController extends Controller
{
    function check(Request $req){
        if($req->code=='speakeasy'){
            $val ="pippo";
            return redirect('/home')->with( ['vote' => $val] );

        }
        else{
            return redirect('/wrong');
        }
      
    }
}
