
<form action="{{route('update_produit',['id'=>$produit->id])}}" method="post" enctype="multipart/form-data">
   @csrf
   @method('patch')
   <div>
                   <input type="text" name="name"  value="{{$produit->name}}" class="form-control" placeholder="le nom du produit" >
               </div>
               <div>
                   <input type="text" name="prix"   value="{{$produit->prix}}"  class="form-control" placeholder="Le prix du produit">
               </div>
               <div>
                   <textarea name="description"  value="{{$produit->description}}" id="description" cols="30" rows="10" class="form-control" placeholder="La description"></textarea>
               </div>
               <div>
   <select name="category_id" id="category_id" value="{{$produit->category_id}}"  class="form-control"   >
       <option value=""></option>
       @foreach($categories as $key => $value)
           <option value="{{$key}}">{{$value}}</option>
       @endforeach
   </select>


   <div class="row">
   <div class="col-6 text-right"><img src="{{asset($produit->images)}}" alt="{{$produit->name}}" width="100"></div><div class="col-6"><h3>Chargez une autre image pour remplacer celle-ci</h3></div>
</div>
<div>
   <input type="file" name="product_image" class="form-control">
</div>

                 </div>      

                   <button class="btn btn-primary">Enregistrer</button>
               </div>
           </form>






