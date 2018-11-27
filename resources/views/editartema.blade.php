@extends('layouts.design')
@extends('layouts.navbardesign')
@section('edit-tema')

	<title>Editar Tema</title>

<div class="container">
<h2>Editar Tema</h2>
<?php
	$readjson = file_get_contents('tema.json') ;

	$data = json_decode($readjson, true);

	echo "Nombre:"."<br/>";
	echo $data["Nombre"]."<br/>";
	echo "Correo:"."<br/>";
	echo $data["Correo"]."<br/>";
	echo "Titulo:"."<br/>";
	echo $data["Titulo"]."<br/>";
	echo "Descripcion:"."<br/>";
	echo $data["Descripcion"]."<br/>";
	echo "<br/>";
?>
			



<form class="form-group" action="/temaedit" method="POST">
		{!! csrf_field() !!}  
	<span>Nombre:</span> <input type="text" placeholder="EJ: John Titor" name="nombre" id="nombre" value='<?php echo $data["Nombre"]; ?>'><br>
	<span>Email:</span><br><input type="email" placeholder="EJ: mail@ejemplo.com" name="email" id="email" value='<?php echo $data["Correo"]; ?>'><br><br>
	<span>Tema:</span><input type="text" placeholder="EJ: La tarea de hoy" name="titulo" id="titulo" value='<?php echo $data["Titulo"]; ?>'><br> <br>
    <span>Descripcion:</span><input type="text" placeholder="Cuentanos mas de tu tema" size="50" style="WIDTH: 100%; height:120px;" name="tema" id="tema" value='<?php echo $data["Descripcion"]; ?>' style="WIDTH: 500px; HEIGHT: 120px"><br><br>
    <input type="submit" name="submit" value="Enviar!" onclick=alert("Tema-Editado")  >
	
</form>
</div>
@stop 