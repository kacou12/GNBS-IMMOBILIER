<?php

namespace App\Http\Controllers;

use App\Mail\information_generale as MailInformation_generale;
use App\Model\information_generale;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class information_generaleController extends Controller
{
    //
    public function information_generale(){
        $data= request()->validate([
            "nom" =>['Required','String'],
            'telephone' =>['Integer', 'nullable'],
            'email' =>['Required','unique:information_generale','Email'],
            'message' =>['Required','String']
        ]);

        //Envoi du mail
        Mail::to(request('email'))->send(new MailInformation_generale($data));
        
        $store = new information_generale($data);
        $store->save();
        flash("Votre demande d'information a été prise en compte")->success();
        return redirect('/');
    }
}
