
@extends('livreur.layout')
@section('content')


<form action="{{route('update_categorie',['id'=>$categories->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="le nom du produit" value="{{$categories->name}}"></div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

@endsection





