<?php

namespace App\Http\Controllers;
use App\Repositories\Tecnicas;
use Illuminate\Http\Request;
use GuzzleHttp\Client;

class TecnicaController extends Controller
{
    /*
    * Constructor de objeto Tecnica
    */
    protected $tecnicas;
    
    public function __construct(Tecnicas $tecnicas)
    {
        $this->tecnicas = $tecnicas;
    }
    /*
    * Funcion que maneja la vista de la pagina /tecnicas
    */
    public function showall()
    {
        $tecnicas = $this->tecnicas->all();
        dd($tecnicas);
        //return view('tecnicas.index', compact('tecnicas'));
    }
        
    /* 
    * Funcion que maneja la vista de la pagina /tecnicas/{id}  
    */
    public function show($id)
    {
        $tecnica = $this->tecnicas->find($id);
        dd($tecnicas);
        //return view('tecnicas.show', compact('tecnica'));
    }
    
    public function add()
    {
        $client = new Client([
            'base_uri' => 'https://noestudiosolo.inf.uct.cl/',
                    'verify' => false
        ]);
        $response = $client->request('POST', 'tecnica', [
            'form_params' => [
                //campos de json 'nombre_del_campo' => 'dato a guardar', siguiente_dato
                'habilidades_desarrolladas' => 'pan con queso ',
                //'campo1' => 'dato 2',
                //'campo2' => 'dato 3',
            ]
        ]);
        $response = $response->getBody()->getContents();
        dd($response);    
    }
    
    public function update()
    {
        $id = '5c0d7267ac032763d39b5a27'; //id elemnto a eliminar 
        $client = new Client([
            'base_uri' => 'https://noestudiosolo.inf.uct.cl/',
                    'verify' => false
        ]);
        $response = $client->request('PUT', 'tecnica/'.$id, [
            'form_params'      => [
                'habilidades_desarrolladas' => 'pan con queso modificado x2',
                //'campo1' => 'dato 2',
                //'campo2' => 'dato 3',
            ]
        ]);

        $response = $response->getBody()->getContents();
        dd($response); 
    }

    public function delete()
    {
        $id = '5c0d8c69cf0b9b65cb4f04d8';
        $client = new Client([
            'base_uri' => 'https://noestudiosolo.inf.uct.cl/',
                    'verify' => false
        ]);
        $response = $client->delete('tecnica/'.$id);
        //dd($response); 
    }
}
        