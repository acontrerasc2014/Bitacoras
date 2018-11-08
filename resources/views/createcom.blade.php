<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comentarios</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <h1>Crear comentarios</h1>
    <form class="form-group" action="/comentario" method="POST">
         {!!csrf_field() !!} 
        <input type="text" name="coment" id="coment"> <span> Ingresa comentario</span> <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Comentario-Enviado")  >

</form>
    
</body>
</html>