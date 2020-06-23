<?php

namespace App\Http\Controllers;

use App\Model\maison;
use Illuminate\Http\Request;

class queryController extends Controller
{
    //
    public function query()
    {
        request()->validate([
            "critere" => ["String"],
            "logement" => ["String"],
            "piece" =>["Integer"],
            "commune" =>["String"],
            "page"=> ["Integer"]
        ]);
        $token = request("_token");
        $champs_with_token = request()->all();

        $champ = array_splice($champs_with_token, 1);
        
        if(array_key_exists('page', $champ)){
            unset($champ['page']);
        }
        $query = maison::where($champ)->paginate(6);
       
        return view('query', [
            "articles"=> $query ,
            "nombre" => count(maison::where($champ)->get())
        ]);
    }
    
}