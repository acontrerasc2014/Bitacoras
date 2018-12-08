<?php

namespace App\Http\Controllers;
use App\Repositories\Usuarios;
use Illuminate\Http\Request;

class ApiUsuarioController extends Controller
{
    protected $usuarios;
    
    public function __construct(Usuarios $usuarios)
    {
        $this->usuarios = $usuarios;
    }

    public function alluser()
    {
        $usuarios = $this->usuarios->all();
        dd($usuarios);
    }
        
    public function finduser($id)
    {
        $usuarios = $this->usuarios->find($id);
        dd($usuarios);
    }
}
        