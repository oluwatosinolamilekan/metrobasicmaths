<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneratesController extends Controller
{
    //

    public function generate()
    {
        return view('pins.generate');
    }

    public function enterpin()
    {
        return view('pins.enterpin');
    }

    // public function asume()
    // {
    //     // $pin_array = array();
    //     $num_of_Pin = 200;
    //     for($i=1; $i<=$num_of_Pin; $i++){
    //     $start = "1111111111";
    //     $end = "9999999999";
    //     $pin = rand($start , $end);
    //     // $pin_array[$i] = $pin;
    //     $html="";

    //     }

    //      if($i%5==0){
    //         $html.='</tr>';
    //     }

    //     return view('pins.asume',compact($html));

    //     // return view('pins.asume');
    // }
}

