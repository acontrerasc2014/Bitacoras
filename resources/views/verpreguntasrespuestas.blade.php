@extends('layouts.design')
@extends('layouts.navbardesign')
@section('preguntas-respuestas')

<div class="container">
    <h1>Preguntas / Respuestas Sobre el Tema : "Tema #?"</h1>
    <div class="card text-white bg-primary mb-3" style="width: 100%;margin-top:40px;">
                <div class="card-header" style="font-weight: bold;">Pregunta : Francisco Giacomozzi</div>
                    <div class="card-body">
                        <h5 class="card-title">Fecha : 21/10/2018</h5>
                        <p class="card-text">¿Qué diferencia al hierro del acero?</p>
                        <button type="button" class="btn btn-dark" onclick="window.location.href='/respuesta' " >Responder</button>
                    </div>
            </div>
    <div class="card bg-light mb-3" style="width: 80%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Respuesta: Diego Zapata</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 22/10/2018</h5>
                      <p class="card-text">Principalmente, el hierro es un elemento mientras que el acero es una aleación o combinación de hierro con carbono. aunque también puede contener otros metales en pequeña proporción, como níquel, manganeso o cromo.</p>
                    </div>
            </div>
    <div class="card bg-light mb-3" style="width: 80%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Respuesta: Rodrigo Becerra</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 22/10/2018</h5>
                      <p class="card-text">El acero combina hierro y carbono</p>
                    </div>
            </div>
    <div class="card text-white bg-primary mb-3" style="width: 100%;margin-top:40px;">
                <div class="card-header" style="font-weight: bold;">Pregunta : Maximiliano Cartes</div>
                    <div class="card-body">
                        <h5 class="card-title">Fecha : 26/10/2018</h5>
                        <p class="card-text">¿Los cíclopes guiñan o pestañean?</p>
                        <button type="button" class="btn btn-dark" onclick="window.location.href='/respuesta' " >Responder</button>
                    </div>
            </div>
    <div class="card bg-light mb-3" style="width: 80%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Respuesta: Francisco Giacomozzi</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 29/10/2018</h5>
                      <p class="card-text">Pestañean</p>
                    </div>
            </div>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/pregunta'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Pregunta</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/semanas'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Volver a Semanas</button>
</div>



@stop