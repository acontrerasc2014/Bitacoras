@extends('layouts.design')
@extends('layouts.navbardesign')
@section('edit-grupo')

<title>Editar Grupo</title>
<div class="container">
<h2>Editar Grupo</h2>
<?php
	$readjson = file_get_contents('grupo.json') ;

	$data = json_decode($readjson, true);

    echo "Nombre:"."<br/>";
    echo $data["Nombre de Grupo"]."<br/>";
    echo "Descripcion:"."<br/>";
    echo $data["Descripcion"]."<br/>";
    echo "Participantes:"."<br/>";
    $grupo = $data["Integrantes"];
    // Recorre el arreglo para mostrarlo en pantalla , cuando llega al ultimo elemento omite la ,
    foreach($data["Integrantes"] as $value){ 
        if ($value == end($data["Integrantes"])){
            echo $value;
        }

        else{
            echo $value . " , ";   
        }

    }
    
?>
			



<form class="form-group" action="/grupoedit" method="POST">
		{!! csrf_field() !!}  
        Nombre del Grupo:<br><br>
        <input type="text" name="nombre" id="nombre" placeholder="Inserta Nombre" value='<?php echo $data["Nombre de Grupo"]; ?>'><br><br>
        Descripción del grupo: <br><br>
        <input type="text" placeholder="Cuentanos mas de tu grupo" size="50" name="desc" id="desc" style="WIDTH: 100%; HEIGHT: 120px" value='<?php echo $data["Descripcion"]; ?>'><br><br>

        Integrantes del Grupo: <br><br>

        <select name="access_list[]" size="5" id="access_list[]" class="selection" multiple="multiple" style="width:40%">
            <option  disabled="disabled"><--Elegir Integrantes--></option>    
            <option>Francisco Giacomozzi</option> 
            <option>Diego Flores</option>
            <option>Maximiliano Cartes</option>
            <option>Diego Zapata</option>
            <option>Rodrigo Becerra</option>
        </select><br><br>
        

        <input type="submit" name="submit" value="Enviar!" onclick=alert("Grupo-Editado")  >
	
</form>
</div>
@stop 