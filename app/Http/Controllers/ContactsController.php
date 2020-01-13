<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
    {
        $contacts = \App\Contact::all();
        return view('contacts.index', compact('contacts'));
    }
     /**
    * Show the form for creating a new resource.
    *
    * @return \Illuminate\Http\Response
    */
   public function create()
   {
    //$this->authorize('admin');
       return view('contacts.create');
   }
   /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       // $this->authorize('admin');
        $data = $request->validate([
            'name'=>'required|max:50000',
            'email' => 'required|max:5000000',
            'numero_telephone' => 'required|max:5000000',
            'message' =>  'max:1500'
        ]);

       $contact = new \App\Contact();
       $contact->name = $request->input('name');
       $contact->email = $request->input('email');
       $contact->numero_telephone = $request->input('numero_telephone');
       $contact->message = $request->input('message');
       $contact->save();
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
        $this->authorize('admin');
        $contacts = \App\Contact::find($id);//on recupere le produit
   return view('contacts.edit', compact('contacts'));
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
       $contact = \App\Contact::find($id);
       if($contact){
           $contact->update([
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
        $this->authorize('admin');
       $contat = \App\Contact::where('id',$id)->first();
       if($contact)
           $contact->delete();
       return redirect()->back();
    }
}
