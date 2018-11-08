
@extends('layouts.diseño')

@section('crear-Tema')

<h2>Crear Tema</h2>
<form class="form-group" action="/tema" method="POST">
	{!! csrf_field() !!}  
	<label>Nombre:</label> <input type="text" placeholder="EJ: John Titor" name="nombre" id="nombre"><br>
	<label>Email:</label><input type="email" placeholder="EJ: mail@ejemplo.com" name="email" id="email"><br>
	<label>Tema:</label><input type="text" placeholder="EJ: La tarea de hoy" name="titulo" id="titulo"><br> <br>
    <label>Descripcion:</label><input type="text" placeholder="Cuentanos mas de tu tema" size="50" name="tema" id="tema" style="WIDTH: 500px; HEIGHT: 120px"><br><br>
    <input type="submit" name="submit" value="Enviar!" onclick=alert("Tema-Creado")  >
</form>

@stop