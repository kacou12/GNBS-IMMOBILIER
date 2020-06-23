<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class piece3Controller extends Controller
{
    //
    public function piece3(){
        $first = maison::where('logement', '=', "appartement")->get();
        $les_articles = $first->where("piece", "<=", 3);
    
        return view('piece3', [
            "articles" => $les_articles,
            "nombre" => count($les_articles)
        ]);
    }
}
