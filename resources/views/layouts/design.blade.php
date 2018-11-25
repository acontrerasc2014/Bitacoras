<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BitacorasGrupales</title>

    <!-- BootstrapCDN -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <!-- diseño formularios -->
    <link rel="stylesheet" href="css/estiloform.css">
    <script type="text/javascript" src="{{ URL::asset('js/creategrupo.js') }}"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    
    <!--modal -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    
</head>
<body>
    @yield('index-bitacoras')
    @yield('crear-citas')
    @yield('crear-comentarios')
    @yield('crear-grupo')
    @yield('crear-pregunta')
    @yield('crear-reflexion')
    @yield('crear-respuestas')
    @yield('crear-Tema')
    @yield('ver-semana')
    @yield('preguntas-respuestas')
    @yield('ver-comentarios')
    @yield('ver-grupos')
    @yield('ver-reflexion')
    
    
</body>
</html>