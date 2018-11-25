@extends('layouts.design')

@section('ver-semana')
    <div class="container">

    <h1 align='center'> Semanas </h1>
    <h3>Abajo podras ver los temas de las siguientes 6 semanas:</h3>

        <h8>Estos son los temas de la Semana 1:</h8>
        <p name="Tema1">1.- Derivadas e Integrales</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema2">2.- Binomio de Newton y Factorial</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>
        <p name="Tema3">3.- Sumatorias Simples y Dobles</p>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/verpreguntasrespuestas' " style="margin-bottom:20px">Ver Preguntas y Respuestas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/vercomentarios'" style="margin-bottom:20px">Ver Comentarios</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href=''" style="margin-bottom:20px">Ver Reflexiones</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin-bottom:20px">Citas</button>
        <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin-bottom:20px">(Dentro de Ver Reflexiones)</button>

        <br>
        <h8>Estos son los temas de la Semana 2:</h8>
        <p name="Tema4">1.- Programacion en Objetos</p>
        <p name="Tema5">2.- Programacion Web</p>
        <p name="Tema6">3.- Inteligencia Artificial</p>



        <h8>Estos son los temas de la Semana 3:</h8>
        <p name="Tema7">1.- Logica</p>
        <p name="Tema8">2.- Circuitos integrados</p>
        <p name="Tema9">3.- Circuitos Logicos</p>

        <h8>Estos son los temas de la Semana 4:</h8>
        <p name="Tema10">1.- Diseño Web</p>
        <p name="Tema11">2.- Jquery y Ajax</p>
        <p name="Tema12">3.- JavaScrit</p>

        <h8>Estos son los temas de la Semana 5:</h8>
        <p name="Tema13">1.- Python</p>
        <p name="Tema14">2.- C##</p>
        <p name="Tema15">3.- VisualBasics</p>

        <h8>Estos son los temas de la Semana 6:</h8>
        <p name="Tema16">1.- Bases de Datos</p>
        <p name="Tema17">2.- Eliminar y Actualizar Campos</p>
        <p name="Tema18">3.- Editar Columnas y Filas</p>

        <button type="button" class="btn btn-dark" onclick="window.location.href='/tema'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Tema</button>
    </div>
@endsection              