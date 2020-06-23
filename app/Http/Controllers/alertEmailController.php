<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class alertEmailController extends Controller
{
    //
    public function email(){
        return view("alertemail");
    }
}
