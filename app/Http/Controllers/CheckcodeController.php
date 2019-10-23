<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckcodeController extends Controller
{
    function sendcodici(){
        
        $data = array('name'=>"Pincia", "body" => "Aggiornamento file codici");
       \Mail::send('sidebar', $data, function($message) {
        $message->to('federicopinciaroli@gmail.com', 'Fede Pinco')
        ->subject('Aggiornamento file codici');
        $message->from('federicopinciaroli@gmail.com','Pincia');
        $message->attach('./codici.txt', [
            'as' => 'your-desired-name.zip', 
            'mime' => 'application/pdf'
        ]);
      });

      if (\Mail::failures()) {
        return response()->Fail('Sorry! Please try again latter');
      }else{
        return response()->json('Yes, You have sent email to GMAIL from LARAVEL 5.8 !!');
       
       
      } 
    }
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
