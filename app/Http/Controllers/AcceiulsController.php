<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LivreursController extends Controller
{
    public function index(){

        return view("livreur.index");
    }

    public function  show($id){

        return view("livreur.show",compact("id"));
    }
}
