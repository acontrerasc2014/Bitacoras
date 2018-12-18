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
    
        <h1>Vista Grupo</h1>
        

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $var->{'rol'} }}
                <br>
                {{$var->_id}}
                
                <br>
                {{ $var->{'tipo'} }} 

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
                   <form class="form-group" action="/grupo1" method="POST">
        {!!csrf_field() !!} 

        Nombre del Grupo:<br><br>
        <input type="text" name="nombre" id="nombre" value="{{$var->rol}}" placeholder="Inserta Nombre"><br><br>
        Descripción del grupo: <br><br>
        <input type="text" placeholder="Cuentanos mas de tu grupo" value="{{$var->tipo}}" size="50" name="desc" id="desc" style="WIDTH: 100%; HEIGHT: 120px"><br><br>
        <input type="hidden" name="i" id="i" value="{{$var->_id}}">
        Integrantes del Grupo: <br><br>

        <select name="access_list[]" size="5" id="select" class="selection" multiple="multiple" style="width:40%" >
            <option  disabled="disabled"><--Elegir Integrantes--></option>    
            <option>Francisco Giacomozzi</option> 
            <option>Diego Flores</option>
            <option>Maximiliano Cartes</option>
            <option>Diego Zapata</option>
            <option>Rodrigo Becerra</option>
        </select><br><br>
        

        <input type="submit" name="submit2" value="Enviar!" onclick=alert("Grupo-editado")  >

    </form>


                </div>


            </div>
        </div>


        <a href="/eliminagrupo/{{$var->_id}} ">Delete</a>
        <br>
    
    </div>
</body>
</html>