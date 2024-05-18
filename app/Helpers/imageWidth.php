<?php

function imageWidth($img)
{
    if(!empty($img) && strlen($img) < 100 )
    {
        list($w,$h) = getimagesize("/Volumes/4tb/sites/planningmelbourne/public$img");
       
        if($h>$w)
        {
            $width = $w / $h * 100; 
            $width = "$width%"; 
        }
        else{
            $width="100%";
        }

        return $width;
    } 
    
}