@extends('layouts.design')

@section('ver-comentarios')

<div class="container">
    <h1>Comentarios sobre : "Tema 1"</h1>

    <div class="card bg-light mb-3" style="width: 100%;margin-top:40px;" >
                <div class="card-header" style="font-weight: bold;">Comentario #1: Rodrigo Becerra</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 00/00/0000</h5>
                      <p class="card-text">Este es un tema muy interesante hoy en día. En un mundo donde la tecnología va penetrando todos los ámbitos de la vida, pasamos la mayor parte de nuestro tiempo viendo la pantalla de nuestros teléfonos inteligentes o sentados frente a una computadora. </p>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Comentario #2: Francisco Giacomozzi</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 00/00/0000</h5>
                      <p class="card-text">La mitad de todos los nuevos usuarios de drogas son menores de 18 años. La experimentación juega el papel más importante en el uso de drogas en adolescentes. Sin embargo, la experimentación es un hecho de la vida y sólo porque un adolescente ha probado drogas o alcohol no significa que se convertirá en un adicto.</p>
                    </div>
            </div>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/comentario'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Comentario</button>
    <a href="/semanas" style="color:blue;">Volver a Semanas</a>
</div>



@stop