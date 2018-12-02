<?php

namespace App\Http\Controllers;
use App\Repositories\Tecnicas;
use Illuminate\Http\Request;

class TecnicaController extends Controller
{
    /*
    * Constructor de objeto Tecnica
    */
    protected $tecnicas;
    
    public function __construct(Tecnicas $tecnicas)
    {
        $this->tecnicas = $tecnicas;
    }
    /*
    * Funcion que maneja la vista de la pagina /tecnicas
    */
    public function index()
    {
        $tecnicas = $this->tecnicas->all();
        return view('tecnicas.index', compact('tecnicas'));
    }
        
    /* 
    * Funcion que maneja la vista de la pagina /tecnicas/{id}  
    */
    public function show($id)
    {
        $tecnica = $this->tecnicas->find($id);
        return view('tecnicas.show', compact('tecnica'));
    }
}
        