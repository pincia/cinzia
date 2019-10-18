<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\NexmoMessage;


class ConfirmController extends Controller
{
    function confirm(Request $req){
        $name = $req->name;
        $surname = $req->surname;
        echo $name;
        echo $surname;
        $sms = new NexmoMessage('c716ae89', 'KFHujQ9BCOrj79eR');
       $result =  $sms->sendText( '+393202191525', 'PROHIBITIONPARTY', 'Ciao Cinzia, '.$name.' '.$surname.' ha confermato la sua presenza al Prohibiton Party!' );
        return redirect('/thankyou')->with( ['name' => $req->name] );
    }
}
