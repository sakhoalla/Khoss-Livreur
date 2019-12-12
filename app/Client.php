<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];


    public function commandes (){
        return $this->hasMany("App\Commande");
    }
}

