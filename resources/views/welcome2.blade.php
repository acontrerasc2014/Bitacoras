@extends('layouts.navbardesign')
@section('welcome-2')

        <!--Nuevo Slider-->
        <div  id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" style="width:80%;height:60%; margin: 0 auto; margin-top: 10px;"  >
                <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner" >
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="img/uct1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Universidad Católica de Temuco</h5>
                            <p>Descripción 1</p>
                        </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/uct2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Escuela de Ingeniería Informática</h5>
                            <p>Descripción 2</p>
                        </div>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="img/uct3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Facultad</h5>
                            <p>Descripción 3</p>
                        </div>
                  </div>
                </div>
                <!--Botones de Control del Carrusel-->
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Siguiente</span>
                </a>
        </div>

        <!--Tarjetas Grupos-->      
        <div class="cartas" style=" width:80%;margin-top: 20px; margin-left: 16%">
            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;float: left;width: 20%;">
                <div class="card-header">Grupo 1</div>
                    <div class="card-body">
                        <h5 class="card-title">Grupo de Trabajo 1</h5>
                        <p class="card-text">Breve descripción para cada grupo de trabajo y sus respectivos integrantes</p>
                    </div>
            </div>

            <div class="card bg-light mb-3" style="max-width: 18rem;float: left;width: 20%;margin-left:20px;" >
                    <div class="card-header">Grupo 2</div>
                    <div class="card-body">
                      <h5 class="card-title">Grupo de Trabajo 2</h5>
                      <p class="card-text">Breve descripción para cada grupo de trabajo y sus respectivos integrantes</p>
                    </div>
            </div>

            <div class="card text-white bg-primary mb-3" style="max-width: 18rem;float: left;width: 20%;margin-left:20px;">
                    <div class="card-header">Grupo 3</div>
                        <div class="card-body">
                            <h5 class="card-title">Grupo de Trabajo 3</h5>
                            <p class="card-text">Breve descripción para cada grupo de trabajo y sus respectivos integrantes</p>
                        </div>
            </div>

            <div class="card bg-light mb-3" style="max-width: 18rem;float: left;width: 20%;margin-left:20px;" >
                    <div class="card-header">Grupo 4</div>
                    <div class="card-body">
                      <h5 class="card-title">Grupo de Trabajo 4</h5>
                      <p class="card-text">Breve descripción para cada grupo de trabajo y sus respectivos integrantes</p>
                    </div>
            </div>
            
        
        </div>
                  

@endsection






