
@extends('layouts.design')

@section('crear-reflexion')

<div class="container">
    <h1>Crear Reflexiones</h1>
    <form class="form-group" action="/reflexion" method="POST">
         {!!csrf_field() !!} 
         <span> Ingresa tu Nombre</span>
        <input type="text" name="nom" id="nom">  <br> 
        <br>
        <span> Ingresa tu Reflexion</span>
        <input type="text" name="reflex" id="reflex">  <br>
        <br> 
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Reflexion-Enviada")  >
    </form>
</div>

@stop  
