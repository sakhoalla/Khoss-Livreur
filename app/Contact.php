<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $guarded = [];

    public function client (){
        return $this->belongsTo("App\Client");

    }

    public function livreur (){
        return $this->belongsTo("App\Livreur");

    }
}
