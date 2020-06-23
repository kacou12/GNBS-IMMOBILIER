<?php

namespace App\Http\Controllers;

use App\Model\admins;
use App\Model\maison;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Http\Request;
use Illuminate\Routing\Route;
use Illuminate\Routing\RouteAction;

class connectController extends Controller
{
    //
    public function connect(){
        return view("connect");
    }
    
    public function postconnect(){
        request()->validate([
            "login" => ["Required", "String"],
            "password" => ["Required", "String"]
        ]);
       //$store = new admins([
       //    "login" => request("login"),
       //    "password" => bcrypt(request("password"))
       //]);
       //$store->save();


       if(Auth()->attempt(["login" => request("login"),"password" =>request("password")])){

           flash("Connexion Reussie !!")->success();
            return redirect('/clients');
        }else{
            flash("Login ou Mot de passe Incorrect !!")->error();
            return back()->withInput();
        }
        
    }
}
