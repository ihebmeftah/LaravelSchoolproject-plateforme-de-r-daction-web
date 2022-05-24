<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function create(){
        return view('inscriptionclient');
    }

    public function store(Request $REQUEST)
    {
return view('validateClient',['req'=>$REQUEST]);

    }
}
