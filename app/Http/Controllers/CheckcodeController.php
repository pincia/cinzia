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
            $txt =$req->code;
            $myfile = file_put_contents('codici.txt', $txt.PHP_EOL , FILE_APPEND | LOCK_EX);
            return redirect('/wrong');
        }
      
    }
}
