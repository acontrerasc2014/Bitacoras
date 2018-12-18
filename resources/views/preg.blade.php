<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitacoras Grupales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet"  href="/css/app.css">
    <link rel="stylesheet"  href="/css/editar.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="containner">
    
        <h1>Vista Pregunta</h1>
        

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $var->{'nombre'} }}
                <br>
                {{$var->_id}}
                
                <br>
                {{ $pre[0]->{'contenido'} }} 

                <br>
                <br>
                <label for="show">
                    <span>[Formulario de Edicion]</span>
                </label>
                <input type="radio" id="show" name="group">

                <label for="hide">
                    <span>[Ocultar]</span>
                </label>
                <input type="radio" id="hide" name="group">


              
              
              
              
                <div class='content' id='content' >
                    <form class="form-group" action="/pregunta1" method="POST">
                        {!!csrf_field() !!} 
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" value='{{ $var->{"nombre"} }}'>  <span> Ingrese su Nombre</span> <br>
                        <br>
                        <input type="text" name="preg" id="preg" placeholder="ingrese su pregunta" value='{{ $pre[0]->{"contenido"} }}'> <span> Ingresa pregunta</span> <br> 
                        <input type="hidden" name="a" id="a" value="{{$var->_id}}">
                        <br>
                        <input type="submit" name="submit2" id="submit2" value="Enviar!" onclick=alert("Pregunta-Enviada")  >

                    </form>


                </div>


            </div>
        </div>


        <a href="/elimina/{{$var->_id}} ">Delete</a>
        <br>
    
    </div>
</body>
</html>