<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RedacteurController extends Controller
{
    public function create(){
        return view('inscriptionredacteur');
    }

    public function store(Request $REQUEST)
    {
    return view('validateRedacteur',['req'=>$REQUEST]);

    }
}
