@extends('layouts.design')
@extends('layouts.navbardesign')
@section('ver-comentarios')

<div class="container">
    <h1>Reflexiones sobre : "Tema #?"</h1>

    <div class="card bg-light mb-3" style="width: 100%;margin-top:40px;" >
                <div class="card-header" style="font-weight: bold;">Reflexión #1: Rodrigo Becerra</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 26/11/2018</h5>
                      <p class="card-text">Vivir conlleva demostrar importancia dentro de la sociedad que nos rodea y para eso participamos, nos hacemos notar y expresamos ideas. Con solo esto demostramos a quienes nos escuchan, leen, observan o se fijan en nosotros que existimos y deseamos manifestarnos. </p>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Reflexión #2: Francisco Giacomozzi</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 27/11/2018</h5>
                      <p class="card-text">Todo lo dicho alrededor de cualquier tema está dentro de la infinidad de posibilidades de expresión del ser humano, quedando por resaltar que es solo uno el interés de participación: Ser tenido en cuenta.</p>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Reflexión #3: Diego Flores</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 29/11/2018</h5>
                      <p class="card-text">A la hora de enfrentar problemas, podemos ayudarnos de frases de reflexión que nos ayuden a pensar y a meditar sobre cómo mejorar nuestra situación, y es que las reflexiones destacan por ser llenas de experiencia.</p>
                    </div>
            </div>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/reflexion'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Reflexión</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/semanas'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Volver a Semanas</button>
</div>



@stop
   