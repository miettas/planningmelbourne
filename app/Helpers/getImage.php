<?php
use App\Models\Article;
use App\Models\People_pl;

function getImage($file,$type)   //  $table,$tblid,$id,$type)
{  $caption ='';
    if(isset($file->type)){
        $image = preg_replace('/width="100%"/','style="max-height:200px"',$file->ppimage);
        $article = abbreviate($file->biography, $file->ppid, 'people_pls', 300);
        $caption = '<span class="caption">'.$file->ppcaption.'</span>';

    }
    else{
        if(!empty($file->artimage)){
            $image = preg_replace('/width="100%"/','style="max-height:200px"',$file->artimage);
            $caption = '<span class="caption">'.$file->artcaption.'</span>';
        } 
        else{ 
            if(preg_match("/<img src=.*?>/",$file->article,$matches)){
            
                $image = preg_replace('/width="100%"/','style="max-height:200px"',$matches[0]);
                if(preg_match('/<span class="caption">.*?<.span>/', $file->article,$match)){
                    $caption = $match[0];
                }
            }
            else{
                $image = '';
                $caption = '';
            }
        }
        $article = abbreviate($file->article, $file->artid, 'articles', 300);
       
    }

    $filearray = array($file, $image, $article, $caption);

    return $filearray;
}