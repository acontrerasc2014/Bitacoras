<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">

        <!-- Styles -->
    <link rel="stylesheet" href="css/estilopagprincipal.css">
    <link rel="stylesheet" href="css/estilocarrusel.css" type="text/css" media="all" />
    </head>
    <body>
        <div class="flex-center position-ref ">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Bitacoras UCT
                </div>
                
                <div class="links">
                    <a href="/grupo">Crear Grupos</a>
                    <a href="/tema">Crear Temas</a>
                    <a href="/reflexion">Crear Reflexiones</a>
                    <a href="/comentario">Comentarios</a>
                    <a href="/pregunta">Preguntas</a>
                    <a href="/respuesta">Respuestas</a>
                    <a href="/cita">Crear Citas</a>
                </div>
            </div>
        </div>
        <div id="cuerpo">
            <!--CARRUSEL -->
<div class="container">
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicadores -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Fotos -->
    <div class="carousel-inner">

      <div class="item active">
        <img src="img/094.jpg" alt="Casino" style="width:100%;">
        <div class="carousel-caption">
          <h3>Casino</h3>
          <p>¿Alguna Sugerencia?</p>
        </div>
      </div>

      <div class="item">
        <img src="img/CEC.jpg" alt="CATOLICAN" style="width:100%;">
        <div class="carousel-caption">
          <h3>Universidad Catolica</h3>
          <p>de Temuco</p>
        </div>
      </div>
    
      <div class="item">
        <img src="img/tevu.jpg" alt="tevu" style="width:100%;">
        <div class="carousel-caption">
          <h3>Tevu</h3>
          <p>¿Alguna pregunta?</p>
        </div>
      </div>
  
    </div>

    <!-- controles izq|der -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Anterior</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Siguiente</span>
    </a>
  </div>
</div>

</div>
    </body>
</html>
