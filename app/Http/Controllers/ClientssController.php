<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientssController extends Controller
{
    public function index()
    {
        $clients = \App\Client::all();
        return view('clients.index', compact('clients'));
    }
     /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
       return view('clients.create');
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
            'name'=>'required|max:50000',
            'email' => 'required|max:5000000',
            'numero_telephone' => 'required|max:5000000',
            'message' =>  'max:1500'
        ]);

       $client = new \App\Client();
       $client->name = $request->input('name');
       $client->email = $request->input('email');
       $client->numero_telephone = $request->input('numero_telephone');
       $client->message = $request->input('message');
       $client->save();
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
        $clients = \App\Client::find($id);//on recupere le produit
   return view('clients.edit', compact('clients'));
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
       $client = \App\Client::find($id);
       if($client){
           $client->update([
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
       $client = \App\Client::where('id',$id)->first();
       if($client)
           $client->delete();
       return redirect()->back();
    }
}
