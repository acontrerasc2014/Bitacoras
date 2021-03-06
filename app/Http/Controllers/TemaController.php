<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ConexionAPI;
class TemaController extends Controller
{
    protected $tema;
    public function __construct(ConexionAPI $tema)
    {
        $this->foro = $tema;
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

            $temon = array ("nombreuser"=> $_POST["nombre"],
                              "Correo"=> $_POST["email"],
                              "nombre"=> $_POST["titulo"],  
                              "contenido" =>$_POST["tema"],
                              "tipo" => "tema",
                            );
            $miforo = array ( "nombre"=> $_POST["titulo"], 
                            "posts" => $temon,
                  );    
            $temass = $this->foro->add("foro",$miforo); 
            //dd($temass); #muetra resultado
            $var=($temass);
            $tem=$var->{'posts'};

            if(isset($_POST['submit2'])){

                $temon = array ("nombreuser"=> $_POST["nombre"],
                "Correo"=> $_POST["email"],
                "nombre"=> $_POST["titulo"],  
                "contenido" =>$_POST["tema"],
                "tipo" => "tema",
              );
            $miforo = array ( "nombre"=> $_POST["titulo"], 
              "posts" => $temon,
    );    
                $id= $_POST["i"]; 
                echo '<script language="javascript">alert("respuesta exportada");</script>';
                //$id= $_POST['i'];    
                #usa funcion add de ConexionAPI 
                $temass = $this->foro->update("foro",$id,$miforo); 
                $dec = ($temass);
                //dd($temass); #muetra resultado
                $tem = $dec->{'posts'};
            }
            return view('theme',compact('var','tem'));
            
    }
    return ;
}
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function showall()
    {
        $temas = $this->foro->all("foro");
        dd($temas);
        //return($tecnicas);
    }
    public function show($id)
    {
        $temas = $this->foro->find("foro",$id);
        dd($temas);
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
    public function delete($id)
    {
        //

    }
    public function borrar($id)
    {
        echo '<script language="javascript">alert("tema eliminado");</script>';
        $temass = $this->foro->delete("foro",$id);
        //dd($respuesta);
        return view("createtema");
        
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
