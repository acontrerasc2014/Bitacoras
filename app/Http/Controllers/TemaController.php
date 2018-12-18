<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ConexionAPI;
class TemaController extends Controller
{
    protected $tema;
    public function __construct(ConexionAPI $tema)
    {
        $this->anuncio = $tema;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("createtema");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createtema");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //Implementación de función store para recibir datos del formulario
    public function store(Request $request)
    {
        if(isset($_POST['submit'])){

            $temon = array ("Nombre"=> $_POST["nombre"],
                              "Correo"=> $_POST["email"],
                              "titulo"=> $_POST["titulo"],  
                              "mensaje" =>$_POST["tema"],
                              "tipo" => "tema",
                            );
           // $mianuncio = array ( "nombre"=> "tema", 
             //                 "tipo" => $temon,
               //   );    
            $temoide = $this->anuncio->add("anuncio",$temon); 
            dd($temoide); #muetra resultado
            
            
    }
    return ;
}
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
