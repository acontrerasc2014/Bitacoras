<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReflexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("createreflex");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("createreflex");
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
            $arreglo = array ("Nombre"=> $_POST["nom"], 
                        "Reflexion" =>$_POST["reflex"]);
        
            $JSON = json_encode($arreglo);

            $archivo_nombre = "reflexion.json";
            file_put_contents($archivo_nombre, $JSON);  
            echo '<script language="javascript">alert("Reflexion exportada");</script>';

$readjson = file_get_contents('reflexion.json') ;

$data = json_decode($readjson, true);

echo "Nombre:"."<br/>";
echo $data["Nombre"]."<br/>";
echo "Reflexión:"."<br/>";
echo $data["Reflexion"]."<br/>";

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
