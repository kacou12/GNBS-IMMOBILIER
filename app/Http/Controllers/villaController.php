<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class villaController extends Controller
{
    //
    public function villa()
    {
        $les_articles = maison::where("logement", "villa")->get();
        
        return view('villas', [
            "articles" => $les_articles,
            "nombre" => count($les_articles)
        ]);
    }
}
