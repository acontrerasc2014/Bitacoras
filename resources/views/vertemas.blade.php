@extends('layouts.design')
@extends('layouts.navbardesign')
@section('ver-temas')

<div class="container">
    <h1>"Temas"</h1>

    <div class="card bg-light mb-3" style="width: 100%;margin-top:40px;" >
                <div class="card-header" style="font-weight: bold;">Tema #1: Derivadas</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 26/11/2018</h5>
                      <p class="card-text">La derivada de una función, se puede interpretar geométricamente como la pendiente de la curva de la función matemática f(x) trazada en función de x. Pero su implicación para modelar la naturaleza tiene una mayor profundidad de lo que pueda suponer esta simple aplicación geométrica. Despues de todo nos podemos contemplar dibujando triángulos finitos para descubrir la pendiente, de modo que ¿por qué es tan importante la derivada?. Su importancia radica en el hecho de que muchas entidades físicas tales como la velocidad, la aceleración, la fuerza y así sucesivamente, se definen como la tasa instantánea de cambio de alguna otra cantidad. La derivada nos puede dar un valor instantáneo preciso de la tasa de cambio y nos conduce a modelar de forma precisa la cantidad deseada.</p>
                      <button type="button" class="btn btn-primary" onclick="window.location.href='/verreflexion'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Ver Reflexiones</button>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Tema #2: Taller de Integración</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 27/11/2018</h5>
                      <p class="card-text">Proyecto asignado por el colegio de ayudantes.</p>
                      <button type="button" class="btn btn-primary" onclick="window.location.href='/verreflexion'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Ver Reflexiones</button>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Tema #3: Religión</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 29/11/2018</h5>
                      <p class="card-text">A la hora de enfrentar problemas, podemos ayudarnos de frases de reflexión que nos ayuden a pensar y a meditar sobre cómo mejorar nuestra situación, y es que las reflexiones destacan por ser llenas de experiencia.</p>
                      <button type="button" class="btn btn-primary" onclick="window.location.href='/verreflexion'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Ver Reflexiones</button>
                    </div>
            </div>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/tema'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Tema</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/semanas'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Volver a Semanas</button>
</div>



@stop
   