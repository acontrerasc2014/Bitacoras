
@extends('layouts.diseño')

@section('crear-comentarios')

<h1>Crear comentarios</h1>
<form class="form-group" action="/comentario" method="POST">
    {!!csrf_field() !!} 
    <input type="text" name="coment" id="coment"> <span> Ingresa comentario</span> <br> 
    <br>
    <input type="submit" name="submit" value="Enviar!" onclick=alert("Comentario-Enviado")  >
</form>
    
@stop