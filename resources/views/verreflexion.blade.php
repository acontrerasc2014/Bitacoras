@extends('layouts.design')
@extends('layouts.navbardesign')
@section('ver-reflexion') 

<div class="container">
    <h1 style="text-align:center;">Reflexiones</h1>

    <div class="card-header"><h2 style="font-weight: bold;">Taller de Integración<h2></div>
            <div class="card-body">
                      <h4 style="font-weight: bold;">Rodrigo Becerra</h4>
                      <p class="card-text">"LA MEJOR CLASE DE LA HISTORIA" </p>
                      <h4 style="font-weight: bold;">Diego Zapata</h4>
                      <p class="card-text">"Debieron dar mas tareas" </p>
            </div>
    <div class="card-header"><h2 style="font-weight: bold;">Algebra para la Computación<h2></div>
            <div class="card-body">
            <h4 style="font-weight: bold;">Diego Flores</h4>
                      <p class="card-text">"La mejor manera de vivir por la eternidad es saber disfrutar cada instante al máximo." </p>
                      <h4 style="font-weight: bold;">Maximiliano Cartes</h4>
                      <p class="card-text">"holaaa" </p>
                      
                                  </div>
            <div class="card-header"><h2 style="font-weight: bold;">Introducción al Cálculo<h2></div>
            <div class="card-body">
            <h4 style="font-weight: bold;">Francisco Giacomozzi</h4>
                      <p class="card-text">"buena clase" </p>
                                  </div>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Reflexión</button>
    </div>
    
</div>


<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

    

@stop
   