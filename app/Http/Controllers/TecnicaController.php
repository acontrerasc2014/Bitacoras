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
    public function index()
    {
        $tecnicas = $this->tecnicas->all();
        return view('tecnicas.index', compact('tecnicas'));
    }
        
    /* 
    * Funcion que maneja la vista de la pagina /tecnicas/{id}  
    */
    public function show($id)
    {
        $tecnica = $this->tecnicas->find($id);
        return view('tecnicas.show', compact('tecnica'));
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
                'habilidades_desarrolladas' => 'pan con queso x2',
                //'campo1' => 'dato 2',
                //'campo2' => 'dato 3',
            ]
        ]);
        $response = $response->getBody()->getContents();
        dd($response);    
    }
    public function update()
    {
        $id = '5c0c647fed72150980d00afc';
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
    
}
        