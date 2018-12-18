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
    
        <h1>Vista Respuesta</h1>
        

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $dec->{'nombre'} }}
                <br>
                {{$dec->_id}}
                
                <br>
                {{ $res[0]->{'contenido'} }} 

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
                    <form class="form-group" action="/respuesta1" method="POST">
                        {!!csrf_field() !!} 
                        <input type="text" name="nombre" id="nombre" placeholder="Ingrese su nombre" value='{{ $dec->{"nombre"} }}'>  <span> Ingrese su Nombre</span> <br>
                        <br>
                        <input type="text" name="resp" id="resp" placeholder="ingrese su respuesta" value='{{ $res[0]->{"contenido"} }}'> <span> Ingresa respuesta</span> <br> 
                        <input type="hidden" name="i" id="i" value="{{$dec->_id}}">
                        <br>
                        <input type="submit" name="submit2" id="submit2" value="Enviar!" onclick=alert("Respuesta-Enviada")  >

                    </form>


                </div>


            </div>
        </div>


        <a href="/elimina/{{$dec->_id}} ">Delete</a>
        <br>
    
    </div>
</body>
</html>