@extends('livreur.layout')
@section('content') 
<table class="table table-striped">
    <tr>
    <th></th>
    <th></th>
<th>Nom du Contact </th> <th></th>  <th></th>   <th></th>
<th>Email du Contact</th>  <th></th>  <th></th>   <th></th>
<th>Telephone du Contact</th>  <th></th>  <th></th>   <th></th>
<th>Message du Contact</th>  <th></th>  <th></th>   <th></th>

<th></th>
</tr>






    @foreach($contacts as $contact)
   <tr>
       <th></th>
       <th></th>

               <th>{{$contact->name}}</th>  <th></th>  <th></th>   <th></th>
               <th>{{$contact->email}} </th>  <th></th>  <th></th>   <th></th>
               <th>{{$contact->numero_telephone}}</th>  <th></th>  <th></th>   <th></th>
               <th>{{$contact->message}} </th> {{ $product->categorie->name ?? '' }}</th>  <th></th>   <th></th>
       <th>

       <p><a href="client/{{$contact->id}}/edit">Editer</a>
    
       
       <form action="/client/{{$contact->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

</p>
       </th>
   </tr>
@endforeach


</table>

 <p><a href="{{route('create_contact',['id'=>$contact->id])}}">Ajouter</a> 

@endsection