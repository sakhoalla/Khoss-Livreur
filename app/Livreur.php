<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livreur extends Model
{
    
        protected $guarded = [];
    
        public function commande (){
            return $this->belongsTo("App\Commande");
        }
        
        public function produits (){
            return $this->belongsToMany("App\Produit");
        }
}




