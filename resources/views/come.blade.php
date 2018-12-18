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
    
        <h1>Vista Comentario</h1>
        

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $vari->{'nombre'} }}
                <br>
                {{ $com[0]->{'contenido'} }}
                <br>
                {{ $vari->{'_id'} }}

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
                    <form class="form-group" action="/comentario1" method="POST">
                        {!!csrf_field() !!} 
                        <br>
                        <input type="text" name="coment" id="coment" placeholder="ingrese su comentario" value='{{ $com[0]->{"contenido"} }}'> <span> Ingresa comentario</span> <br> 
                        <input type="hidden" name="i" id="i" value="{{$vari->_id}}">
                        <br>
                        <input type="submit" name="submit2" id="submit2" value="Enviar!" onclick=alert("Comentario-Enviado")  >

                    </form>


                </div>


            </div>
        </div>


        <a href="/eliminaCom/{{$vari->_id}} ">Delete</a>
        <br>
    
    </div>
</body>
</html>