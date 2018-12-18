<?php

namespace App\Http\Controllers;
use App\Repositories\ConexionAPI;
use Illuminate\Http\Request;

class GrupoController extends Controller
{
    protected $grupo;
    
    public function __construct(ConexionAPI $grupo)
    {
        $this->grupo = $grupo;
    }
    
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

            $data = array ( "rol"=> $_POST["nombre"], 
                            "tipo"=> $_POST["desc"],  );
                            #"Integrantes" =>$_POST["access_list"]);
            
            #$JSON = json_encode($arreglo); 
            $grupo = $this->grupo->add("grupo",$data );
            //dd($grupo); #para ver resultado
            $var=($grupo);
            //$grup=$var->{'posts'};
            //dd($var);
        }

            if(isset($_POST['submit2'])){

                $data = array ( "rol"=> $_POST["nombre"], 
                            "tipo"=> $_POST["desc"],  );
                            #"Integrantes" =>$_POST["access_list"]);
            
                #$JSON = json_encode($arreglo);
                $id= $_POST["i"];  
                $grupo = $this->grupo->update("grupo",$id,$data );
                //dd($grupo); #para ver resultado
                $var=($grupo);
                //$grup=$var->{'posts'};
                //dd($var);
                
              
               
            }
            return view('grupoxd',compact('var'));
            
    }
        
            /*           
            $archivo_nombre = "grupo.json";
            file_put_contents($archivo_nombre, $JSON);  
            echo '<script language="javascript">alert("Datos de grupo exportados");</script>';

            $readjson = file_get_contents('grupo.json') ;

            $data = json_decode($readjson, true);

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
            echo "<br/>";
            echo "Te equivocaste en algo? Editalo!";
            echo "<br/>";
            echo "<a href='/editarGrupo'>Editar!</a>";

            */
            //print_r(array_values($data["Integrantes"][0])); 
            
            //echo $data["Integrantes"]."<br/>";
    
    
    

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
        echo '<script language="javascript">alert("grupo eliminado");</script>';
        $grupo = $this->grupo->delete("grupo",$id);
        //dd($respuesta);
        return view('creategrupo');
        
    }
}
