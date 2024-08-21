<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class parametros extends Controller
{
    public function passandoParametros(){

        $frutas = ['Abacaxi', 'Maçã', 'Banana'];
        
        return view('site.parametros', compact('frutas'));

    }
}

