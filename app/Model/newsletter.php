<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class newsletter extends Model
{
    //
    protected $table = 'newsletter';
    protected $fillable = ['titre', 'nom', 'email', 'prenom'];
}
