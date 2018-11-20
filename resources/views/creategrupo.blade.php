

@extends('layouts.design')

@section('crear-grupo')

<div class="container">
    <h1>Crear grupos de trabajo</h1>
    <form class="form-group" action="/grupo" method="POST">
        {!!csrf_field() !!} 

        Nombre del Grupo:<br><br>
        <input type="text" name="nombre" id="nombre" placeholder="Inserta Nombre"><br><br>
        Descripción del grupo: <br><br>
        <input type="text" placeholder="Cuentanos mas de tu grupo" size="50" name="desc" id="desc" style="WIDTH: 100%; HEIGHT: 120px"><br><br>

        Integrantes del Grupo: <br><br>

        <select name="access_list[]" size="5" id="select" class="selection" multiple="multiple" style="width:40%" >
            <option  disabled="disabled"><--Elegir Integrantes--></option>    
            <option>Francisco Giacomozzi</option> 
            <option>Diego Flores</option>
            <option>Maximiliano Cartes</option>
            <option>Diego Zapata</option>
            <option>Rodrigo Becerra</option>
        </select><br><br>
        

        <input type="submit" name="submit" value="Enviar!" onclick=alert("Grupo-Creado")  >

    </form>
</div>

@stop