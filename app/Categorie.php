<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    
        protected $guarded = [];
    
        public function produit (){
            return $this->belongsTo("App\produit");
        }
    
}
