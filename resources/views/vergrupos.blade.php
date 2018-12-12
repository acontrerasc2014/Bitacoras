@extends('layouts.design')
@extends('layouts.navbardesign')
@section('ver-grupos')

<div class="container">
    <h1 style="text-align:center;">Grupos creados actualmente</h1>
    <button type="button" class="btn btn-dark" onclick="window.location.href='/grupo'" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Crear Grupo</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/semanas'" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Volver a Semanas</button>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/vertemas'" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Ver Tema</button><br><br>
    <div class="card-header"><h2 style="font-weight: bold;">Taller de Integración<h2></div>
            <div class="card-body">
                      <h3 style="font-weight: bold;">Grupo 1</h3>
                      <button type="button" class="btn btn-primary" data-toggle="popover"  data-trigger="hover" title="Grupo 1" data-content="Grupo destinado a plantear temas controversiales de la actualidad" style="margin-bottom:10px;width:200px">Ver Descripción</button>
                      <p style="font-weight:bold;">Integrantes: </p><p class="card-text">Francisco Giacomozzi, Diego Flores, Maximiliano Cartes, Diego Zapata, Rodrigo Becerra </p>
            </div>
    <div class="card-header"><h2 style="font-weight: bold;">Algebra para la Computación<h2></div>
            <div class="card-body">
                      <h3 style="font-weight: bold;">Grupo 2</h3>
                      <button type="button" class="btn btn-primary" data-toggle="popover"  data-trigger="hover" title="Grupo 2" data-content="Grupo destinado a plantear temas controversiales de la actualidad" style="margin-bottom:10px;width:200px">Ver Descripción</button>
                      <p style="font-weight:bold;">Integrantes: </p><p class="card-text">Diego Flores, Maximiliano Cartes, Diego Zapata </p>
            </div>
            <div class="card-header"><h2 style="font-weight: bold;">Introducción al Cálculo<h2></div>
            <div class="card-body">
                      <h3 style="font-weight: bold;">Grupo 3</h3>
                      <button type="button" class="btn btn-primary" data-toggle="popover"  data-trigger="hover" title="Grupo 3" data-content="Grupo destinado a plantear temas controversiales de la actualidad" style="margin-bottom:10px;width:200px">Ver Descripción</button>
                      <p style="font-weight:bold;">Integrantes: </p><p class="card-text">Francisco Giacomozzi, Diego Flores, Maximiliano Cartes, Diego Zapata, Rodrigo Becerra </p>
            </div>

    </div>
    
</div>


<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();   
});
</script>

    

@stop
   