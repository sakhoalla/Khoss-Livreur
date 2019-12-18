<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueillController extends Controller
{
    public function accueill()
    {
        return view("accueill");
    }
}
