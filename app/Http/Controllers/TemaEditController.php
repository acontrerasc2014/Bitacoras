<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TemaEditController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if(isset($_POST['submit'])){
            $Nombre2= $_POST["nombre"];
            $Correo2= $_POST["email"];
            $Titulo2= $_POST["titulo"];  
            $Descripcion2 =$_POST["tema"];

            $readjson = file_get_contents('tema.json') ;

            $data = json_decode($readjson, true);
            $data["Nombre"] = $Nombre2;
            $data["Correo"] = $Correo2;
            $data["Titulo"] = $Titulo2;
            $data["Descripcion"] = $Descripcion2;
            
            echo "Nombre:"."<br/>";
            echo $data["Nombre"]."<br/>";
            echo "Correo:"."<br/>";
            echo $data["Correo"]."<br/>";
            echo "Titulo:"."<br/>";
            echo $data["Titulo"]."<br/>";
            echo "Descripcion:"."<br/>";
            echo $data["Descripcion"]."<br/>";
            echo "<br/>";
            $JSON = json_encode($data);            
            $archivo_nombre = "tema.json";
            file_put_contents($archivo_nombre, $JSON);
            echo '<script language="javascript">alert("Tema Editado Listo");</script>';

            echo "archivo json abierto xDDDDDDDDDDDDDDD";
            echo "<br/>";
            $readjson2 = file_get_contents('tema.json') ;

            $data2 = json_decode($readjson2, true);

            echo "Nombre:"."<br/>";
            echo $data2["Nombre"]."<br/>";
            echo "Correo:"."<br/>";
            echo $data2["Correo"]."<br/>";
            echo "Titulo:"."<br/>";
            echo $data2["Titulo"]."<br/>";
            echo "Descripcion:"."<br/>";
            echo $data2["Descripcion"]."<br/>";    
            
    }
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
