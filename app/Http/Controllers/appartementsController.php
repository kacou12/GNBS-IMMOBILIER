<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class appartementsController extends Controller
{
    //
    public function appartements()
    {
        $appartements =  maison::where("logement", "appartement")
                  ->orderBy('created_at', 'desc')
                  ->get();

        return view("appartements", [
            "appartements" => $appartements,
            "nombre" => count($appartements),
        ]);
    }
}
