<?php

namespace App\Model;

use Illuminate\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;

class admins extends Model implements Authenticatable
{
    use AuthAuthenticatable;
    //
    protected $table = "admins";
    public $fillable = ["login", "password"];
}
