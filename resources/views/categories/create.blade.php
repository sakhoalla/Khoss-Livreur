

<div class="container">
       <div><h1>{{__('Enregistrement d\'un Categorie')}}</h1></div>
       <div class="container">
           <form action="{{route('categorie.store')}}" method="post">
               @csrf
               <div>
                   <input type="text" name="name" class="form-control" placeholder="le nom du produit">
               </div>


               <div>
                   <button class="btn btn-primary">Enregistrer</button>
               </div>


@if($errors->any())
   @foreach($errors->all() as $error)
       <div class="alert alert-danger">{{$error}}</div>
   @endforeach
@endif
           </form>



