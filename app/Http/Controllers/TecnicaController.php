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
    
    public function showall()
    {
        try{
            $tecnicas = $this->tecnicas->all();
            dd($tecnicas);
            //return($tecnicas);
        }
        catch(\Exception $ex)
        {
            \Log::error($ex);
        }
    }
    
        
    public function show($id)
    {
        try
        {
            $tecnicas = $this->tecnicas->find($id);
            dd($tecnicas);
            //return($tecnica);
        }
        catch(\Exception $ex)
        {
            \Log::error($ex);
        }
    }
    
    public function add()
    {
        try
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
        catch(\Exception $ex)
        {
            \Log::error($ex);
        }

    }

    public function update($id)
    {
        try
        {
            //$id = '5c0fc29f498b38956798a99b'; //id elemnto a eliminar 
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
        }
        catch(\Exception $ex)
        {
            \Log::error($ex);
        }

        $response = $response->getBody()->getContents();
        dd($response); 
    }

    public function delete($id)
        {
        try
        {
            //$id = '5c0fc29f498b38956798a99b';
            $client = new Client([
                'base_uri' => 'https://noestudiosolo.inf.uct.cl/',
                        'verify' => false
            ]);
            $response = $client->delete('tecnica/'.$id);
            dd($response); 
        }
        catch(\Exception $ex)
        {
            \Log::error($ex);
            echo("registro no encntrado");
        }
    }
}
        