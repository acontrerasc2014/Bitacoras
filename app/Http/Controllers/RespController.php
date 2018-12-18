<?php

namespace App\Http\Controllers;
use App\Repositories\ConexionAPI;
use Illuminate\Http\Request;

class RespController extends Controller
{
    protected $respuesta;
    public function __construct(ConexionAPI $respuesta)
    {
        $this->foro = $respuesta;
    }
    public function index()
    {
        return view('createresp');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createresp');
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

            $resp = array("nombre"=> $_POST["nombre"],
                            "contenido"=> $_POST["resp"],
                            "tipo"=> "respuesta",    
            );
            $miforo = array ( "nombre"=> $_POST["nombre"], 
                        "posts" => $resp,
            );    
            #usa funcion add de ConexionAPI 
            $respuesta = $this->foro->add("foro",$miforo); 
            $dec = ($respuesta);
            //dd($respuesta); #muetra resultado
            $res = $dec->{'posts'};
    
            
    
            /*$arreglo = array ( "tipo"     => "Respuesta",
                               "nombre"   => $_POST["nombre"],
                               "contenido"=> $_POST["resp"]);
            $JSON = json_encode($arreglo);                      
            $archivo_nombre = "respuesta.json";
            file_put_contents($archivo_nombre, $JSON);  
            echo '<script language="javascript">alert("respuesta exportada");</script>';

            $readjson= file_get_contents('respuesta.json');

            $data = json_decode($readjson, true);

            echo "Nombre"."<br/>";
            echo $data["Nombre"]."<br/>";
            echo "Respuesta"."<br/>";
            echo $data["Respuesta"]."<br/>";
            */
        }

        
        if(isset($_POST['submit2'])){

            $resp = array("nombre"=> $_POST["nombre"],
                            "contenido"=> $_POST["resp"],
                            "tipo"=> "respuesta",    
            );
            $miforo = array ( "nombre"=> $_POST["nombre"], 
                        "posts" => $resp,
            );
            $id= $_POST["i"]; 
            echo '<script language="javascript">alert("respuesta exportada");</script>';
            //$id= $_POST['i'];    
            #usa funcion add de ConexionAPI 
            $respuesta = $this->foro->update("foro",$id,$miforo); 
            $dec = ($respuesta);
            //dd($respuesta); #muetra resultado
            $res = $dec->{'posts'};
        }
    return view ('resp', compact('dec','res'));
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

    public function borrar($id)
    {
        echo '<script language="javascript">alert("respuesta eliminada");</script>';
        $respuesta = $this->foro->delete("foro",$id);
        //dd($respuesta);
        return view('createresp');
        
    }

    
}
