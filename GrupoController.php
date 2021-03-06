<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GrupoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("creategrupo");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("creategrupo");
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

            $arreglo = array ("Nombre de Grupo"=> $_POST["nombre"],
                              "Descripcion"=> $_POST["desc"],  
                              "Integrantes" =>$_POST["select"]);
<<<<<<< Updated upstream
            $JSON = json_encode($arreglo);            
=======
            $JSON = json_encode($arreglo);
            echo "<pre>";
            print_r($JSON);
            echo "</pre>";
    
            
>>>>>>> Stashed changes
            $archivo_nombre = "grupo.json";
            file_put_contents($archivo_nombre, $JSON);  
            echo '<script language="javascript">alert("Datos de grupo exportados");</script>';

<<<<<<< Updated upstream
            $readjson = file_get_contents('grupo.json') ;

            $data = json_decode($readjson, true);

            echo "Nombre:"."<br/>";
            echo $data["Nombre de Grupo"]."<br/>";
            echo "Descripcion:"."<br/>";
            echo $data["Descripcion"]."<br/>";
=======
            $data_grupo=file_get_contents("grupo.json");
            $grupo = json_decode($data_grupo, true);

            print_r("Participantes: ");
            print_r($grupo['Integrantes']);
            

>>>>>>> Stashed changes
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
