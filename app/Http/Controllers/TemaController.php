<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaController extends Controller
{
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

            $arreglo = array ("Nombre"=> $_POST["nombre"],
                              "Correo"=> $_POST["email"],
                              "Titulo"=> $_POST["titulo"],  
                              "Descripcion" =>$_POST["tema"]);
            $JSON = json_encode($arreglo);            
            $archivo_nombre = "tema.json";
            file_put_contents($archivo_nombre, $JSON);  
            echo '<script language="javascript">alert("Tema exportado");</script>';

            $readjson = file_get_contents('tema.json') ;

            $data = json_decode($readjson, true);

            echo "Nombre:"."<br/>";
            echo $data["Nombre"]."<br/>";
            echo "Correo:"."<br/>";
            echo $data["Correo"]."<br/>";
            echo "Titulo:"."<br/>";
            echo $data["Titulo"]."<br/>";
            echo "Descripcion:"."<br/>";
            echo $data["Descripcion"]."<br/>";
            echo "<br/>";
            echo "Te equivocaste en algo? Editalo!";
            echo "<br/>";
            echo "<a href='/editarTema'>Editar!</a>";
            

            
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
