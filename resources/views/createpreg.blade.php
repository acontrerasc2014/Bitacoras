
@extends('layouts.design')

@section('crear-pregunta')

<div class="container">
    
    <h1>Ingrese su pregunta</h1>
    
    <form class="form-group" action="/pregunta" method="POST">
        {!!csrf_field() !!} 
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"> <span> Ingrese su Nombre </span> <br>
        <br>
        <input type="text" name="preg" id="preg" placeholder="Ingrese su pregunta"> <span> Ingresa pregunta </span> <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Pregunta-Enviada")  >
    </form>

</div>


@stop