<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class autresBiensController extends Controller
{
    //
    public function autrebien(){
        $les_articles = maison::where("type_bien", "LOCATION")->get();
    
        return view('autrebien', [
            "articles" => $les_articles,
            "nombre" => count($les_articles)
        ]);
    }
}
