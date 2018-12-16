<?php

namespace App\Http\Controllers;
use App\Repositories\ConexionAPI;
use Illuminate\Http\Request;

class EjForoApiController extends Controller
{
    #crear objeto de la clase ConexionAPI
    protected $foro;
    public function __construct(ConexionAPI $foro)
    {
        $this->foro = $foro;
    }

    #funcion crear foro
    public function addforo() 
    {
        #crar json 
        $citas1 = array(
            "autor"=>"yo",
            "titulo"=>"es una cita",
        );
        $citas2 = array(
            "autor"=>"tu",
            "titulo"=>"es una cita de tu",
        );
        $comentario = array(
            "nombre"=> "comentario",
            "contenido"=> "es un comentario",  
            "tipo"=> "comentario",  
        );
        $respuesta1 = array(
            "citas" => array($citas1,$citas1),
            "subposts" => $comentario, #para mas comentarios  se usa array () ,
            "nombre"=> "respuesta",
            "contenido"=> "es una respuesta",  
            "tipo"=> "respuesta",
        );
        $respuesta2 = array(
            "citas" => $citas1,
            "nombre"=> "respuesta 2",
            "contenido"=> "es una respuesta 2",  
            "tipo"=> "respuesta 2",
        );
        $pregunta = array ( 
            "subposts" => array ($respuesta1, $respuesta2),
            "nombre"=> "pregunta",
            "contenido"=> "como hacer una pregunta",  
            "tipo"=> "pregunta",            
            );
        $miforo = array (
            "nombre"=> "Foro bitacoras",
            "descripcion"=> "pregunta bitacoras",  
            "posts" => $pregunta,
        );    
        #usa funcion add de ConexionAPI 
        $foro = $this->foro->add("foro",$miforo); 
        dd($miforo); #muetra resultado
    }
}
