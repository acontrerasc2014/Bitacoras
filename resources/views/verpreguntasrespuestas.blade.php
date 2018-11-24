@extends('layouts.design')

@section('preguntas-respuestas')

<div class="container">
    <h1>Preguntas / Respuestas Sobre el Tema : "Tema 1"</h1>
    <div class="card text-white bg-primary mb-3" style="width: 100%;margin-top:40px;">
                <div class="card-header" style="font-weight: bold;">Pregunta : Francisco Giacomozzi</div>
                    <div class="card-body">
                        <h5 class="card-title">Fecha : 00/00/0000</h5>
                        <p class="card-text">¿Por qué el mono es tan peludo?</p>
                    </div>
            </div>
    <div class="card bg-light mb-3" style="width: 80%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Respuesta: Diego Zapata</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 00/00/0000</h5>
                      <p class="card-text">Porque es el mono</p>
                    </div>
            </div>
    <div class="card bg-light mb-3" style="width: 80%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Respuesta: Rodrigo Becerra</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 00/00/0000</h5>
                      <p class="card-text">Mono = Bullsh*t</p>
                    </div>
            </div>
    <div class="card text-white bg-primary mb-3" style="width: 100%;margin-top:40px;">
                <div class="card-header" style="font-weight: bold;">Pregunta : Maximiliano Cartes</div>
                    <div class="card-body">
                        <h5 class="card-title">Fecha : 00/00/0000</h5>
                        <p class="card-text">¿Los cíclopes guiñan o pestañean?</p>
                    </div>
            </div>
    <div class="card bg-light mb-3" style="width: 80%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Respuesta: Francisco Giacomozzi</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 00/00/0000</h5>
                      <p class="card-text">Pestañean</p>
                    </div>
            </div>
    <a href="/semanas" style="color:blue;">Volver a Semanas</a>
</div>



@stop