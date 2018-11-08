
@extends('layouts.design')

@section('crear-respuestas')


<div class="container">
    <h1>Crear respuestas</h1>
    <form class="form-group" action="/respuesta" method="POST">
        {!!csrf_field() !!} 
        <input type="text" name="resp" id="resp"> <span> Ingresa respuesta</span> <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Respuesta-Enviada")  >

    </form>
</div>

@stop