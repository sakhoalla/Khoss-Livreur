




<form action="{{route('update_commande',['id'=>$commandes->id])}}" method="post">
   @csrf
   @method('patch')
   <div><input type="text" name="name" class="form-control" placeholder="le nom du client" value="{{$commandes->name}}"></div>
   <div><input type="text" name="datesaisie" class="form-control" placeholder="la date de saisie du commande" value="{{$commandes->datesaisie}}"> </div>
   <div><input type="text" name="datelivraison" class="form-control" placeholder="la date de livraison du client" value="{{$commandes->datelivraison}}"> </div>
   <div> <button class="btn btn-primary">Enregistrer</button> </div>
</form>