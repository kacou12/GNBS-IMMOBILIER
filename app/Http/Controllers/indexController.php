<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class indexController extends Controller
{
    public function index()
    {
        /**
         * 3 accueil affiche appartements
         */
        $appartements = maison::appartements();

        $locations = maison::locations();

        $villas = maison::villas();

        return view("index",[
            "appartements" => $appartements,
            "locations" => $locations,
            "villas" => $villas,
        ]);
    }
}
