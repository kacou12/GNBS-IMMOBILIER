<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class piece4Controller extends Controller
{
    //
    public function piece4(){
        $first = maison::where('logement', '=', "appartement")->get();
        $les_articles = $first->where("piece", ">=", 4);
    
        return view('piece4', [
            "articles" => $les_articles,
            "nombre" => count($les_articles)
        ]);
    }
}
