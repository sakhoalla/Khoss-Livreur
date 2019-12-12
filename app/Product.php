<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function categories (){
        return $this->hasMany("App\Categorie");
    }

    public function produitDisponible (){
        return $this->hasMany("App\Produit");
    }
}




/*

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class produitDisponible extends Model
{
    protected $guarded = [];

    public function produit (){
        return $this->belongsTo("App\Produit");
    }

   

    
}
*/