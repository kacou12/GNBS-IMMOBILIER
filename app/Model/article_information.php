<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class article_information extends Model
{
    //
    protected $table = 'article_information';
    protected $fillable = ['nom', 'telephone', 'email','message', 'id_article'];
    public function maison()
    {
        return $this->belongsTo(maison::class, 'id');
    }
}
