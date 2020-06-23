<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class information_generale extends Model
{
    //
    protected $table = 'information_generale';
    protected $fillable = ['nom', 'telephone', 'email','message'];
}
