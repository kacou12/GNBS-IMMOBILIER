<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class maison extends Model
{
   protected $table = "maison";
   protected $guarded = [];
   public function article_information()
   {
       return $this->hasMany(article_information::class, 'id_article', 'id');
   }
    //
    static public function appartements(){
       
        $appartements =  maison::where("logement", "appartement")
                  ->orderBy('created_at', 'desc')
                  ->take(3)
                  ->get();
        return $appartements;
    }

    static public function villas(){
       
        $villas =  maison::where("logement", "villa")
                  ->orderBy('created_at', 'desc')
                  ->take(3)
                  ->get();
        return $villas;
    }

    static public function locations(){
       
        $locations =  maison::where("critere", "louer")
                  ->orderBy('created_at', 'desc')
                  ->take(3)
                  ->get();
        return $locations;
    }

    
    static public function bien($section){
        $page = maison::where("logement", $section)
        ->get();
        return $page;
    }
}
