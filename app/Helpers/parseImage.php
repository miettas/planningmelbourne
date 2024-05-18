<?php

function parseImage($img)
{
    preg_match('/".*?"/',$img,$matches);
    if(strpos($matches[0],'.')){
        $img = $matches[0];
    }
    preg_replace('/"/',$img,'');
    str_replace( '/','',$img,1);

    $ary = explode('/',$img);

    $ext = end($ary);
    array_pop($ary);
    $name = end($ary);
    array_pop($ary);
    
    $path = implode('/',$ary);

    $imgPath = array($path,$name,$ext);

    return $imgPath;
}