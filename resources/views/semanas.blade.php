@extends('layouts.design')

@section('ver-semana')
    <div class="container">

    <h1 align='center'> Semanas </h1>
    <h3>Abajo podras ver los temas de las siguientes 6 semanas:</h3>
    
    @foreach($temas as $semanas)

        <a href="{{route('trabajos',$semanas)}}" class="h8 text-danger">{{$semanas}}</a><br>
 
    @endforeach

    @if(!empty($tema))

        @switch($tema)

            @case($tema=="Semana 1")
                
                <div class="container">
                <h8>Estos son los temas de la Semana 1:</h8>
                <p name="Tema1">1.- Derivadas e Integrales</p>
                <a href="/verpreguntasrespuestas" style="color:blue;">Preguntas/Respuestas</a><br>
                <a href="/vercomentarios" style="color:blue;">Comentarios</a>
                <p name="Tema2">2.- Binomio de Newton y Factorial</p>
                <p name="Tema3">3.- Sumatorias Simples y Dobles</p>
                </div>

            @break
    
            @case($tema=="Semana 2")

                <div class="container">
                <h8>Estos son los temas de la Semana 2:</h8>
                <p name="Tema4">1.- Programacion en Objetos</p>
                <p name="Tema5">2.- Programacion Web</p>
                <p name="Tema6">3.- Inteligencia Artificial</p>
                </div>

            @break

            @case($tema=="Semana 3")

                <div class="container">
                <h8>Estos son los temas de la Semana 3:</h8>
                <p name="Tema7">1.- Logica</p>
                <p name="Tema8">2.- Circuitos integrados</p>
                <p name="Tema9">3.- Circuitos Logicos</p>
                </div>

            @break

            @case($tema=="Semana 4")

                <div class="container">
                <h8>Estos son los temas de la Semana 4:</h8>
                <p name="Tema10">1.- Diseño Web</p>
                <p name="Tema11">2.- Jquery y Ajax</p>
                <p name="Tema12">3.- JavaScrit</p>
                </div>

            @break

            @case($tema=="Semana 5")

                <div class="container">
                <h8>Estos son los temas de la Semana 5:</h8>
                <p name="Tema13">1.- Python</p>
                <p name="Tema14">2.- C##</p>
                <p name="Tema15">3.- VisualBasics</p>
                </div>

            @break

            @case($tema=="Semana 6")

                <div class="container">
                <h8>Estos son los temas de la Semana 6:</h8>
                <p name="Tema16">1.- Bases de Datos</p>
                <p name="Tema17">2.- Eliminar y Actualizar Campos</p>
                <p name="Tema18">3.- Editar Columnas y Filas</p>
                </div>
                
            @break

        @endswitch

    @endif
    </div>
@endsection