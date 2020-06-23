<?php

namespace App\Http\Controllers;

use App\Mail\newsletter as MailNewsletter;
use App\Model\newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class newsletterController extends Controller
{
    //
    public function newsletter(){
        $data = request()->validate([
            'titre'=>['Required','String'],
            "nom" =>['Required','String'],
            "prenom"=>['Sometimes','nullable',"String"],
            'email' =>['Required','unique:newsletter','Email']
        ]);
        //Envoi du mail
        Mail::to(request('email'))->send(new MailNewsletter($data));
        $store = new newsletter($data);
        $store->save();
        flash("Abonnement reussi")->success();
        return redirect('/');

    }
}
