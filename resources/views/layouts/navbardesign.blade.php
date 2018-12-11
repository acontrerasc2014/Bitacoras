<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
        <title>Bitácoras Grupales</title>
        <link href="https://fonts.googleapis.com/css?family=Oswald:500,700" rel="stylesheet">
        <link rel="stylesheet" href="css/app.css">

        <!--LOGO -->
            <link href="img/LogoUCT.png" rel="shortcut icon" type="image/png">
        <!-- fondo -->
            <style>
             body{
                background-image: linear-gradient(#0060FF,#7395AC);
                 }
            </style>
    </head>
    <body>
        <!--Barra de Navegación General-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" style="font-family: 'Oswald', sans-serif;" href="/">BITÁCORAS GRUPALES</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                          <a class="nav-link" href="/" >Principal</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/semanas">Ver Semanas </a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="/vergrupos">Ver Grupos</a>
                        </li>
                        
                    </ul>
                </div>
        </nav>
        @yield('welcome-2')

        
    </body>
</html>