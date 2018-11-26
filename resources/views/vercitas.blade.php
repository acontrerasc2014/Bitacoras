@extends('layouts.design')
@extends('layouts.navbardesign')
@section('ver-comentarios')

<div class="container">
    <h1>Citas sobre : "Tema #?"</h1>

    <div class="card bg-light mb-3" style="width: 100%;margin-top:40px;" >
                <div class="card-header" style="font-weight: bold;">Cita #1: Rodrigo Becerra</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 05/08/2018</h5>
                      <h5 class="card-title" style="font-style: italic;">Autor : Haruki Murakami</h5>
                      <p class="card-text">“Y una vez que la tormenta termine, no recordarás como lo lograste, como sobreviviste. Ni siquiera estarás seguro si la tormenta ha terminado realmente. Pero una cosa si es segura. Cuando salgas de esa tormenta, no serás la misma persona que entró en ella. De eso se trata esta tormenta.” </p>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Cita #2: Diego Zapata</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 15/08/2018</h5>
                      <h5 class="card-title" style="font-style: italic;">Autor : Paulo Coelho</h5>
                      <p class="card-text" >“No tenía miedo a las dificultades: lo que la asustaba era la obligación de tener que escoger un camino. Escoger un camino significaba abandonar otros.”</p>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Cita #3: Maximiliano Cartes</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 18/08/2018</h5>
                      <h5 class="card-title" style="font-style: italic;">Autor : José Saramago</h5>
                      <p class="card-text" >“He aprendido a no intentar convencer a nadie. El trabajo de convencer es una falta de respeto, es un intento de colonización del otro.”</p>
                    </div>
            </div>

    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Cita #4: Francisco Giacomozzi</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 20/08/2018</h5>
                      <h5 class="card-title" style="font-style: italic;">Autor : Gabriel García Márquez</h5>
                      <p class="card-text" >“El secreto de una buena vejez no es otra cosa que un pacto honrado con la soledad.”</p>
                    </div>
            </div>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/cita'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Citas</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/semanas'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Volver a Semanas</button>
</div>



@stop