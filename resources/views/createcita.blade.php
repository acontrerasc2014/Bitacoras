@extends('layouts.design')
@extends('layouts.navbardesign')
@section('crear-citas')

<div class="container">
    <h1>Crear Citas</h1>
    <form class="form-group" action="/cita" method="POST">
         {!!csrf_field() !!} 
         <span>Ingrese cita</span>
         <br>
        <input type="textarea" name="citas" id="citas"> <br> 
        <br>
        <span> Ingrese autor</span>
        <input type="text" name="autor" id="autor">  <br> 
        <br>
        <span> Título</span>
        <input type="text" name="texto" id="texto">  <br> 
        <br>
        <span> Año</span>
        <input type="text" name="anio" id="anio">  <br> 
        <br>
        <span> Fecha de la Cita </span>
        <input type="date" name="fecha" id="fecha">  <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Cita-Enviada")  >
    </form>
</div>
    
@stop