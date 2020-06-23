<?php

namespace App\Http\Controllers;

use App\Mail\article_information as MailArticle_information;
use App\Model\article_information;
use App\Model\maison;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class article_informationController extends Controller
{
    //
    public function article_information(maison $id){
        $data = request()->validate([
            "nom" =>['Required','String'],
            'telephone' =>['Integer', 'nullable'],
            'email' =>['Required','unique:article_information','Email'],
            'message' =>['String', 'nullable']
        ]);
        //Envoi du mail

        $store = new article_information([
            "nom" => request('nom'),
            'telephone' =>request('telephone'),
            'email' =>request('email'),
            'message' =>request('message'),
            "id_article" => $id->id
        ]);
        $data["nom_article"] = $id->nom;

        Mail::to(request('email'))->send(new MailArticle_information($data));

        $store->save();
        flash("Votre demande d'information sur cet article a été prise en compte")->success();
        return redirect('/');
    }
}
