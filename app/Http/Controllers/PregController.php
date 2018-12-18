<?php

namespace App\Http\Controllers;
use App\Repositories\ConexionAPI;
use Illuminate\Http\Request;

class PregController extends Controller
{
    protected $pregunta;

    public function __construct(ConexionAPI $pregunta)
    {
        $this->foro = $pregunta;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('createpreg');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createpreg');
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

            $pregun = array (  "Tipo"      => "pregunta",
                                "Nombre"  => $_POST["nombre"],
                                "contenido"=> $_POST["preg"],
                            );
            
            $miforo = array (  "nombre" => $_POST["nombre"],
                               "posts" => $pregun,
                            );

            $pregunta = $this->foro->add("foro",$miforo);
            dd($pregunta);
            $var = ($pregunta);
            $pre = $var->{"posts"};
        }


        if (issets($_POST['submit2'])){
            
            $pregun = array (  "Tipo"=> "pregunta",
                               "Nombre"  => $_POST["nombre"],
                               "contenido"=> $_POST["preg"]);
            
            $miforo = array( "nombre"=> $_POST["nombre"],
                             "posts"=> $pregun,);
            
            $id = $_POST["a"];
            echo '<script language="javascript">alert("pregunta exportada");</script>';

            $pregunta = $this->foro->update("foro",$id,$miforo);
            $var = ($pregunta);

            $pre = $var->{"posts"};
        }
    return view ('preg', compact('var','pre'));
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

    public function borrar($id)
    {
        echo '<script language="javascript">alert("pregunta eliminada");</script>';
        $pregunta = $this->foro->delete("foro",$id);
        return view('createpreg');

    }
}
