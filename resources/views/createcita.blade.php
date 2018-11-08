<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Citas</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

</head>
<body>
    <h1>Crear Citas</h1>
    <form class="form-group" action="/cita" method="POST">
         {!!csrf_field() !!} 
        <input type="text" name="citas" id="citas"> <span> Ingresa cita</span> <br> 
        <br>
        <input type="text" name="autor" id="autor"> <span> Ingrese autor</span> <br> 
        <br>
        <input type="text" name="texto" id="texto"> <span> Bibliografia</span> <br> 
        <br>
        <input type="submit" name="submit" value="Enviar!" onclick=alert("Cita-Enviada")  >

</form>
    
</body>
</html>