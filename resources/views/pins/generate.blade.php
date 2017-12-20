@extends('layouts.master')

@section('content')

        <div class="col-sm-8 blog-main">
        <?php

    $pin_array = array();
    $num_of_Pin = 50;
    for($i=1; $i<=$num_of_Pin; $i++){
        $start = "1111111111";
        $end = "9999999999";
        $pin = rand($start , $end);
        $pin_array[$i] = $pin;
    }

$html = "";
    $html.='
        <p style="color:green; font-weight:bold; text-align:center;"> Your Generated Pins are given below:</p>
        <table border="1" cellspacing="0" style="width:100%;" class="table table-inverse">
        <tr >';
    $i=1;$sn=1;
    foreach ($pin_array as $pin){
        
        $html.='
        
        <td  >'.$sn.'</td>';
        $html.='
        
        <td >'.$pin.'</td>';
        
        if($i%5==0){
            $html.='</tr>';
        }

        $i++;$sn++;
    }
    $html.='</table>';
    
    echo $html;

        ?>
        <br/>

        </div>

@endsection