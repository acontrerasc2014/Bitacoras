<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CitaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createcita');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcita');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    //Funcion para crear el json con la Cita, Autor y Bibliografia
    public function store(Request $request)
    {
        if(isset($_POST['submit'])){

            $arreglo = array ("Cita"=> $_POST["citas"],
                              "Autor"=> $_POST["autor"],  
                              "Bibliografia" =>$_POST["texto"],
                              "Fecha" =>$_POST['fecha']);
            $JSON = json_encode($arreglo);
            $archivo_nombre = "cita.json";
            file_put_contents($archivo_nombre, $JSON);
            echo'<script language="javascript">alert("Cita exportada");</script>';
            
            $readjson = file_get_contents('cita.json');

            $data = json_decode($readjson, true);

            echo "Cita:"."<br/>";
            echo $data["Cita"]."<br/>";
            echo "Autor:"."<br/>";
            echo $data["Autor"]."<br/>";
            echo "Bibliografia:"."<br/>";
            echo $data["Bibliografia"]."<br/>";
            echo "Fecha"."<br/>";
            echo $data["Fecha"]."<br/>";
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
