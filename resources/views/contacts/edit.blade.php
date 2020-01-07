
@extends('livreur.layout')
@section('content')
<form action="{{route('update_contact',['id'=>$contacts->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="le nom du contact" value="{{$contacts->name}}"></div>
   <div><input type="text" name="email" class="form-control" placeholder="le email du contact" value="{{$contacts->email}}"> </div>
   <div><input type="text" name="numero_telephone" class="form-control" placeholder="le telephone du contact" value="{{$contacts->numero_telephone}}"> </div>
   <div> <textarea name="message" id="message" cols="30" rows="10" class="form-control" placeholder="La description">{{$contacts->message}}</textarea> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>

@endsection