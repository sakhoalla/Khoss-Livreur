<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model


{
    protected $guarded = [];

    public function client (){
        return $this->belongsTo("App\Client");
    }

    public function livreurs (){
        return $this->hasMany("App\Livreur");
    }


    

  
}