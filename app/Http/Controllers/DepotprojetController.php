<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DepotprojetController extends Controller
{
    public function create()
    {
        return view("depotprojet");
    }


    public function store(Request $REQUEST)
    {
    return view('depotshow',['req'=>$REQUEST]);

    }
}
