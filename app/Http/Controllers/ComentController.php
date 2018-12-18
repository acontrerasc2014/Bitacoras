<?php

namespace App\Http\Controllers;
use App\Repositories\ConexionAPI;
use Illuminate\Http\Request;

class ComentController extends Controller
{
    protected $comentario;
    public function __construct(ConexionAPI $comentario)
    {
        $this->foro = $comentario;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createcom');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createcom');
        //HOLA
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
            $coment = array("nombre"=> "comentario",
                            "contenido"=> $_POST["coment"],
                            "tipo"=> "comentario",    
            );
            $miforo = array ( "nombre"=> "comentario", 
                        "posts" => $coment,
            );    
            #usa funcion add de ConexionAPI 
            $comentario = $this->foro->add("foro",$miforo);
            $vari=($comentario);
            $com=$vari->{'posts'};

            //dd($comentario); #muetra resultado
            
            // $arreglo = array ("Comentario"=> $_POST["coment"]);
            // $JSON = json_encode($arreglo);
            // $archivo_nombre = "comentario.json";
            // file_put_contents($archivo_nombre, $JSON);  
            // echo '<script language="javascript">alert("comentario exportado");</script>';

            // $readjson = file_get_contents('comentario.json') ;

            // $data = json_decode($readjson, true);

            // echo "Comentario:"."<br/>";
            // echo $data["Comentario"]."<br/>";

    }

        
        if(isset($_POST['submit2'])){

            $coment = array("nombre"=> "comentario",
                            "contenido"=> $_POST["coment"],
                            "tipo"=> "comentario",    
            );
            $miforo = array ( "nombre"=> "comentario", 
                        "posts" => $coment,
            );
            $id= $_POST["i"]; 
            echo '<script language="javascript">alert("comentario exportado");</script>';
            //$id= $_POST['i'];    
            #usa funcion add de ConexionAPI 
            $comentario = $this->foro->update("foro",$id,$miforo); 
            $vari = ($comentario);
            //dd($respuesta); #muetra resultado
            $com = $vari->{'posts'};
        }
    return view ('come', compact('vari','com'));
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
        echo '<script language="javascript">alert("comentario eliminado");</script>';
        $comentario = $this->foro->delete("foro",$id);
        //dd($respuesta);
        return view('createcom');
        
    }

    
}