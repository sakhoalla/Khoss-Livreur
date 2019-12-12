
@extends('livreur.layout')
@section('content') 


<table class="table table-striped">
    <tr>
    <th></th>
    <th></th>
<th>Nom du Commande</th> <th></th>  <th></th>   <th></th>
<th>Date de Saisie  du Commande</th>  <th></th>  <th></th>   <th></th>
<th>Date de Livraison du Commande</th>  <th></th>  <th></th>   <th></th>


<th></th>
</tr>






    @foreach($commandes as $commande)
   <tr>
       <th></th>
       <th></th>

               <th>{{$commande->name}}</th>  <th></th>  <th></th>   <th></th>
               <th>{{$commande->datesaisie}} </th>  <th></th>  <th></th>   <th></th>
               <th>{{$commande->datelivraison}}</th>  <th></th>  <th></th>   <th></th>
              
       <th>

       <p><a href="commande/{{$commande->id}}/edit">Editer</a>

       <form action="/commande/{{$commande->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>
    

</p>
       </th>
   </tr>
@endforeach




</table>

<p><a href="{{route('create_commande',['id'=>$commande->id])}}">Ajouter</a>

@endsection