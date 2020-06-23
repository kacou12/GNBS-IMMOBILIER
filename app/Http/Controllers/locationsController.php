<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class locationsController extends Controller
{
    //
    public function location()
    {
        $les_articles = maison::where("type_bien", "LOCATION")->get();
        
        return view('location', [
            "articles" => $les_articles,
            "nombre" => count($les_articles)
        ]);
    }
}
