
@extends('layouts.design')
@extends('layouts.navbardesign')
@section('crear-comentarios')

<div class="container">
    <h1>Crear comentarios</h1>
    <form class="form-group" action="/comentario" method="POST">
        {!!csrf_field() !!} 
        <span> Ingresa comentario</span>
        <input type="text" name="coment" id="coment">  <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Comentario-Enviado")  >
    </form>
</div>
    
@stop