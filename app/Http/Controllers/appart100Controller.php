<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class appart100Controller extends Controller
{
    //
    public function appart100(){
        $first = maison::where('logement', '=', "appartement")->get();
        $les_articles = $first->where("prix", ">", 5000000);
    
        return view('appart100', [
            "articles" => $les_articles,
            "nombre" => count($les_articles),
        ]);
    }
}
