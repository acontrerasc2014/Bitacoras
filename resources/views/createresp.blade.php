@extends('layouts.design')
@extends('layouts.navbardesign')
@section('crear-respuestas')


<div class="container">
    <h1>Crear respuestas</h1>
    <form class="form-group" action="/respuesta" method="POST">
        {!!csrf_field() !!} 
        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre"> <span> Ingrese su Nombre</span> <br>
        <br>
        <input type="text" name="resp" id="resp" placeholder="ingrese su respuesta"> <span> Ingresa respuesta</span> <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Respuesta-Enviada")  >

    </form>
</div>

@stop