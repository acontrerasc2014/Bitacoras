<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class semcontroller extends Controller
{
    public function semana ($tema = null){
        $temas = ["Semana 1", "Semana 2", "Semana 3", "Semana 4", "Semana 5", "Semana 6"];
        return view('semanas', compact('temas','tema'));
    }
}
