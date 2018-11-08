
@extends('layouts.diseño')

@section('crear-Tema')

<div class="container">
	<h2>Crear Tema</h2>
	<form class="form-group" action="/tema" method="POST">
		{!! csrf_field() !!}  
		<span>Nombre:</span> <input type="text" placeholder="EJ: John Titor" name="nombre" id="nombre"><br>
		<span>Email:</span><br><input type="email" placeholder="EJ: mail@ejemplo.com" name="email" id="email"><br><br>
		<span>Tema:</span><input type="text" placeholder="EJ: La tarea de hoy" name="titulo" id="titulo"><br> <br>
		<span>Descripcion:</span><input type="text" placeholder="Cuentanos mas de tu tema" size="50" style="WIDTH: 100%; height:120px;" name="tema" id="tema" style="WIDTH: 500px; HEIGHT: 120px"><br><br>
		<input type="submit" name="submit" value="Enviar!" onclick=alert("Tema-Creado")  >
		
	</form>
</div>

@stop