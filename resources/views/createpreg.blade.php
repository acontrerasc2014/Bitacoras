<!doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Pregunta</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />

</head>
<body>

    <h1>Ingrese su pregunta</h1>
    
    <form class="form-group" action="/pregunta" method="POST">
         {!!csrf_field() !!} 
        <input type="text" name="preg" id="preg"> <span> Ingresa pregunta</span> <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Pregunta-Enviada")  >

    </form>
 
</body>
</html>
