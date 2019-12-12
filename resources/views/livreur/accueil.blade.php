
    
@extends('livreur.accueil')
@section('content') 


<div class="col-mu-6">
  
    <div class="card"...>
</div>

<div class="container">
   <div class="col-12 row">

   @foreach($produits as $Produit)
       <div class="col-4"><h1>{{$Produit->name}}</h1></div>
   @endforeach    
 </div>
</div>
</div>
</div>

@endsection



