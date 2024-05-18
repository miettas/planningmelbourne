<?php

function random($table,$id,$type){

    $ary = [];

    if(empty($type))
        $array = $table::get();
    else{
        $array = $table::where('type','<>',$type)->get();
    }

    foreach($array as $a){
        $ary = (array)$ary;
        array_push($ary, $a->$id);
    }

    $d = $ary[rand(0, count($ary)-1)];

    $info = $table::where($id,$d)->first();

    return $info;
    
}