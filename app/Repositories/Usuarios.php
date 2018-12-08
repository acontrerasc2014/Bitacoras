<?php
namespace App\Repositories;
class Usuarios extends GuzzleHttpRequest{
 
    public function all(){
        return $this->get('usuario');
    }
    public function find($id){
        return $this->get("usuario/{$id}");
    }
}
?>
