<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class detailsController extends Controller
{
    //
    public function article()
    {
        request()->validate([
            "id" => "Integer"
        ]);

        $article = maison::where("id", request("id"))->firstOrFail();
        
        return view('details', [
            "articles" => $article,
            "nombre" => 1,
        ]);
    }
}
