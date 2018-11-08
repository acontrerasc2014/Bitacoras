<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Respuestas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <h1>Crear respuestas</h1>
    <form class="form-group" action="/respuesta" method="POST">
         {!!csrf_field() !!} 
        <input type="text" name="resp" id="resp"> <span> Ingresa respuesta</span> <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Respuesta-Enviada")  >

</form>
    
</body>
</html>
