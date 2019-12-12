<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreurssController extends Controller
{
    public function index()
    {
        $livreurs = \App\Livreur::all();
        return view('livreurs.index', compact('livreurs'));
    }
     /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('livreurs.create');
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
            'email' => 'required|max:5000000',
            'numero_telephone' => 'required|max:5000000',
            'message' =>  'max:1500'
        ]);
      
       $livreur = new \App\Livreur();
       $livreur->name = $request->input('name');
       $livreur->email = $request->input('email');
       $livreur->numero_telephone = $request->input('numero_telephone');
       $livreur->message = $request->input('message');
       $livreur->save();
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $livreurs = \App\Livreur::find($id);//on recupere le produit
   return view('livreurs.edit', compact('livreurs'));
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
       $livreur = \App\Livreur::find($id);
       if($livreur){
           $livreur->update([
               'name' => $request->input('name'),
               'email' => $request->input('email'),
               'numero_telephone' => $request->input('numero_telephone'),
               'message' => $request->input('message'),
           ]);
       }
       return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $client = \App\Livreur::where('id',$id)->first();
       if($livreur)
           $livreur->delete();
       return redirect()->back();
    }
}
