<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Directories_pl extends Model
{
    use HasFactory;
    use Searchable;

    protected $primaryKey = 'dirid';
   
   protected $fillable = ['dname','infoCol1','infoCol2','infoCol3','headlineCol1','headlineCol2','headlineCol3','dirImage','dirCaption','dirDescription'];
   
   /**
    * @var array
    */
   protected $searchRules = [
       //
   ];

   /**
    * @var array
    */
//    protected $mapping = [

//          "properties" => [
//              "infoCol1" => [
//                  "type" => "text",
//                  "analyzer" => "standard"
//              ],
//              "infoCol2" => [
//                  "type" => "text",
//                    "analyzer" => "standard"
//              ],
//              "infoCol3" => [
//                "type" => "text",
//                  "analyzer" => "standard"
//            ],
//            "dirDescription" => [
//                "type" => "text",
//                  "analyzer" => "standard"
//            ],
//            "dirCaption" => [
//                "type" => "text",
//                  "analyzer" => "standard"
//            ],
 
//        ]
//    ];
}
