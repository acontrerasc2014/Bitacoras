
@extends('layouts.diseño')

@section('crear-citas')

<h1>Crear Citas</h1>
<form class="form-group" action="/cita" method="POST">
    {!!csrf_field() !!} 
    <input type="text" name="citas" id="citas"> <span> Ingresa cita</span> <br> 
    <br>
    <input type="text" name="autor" id="autor"> <span> Ingrese autor</span> <br> 
    <br>
    <input type="text" name="texto" id="texto"> <span> Bibliografia</span> <br> 
    <br>
    <input type="submit" name="submit" value="Enviar!" onclick=alert("Cita-Enviada")  >
</form>
    
@stop