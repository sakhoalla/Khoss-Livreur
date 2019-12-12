@extends('livreur.layout')
@section('content') 
<table class="table table-striped">
    <tr>
    <th></th>
    <th></th>
<th>Nom du Client</th> <th></th>  <th></th>   <th></th>
<th>Email du Client</th>  <th></th>  <th></th>   <th></th>
<th>Telephone du Client</th>  <th></th>  <th></th>   <th></th>
<th>Message du Client</th>  <th></th>  <th></th>   <th></th>

<th></th>
</tr>






    @foreach($clients as $client)
   <tr>
       <th></th>
       <th></th>

               <th>{{$client->name}}</th>  <th></th>  <th></th>   <th></th>
               <th>{{$client->email}} </th>  <th></th>  <th></th>   <th></th>
               <th>{{$client->numero_telephone}}</th>  <th></th>  <th></th>   <th></th>
               <th>{{$client->message}} </th> {{ $product->categorie->name ?? '' }}</th>  <th></th>   <th></th>
       <th>

       <p><a href="client/{{$client->id}}/edit">Editer</a>
    
       
       <form action="/client/{{$client->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

</p>
       </th>
   </tr>
@endforeach


</table>

<p><a href="{{route('create_client',['id'=>$client->id])}}">Ajouter</a>

@endsection