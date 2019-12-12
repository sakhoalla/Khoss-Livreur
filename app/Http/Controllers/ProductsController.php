<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//Au début du fichier on importe les classes:
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Str;



class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//$products = \App\Product::orderBy('created_at', 'DESC')->get();
        
   $products = \App\Product::all();
   return view('products.index', compact('products'));
}



    /**
     * Show the form for creating a new resource.
     *
    
* @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
*/
public function create()
{
   $categories = \App\Categorie::pluck('name','id');
   return view('products.create', compact('categories'));

}



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|max:50',
            'prix' => 'required|max:5000000|numeric',
            'description' => 'max:1000000',
            'category_id' =>  'max:150'
        ]);

       $produit =new \App\Product();
       $produit->name = $request->input('name');
       $produit->prix = $request->input('prix');
       $produit->description = $request->input('description');
       $produit->category_id = $request->input('category_id');
       $produit->save();
       return redirect('/');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products = \App\Product::OrderBy('created_at', 'DESC')->get();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $produit = \App\Product::find($id);//on recupere le produit
       
          $categories = \App\Categorie::pluck('name','id');
          return view('products.edit', compact('produit','categories'));
       
       

    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $data = $request->validate([
          'name'   => 'required',
          'prix' => 'required | numeric',
          'product_image' => 'nullable | image | mimes:jpeg,png,jpg,gif | max:2048'
       ]);
       $product = \App\Product::find($id);
       if($product){
           if($request->has('product_image')){
               //On enregistre l'image dans une variable
               $image = $request->file('product_image');
               if(file_exists(public_path().$product->images))//On verifie si le fichier existe
                   Storage::delete(asset($product->images));//On le supprime alors
               //Nous enregistrerons nos fichiers dans /uploads/images dans public
               $folder = '/uploads/images/';
               $image_name = Str::slug($request->input('name')).'_'.time();
               $product->images = $folder.$image_name.'.'.$image->getClientOriginalExtension();
               //Maintenant nous pouvons enregistrer l'image dans le dossier en utilisant la méthode uploadImage();
               $this->uploadImage($image, $folder, 'public', $image_name);
           }
           $product->name  = $request->input('name');
           $product->prix = $request->input('prix');
           $product->description = $request->input('description');
           $product->category_id = $request->input('category_id');
    
           $product->save();
       }
       return redirect()->back();
    }


    public function uploadImage(UploadedFile $uploadedFile, $folder = null, $disk = 'public', $filename = null){
        $name = !is_null($filename) ? $filename : str_random('25');
        $file = $uploadedFile->storeAs($folder, $name.'.'.$uploadedFile->getClientOriginalExtension(), $disk);
     
        return $file;
     }
     
    
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $product = \App\Product::where('id',$id)->first();
       if($product)
           $product->delete();
       return redirect()->back();
    }
    
}
