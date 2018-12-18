@extends('layouts.design')
@extends('layouts.navbardesign')
@section('ver-temas')

<div class="container">
    <h1>"Temas"</h1>

    <div class="card bg-light mb-3" style="width: 100%;margin-top:40px;" >
        <div class="card-header" style="font-weight: bold;"> {{ $var->{'nombre'} }}
            </div>
                <div class="card-body">
                      <h5 class="card-title">Fecha : 26/11/2018</h5>
                      <p class="card-text">{{ $tem[0]->{'contenido'} }}</p>
                      <button onclick="myFunction()" class="btn btn-dark" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Editar</button>
                      <button type="button" class="btn btn-dark" onclick="window.location.href='/temaeli/{{$var->_id}}'" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Eliminar</button>
                      <button type="button" class="btn btn-primary" onclick="window.location.href='/verreflexion'" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Ver Reflexiones</button>
                 <div class='content' id='content' >
                        <div id="myDIV" style="display: none;">
                            <form class="form-group" action="/tema1" method="POST">
                                  {!!csrf_field() !!} 
                                <span>Nombre:</span> <input type="text" placeholder="EJ: John Titor" name="nombre" id="nombre"><br>
	                        	<span>Email:</span><br><input type="email" placeholder="EJ: ejemplo@mail.com" name="email" id="email"><br><br>
	                        	<span>Tema:</span><input type="text" placeholder="EJ: La tarea de hoy" name="titulo" id="titulo"><br> <br>
	                        	<span>Detalles:</span><input type="text" placeholder="Cuentanos mas de tu tema" size="50" style="WIDTH: 100%; height:120px;" name="tema" id="tema" style="WIDTH: 500px; HEIGHT: 120px"><br><br>
	                        	<input type="submit" name="submit" value="Enviar!" onclick=alert("Tema-Creado")  >
	                        </form>
                        </div>
                 </div>
                </div>
            </div>
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Tema #2: Taller de Integración</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 27/11/2018</h5>
                      <p class="card-text">Proyecto asignado por el colegio de ayudantes.</p>
                      <button  class="btn btn-dark" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Editar</button>
                      <button type="button" class="btn btn-dark"  style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Eliminar</button>
                      <button type="button" class="btn btn-primary" onclick="window.location.href='/verreflexion'" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Ver Reflexiones</button>
                    </div>
            </div>
    
    <div class="card bg-light mb-3" style="width: 100%;margin-top:20px;" >
                <div class="card-header" style="font-weight: bold;">Tema #3: Religión</div>
                    <div class="card-body">
                      <h5 class="card-title">Fecha : 29/11/2018</h5>
                      <p class="card-text">A la hora de enfrentar problemas, podemos ayudarnos de frases de reflexión que nos ayuden a pensar y a meditar sobre cómo mejorar nuestra situación, y es que las reflexiones destacan por ser llenas de experiencia.</p>
                      <button  class="btn btn-dark" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Editar</button>
                      <button type="button" class="btn btn-dark"  style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Eliminar</button>
                      <button type="button" class="btn btn-primary" onclick="window.location.href='/verreflexion'" style="margin:0 auto;width:200px;align-items: center;justify-content: center; margin-top:30px;">Ver Reflexiones</button>
                    </div>
            </div>
            <button type="button" class="btn btn-dark" onclick="window.location.href='/tema'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Crear Tema</button>
            <button type="button" class="btn btn-primary" onclick="window.location.href='/semanas'" style="margin:0 auto;width:200px;display: flex;align-items: center;justify-content: center; margin-top:30px;">Volver a Semanas</button>
</div>

<script>
function myFunction() {
  var x = document.getElementById("myDIV");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}
</script>

@stop
   