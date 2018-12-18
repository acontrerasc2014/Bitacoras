<!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bitacoras Grupales</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet"  href="/css/app.css">
    <script src="main.js"></script>
</head>
<body>
    <div class="containner">
    
        <h1>Vista Comentario</h1>
        

        <div class="panel panel-default">
            <div class="panel-body">
                {{ $var->{'nombre'} }}
                <br>
                {{ $com[0]->{'contenido'} }}
            </div>
        </div>
    
    </div>
</body>
</html>