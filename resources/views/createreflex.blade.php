
@extends('layouts.diseño')

@section('crear-reflexion')

<h1>Crear Reflexiones</h1>    
<form class="form-group" action="/reflexion" method="POST">
    {!!csrf_field() !!} 
    <input type="text" name="nom" id="nom"> <span> Ingresa tu Nombre</span> <br> 
    <br>
    <input type="text" name="reflex" id="reflex"> <span> Ingresa tu Reflexion</span> <br>
    <br> 
    <input type="submit" name="submit" value="Enviar!" onclick=alert("Reflexion-Enviada")  >
</form>
@stop  
