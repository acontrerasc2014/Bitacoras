<?php
namespace App\Repositories;
use GuzzleHttp\Client;
class GuzzleHttpRequest{
    /*
    * Construccion del objeto cliente que trae la libreria.
    */
    protected $client;
    public function __construct(Client $client){
        $this->client = $client;
    }
    /*
    * Funcion que recibe como parametro la terminacion de la ruta a la api y hace el get.
    * @retorna la informacion enviada por el API como un array.
    */
    protected function get($url){
        $response = $this->client->request('GET',$url);
        return json_decode( $response->getBody()->getContents() );
        }
    }
    
?>
    