<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class exclusiviteController extends Controller
{
    //
    public function exclusivite(){
        $les_articles = maison::where("type_bien", "LOCATION")->get();
    
        return view('location', [
            "articles" => $les_articles,
            "nombre" => count($les_articles)
        ]);
    }
}
