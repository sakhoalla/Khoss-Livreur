<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function portfolio()
    {
        return view("portfolio");
    }

   
     public function index()
   {
       $commandes = \App\Commande::all();
       return view('commandes.index', compact('commandes'));
   }
    /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
      return view('commandes.create');
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
           'name'=>'required|max:100000',
           'datesaisie' => 'required|max:5000000',
           'datelivraison' =>'required|max:5000000',
          
       ]);

      $commande = new \App\Commande();
      $commande->name = $request->input('name');
      $commande->datesaisie = $request->input('datesaisie');
      $commande->datelivraison = $request->input('datelivraison');
      $commande->save();
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
       $commandes = \App\Commande::find($id);//on recupere le produit
  return view('commandes.edit', compact('commandes'));
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
      $commande = \App\Commande::find($id);
      if($commande){
          $commande->update([
              'name' => $request->input('name'),
              'datesaisie' => $request->input('datesaisie'),
              'datelivraison' => $request->input('datelivraison'),
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
      $commande = \App\Commande::where('id',$id)->first();
      if($commande)
          $commande->delete();
      return redirect()->back();
   }
}
