<?php

namespace App\Http\Controllers;
use App\Models\Projet;
use Illuminate\Http\Request;

class ProjetController extends Controller
{
    public function create(){
        return view('login');
    }

    public function show()
    {
        $projetarray = array();

        $projetarray[0] = new Projet('100', 'Traduire un bulletin scolaire en Francais', '60', "Description du projet", '9/1/2022');
        $projetarray[1] = new Projet('200', 'Traduire un bulletin scolaire en Anglais', '66', "Description du projet", '20/9/2022');
        $projetarray[2] = new Projet('300', 'Traduire un bulletin scolaire ', '80', "Description du projet", '11/12/2022');
        $projetarray[3] = new Projet('400', 'Traduire un bulletin scolaire', '55', "Description du projet", '10/6/2022');
        $projetarray[4] = new Projet('500', 'Traduire un bulletin scolaire', '10', "Description du projet", '02/3/2023');
        $projetarray[5] = new Projet('500', 'Traduire un bulletin scolaire', '10', "Description du projet", '02/3/2023');
        $projetarray[6] = new Projet('500', 'Traduire un bulletin scolaire', '10', "Description du projet", '02/3/2023');



        return view("showprojet", compact('projetarray'));
    }
}
