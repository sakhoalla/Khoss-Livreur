<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class A_ProposController extends Controller
{
    public function A_propos()
    {
        return view("about");
    }
}
