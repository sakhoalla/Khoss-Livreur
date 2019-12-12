@extends('livreur.layout')
@section('content') 
<table class="table table-striped">
    <tr>
    <th></th>
    <th></th>
<th>Nom du Categorie</th> <th></th>  <th></th>   <th></th><th></th>   <th></th>

<th></th>
</tr>






    @foreach($categories as $categorie)

    
   <tr>
   <th></th>
   <th></th>
       <th>{{$categorie->name}}</th>  <th></th>  <th></th>   <th></th><th></th>   <th></th>
      
       <th>

       <p><a href="{{route('editer_categorie',['id'=>$categorie->id])}}">Editer</a>
    


       <form action="categorie/{{$categorie->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>

</p>
       </th>
   </tr>
@endforeach


</table>


<p><a href="{{route('create_categorie',['id'=>$categorie->id])}}">Ajouter</a>


@endsection