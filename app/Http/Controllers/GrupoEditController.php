<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoEditController extends Controller
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
            $Descripcion2= $_POST["desc"];
            $Integrantes2= $_POST["access_list"];  

            $readjson = file_get_contents('grupo.json') ;

            $data = json_decode($readjson, true);
            $data["Nombre de Grupo"] = $Nombre2;
            $data["Descripcion"] = $Descripcion2;
            $data["Integrantes"] = $Integrantes2;
            
            echo "Nombre:"."<br/>";
            echo $data["Nombre de Grupo"]."<br/>";
            echo "Descripcion:"."<br/>";
            echo $data["Descripcion"]."<br/>";
            echo "Participantes:"."<br/>";
            
            // Recorre el arreglo para mostrarlo en pantalla , cuando llega al ultimo elemento omite la ,
            foreach($data["Integrantes"] as $value){ 
                if ($value == end($data["Integrantes"])){
                    echo $value;
                }

                else{
                    echo $value . " , ";   
                }
        
            }
            $JSON = json_encode($data);            
            $archivo_nombre = "grupo.json";
            file_put_contents($archivo_nombre, $JSON);
            echo '<script language="javascript">alert("Grupo Editado Listo");</script>';

            echo "<br/>";
            echo "archivo json GRUPO abierto xDDDDDDDDDDDDDDD";
            echo "<br/>";
            $readjson2 = file_get_contents('grupo.json') ;

            $data2 = json_decode($readjson2, true);

            echo "Nombre:"."<br/>";
            echo $data["Nombre de Grupo"]."<br/>";
            echo "Descripcion:"."<br/>";
            echo $data["Descripcion"]."<br/>";
            echo "Participantes:"."<br/>";
            
            // Recorre el arreglo para mostrarlo en pantalla , cuando llega al ultimo elemento omite la ,
            foreach($data["Integrantes"] as $value){ 
                if ($value == end($data["Integrantes"])){
                    echo $value;
                }

                else{
                    echo $value . " , ";   
                }
        
            }
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
