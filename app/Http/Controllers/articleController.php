<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class articleController extends Controller
{
    //
    public function article()
    {
        request()->validate([
            "id" => "Integer"
        ]);
        $article = maison::where("id", request("id"))->firstOrFail();
        return view('details', [
            "article" => $article,
        ]);
    }
}
    