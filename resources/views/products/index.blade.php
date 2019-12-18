@extends('livreur.layout')
@section('content') 

<table class="table table-striped">
    <tr>
    <th></th>
    <th></th>
<th>Nom du Produit</th> <th></th>  <th></th>   <th></th><th></th>   <th></th>
<th>Prix du Produit</th> <th></th>  <th></th>   <th></th><th></th>   <th></th>
<th>Description du Produit</th> <th></th>  <th></th>   <th></th><th></th>   <th></th>
<th>Category_Id du Produit</th> <th></th>  <th></th>   <th></th><th></th>   <th></th>
<th>Image du Produit</th> <th></th>  <th></th>   <th></th><th></th>   <th></th>
<th></th>
</tr>






    @foreach($products as $produit)
    
   <tr>
   <th></th>
   <th></th>
       <th>{{$produit->name}}</th>  <th></th>  <th></th>   <th></th><th></th>   <th></th>
       <th>{{$produit->prix}} {{ $product->category->name ?? '' }}</th>  <th></th>  <th></th>   <th></th><th></th>   <th></th>
       <th>{{$produit->description}}</th>  <th></th>  <th></th>   <th></th><th></th>   <th></th>
       <th>{{$produit->category_id}}</th>  <th></th>  <th></th>   <th></th><th></th>   <th></th>
       <th>{{$produit->product_image}}</th>  <th></th>  <th></th>   <th></th><th></th>   <th></th>
       <th>

       <p><a href="{{route('editer_produit',['id'=>$produit->id])}}">Editer</a>
    
       
       
       <form action="/product/{{$produit->id}}" method="post">
               @csrf
               @method('delete')
               <input type="submit" class="btn btn-danger" name="delete" value="Supprimer">
           </form>



</p>
       </th>
   </tr>
@endforeach


</table>




<img src="{{$produit->images ? asset($produit->images) : asset('uploads/images/default.png')}}" alt="{{$produit->name}}" width="50">

<p><a href="{{route('create_produit',['id'=>$produit->id])}}">Ajouter</a>
@endsection