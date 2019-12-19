<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        return view("contact");

    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'=>'required|max:50',
            'email' => 'required|max:5000000|numeric',
            'telephone'=>'required|max:5000000|numeric',
            'message' => 'max:1000000'
        ]);
            
           $contact = new \App\Contact();
            
       $contact->name = $request->input('name');
       $contact->email = $request->input('email');
       $contact->telephone = $request->input('telephone');
       $contact->message = $request->input('message');
       $contact->save();
       return redirect('/');
        }

}
