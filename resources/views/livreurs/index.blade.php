@extends('livreur.layout')
@section('content') 
<table class="table table-striped">
    <tr>
    <th></th>
    <th></th>
<th>Nom du Livreur</th> <th></th>  <th></th>   <th></th>
<th>Email du Livreur</th>  <th></th>  <th></th>   <th></th>
<th>Telephone du Livreur</th>  <th></th>  <th></th>   <th></th>
<th>Message du Livreur</th>  <th></th>  <th></th>   <th></th>

<th></th>
</tr>






    @foreach($livreurs as $livreur)
   <tr>
       <th></th>
       <th></th>

               <th>{{$livreur->name}}</th>  <th></th>  <th></th>   <th></th>
               <th>{{$livreur->email}} </th>  <th></th>  <th></th>   <th></th>
               <th>{{$livreur->numero_telephone}}</th>  <th></th>  <th></th>   <th></th>
               <th>{{$livreur->message}} </th> </th>  <th></th>   <th></th>
       <th>

       <p><a href="{{route('editer_livreur',['id'=>$livreur->id])}}">Editer</a>
  

       <form action="/product/{{$livreur->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

</p>
       </th>
   </tr>
@endforeach


</table>

<p><a href="{{route('create_livreur',['id'=>$livreur->id])}}">Ajouter</a>

@endsection