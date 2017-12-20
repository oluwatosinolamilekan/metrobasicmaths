<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PinsController extends Controller
{
    //
    public function getpin($length = 5)
    {

        
        if ( ! function_exists('openssl_random_pseudo_bytes'))
    {
        throw new RuntimeException('OpenSSL extension is required.');
    }

    $bytes = openssl_random_pseudo_bytes($length * 2);

    if ($bytes === false)
    {
        throw new RuntimeException('Unable to generate random string.');
    }

    return substr(str_replace(array('/', '+', '='), '', base64_encode($bytes)), 0, $length);
    
        
        return view('pins.getpin');
    }

   
    public static function quickRandom($length = 16)
{
    $pool = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';

    return substr(str_shuffle(str_repeat($pool, $length)), 0, $length);
}

    // public function randomId(){

    //  $id = str_random(10);

    //  $validator = \Validator::make(['id'=>$id],['id'=>'unique:table,col']);

    //  if($validator->fails()){
    //       $this->randomId();
    //  }

    //  return $id;
}


    
//}
