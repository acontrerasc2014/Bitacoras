
@extends('layouts.diseño')

@section('crear-citas')

<div class="container">
    <h1>Crear Citas</h1>
    <form class="form-group" action="/cita" method="POST">
         {!!csrf_field() !!} 
         <span>Ingrese cita</span>
        <input type="text" name="citas" id="citas"> <br> 
        <br>
        <span> Ingrese autor</span>
        <input type="text" name="autor" id="autor">  <br> 
        <br>
        <span> Bibliografia</span>
        <input type="text" name="texto" id="texto">  <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Cita-Enviada")  >
    </form>
</div>
    
@stop