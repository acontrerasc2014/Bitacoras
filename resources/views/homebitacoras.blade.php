@extends('layouts.diseño')

@section('index-bitacoras')

<!-- slider temas -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <p class="slider">01-Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum, quibusdam laboriosam provident veritatis eveniet esse exercitationem vel, pariatur facilis et id culpa debitis. Esse reprehenderit cumque enim provident ullam commodi.</p>
    </div>
    <div class="carousel-item">
      <p class="slider">02-Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloribus numquam iste ullam nulla, repellendus ipsa animi placeat saepe sint sapiente perspiciatis sed molestiae, eum, nam aperiam ab labore facilis totam.</p>
    </div>
    <div class="carousel-item">
        <p class="slider">03-Lorem ipsum dolor sit amet consectetur, adipisicing elit. At dolor laborum reprehenderit perspiciatis facere, hic sint accusamus atque esse aperiam corrupti incidunt! Culpa beatae dicta ex nisi ipsa dolore facere?</p>
    </div>
    <div class="carousel-item">
        <p class="slider">04-Lorem ipsum dolor sit amet consectetur, adipisicing elit. At dolor laborum reprehenderit perspiciatis facere, hic sint accusamus atque esse aperiam corrupti incidunt! Culpa beatae dicta ex nisi ipsa dolore facere?</p>
    </div>
    <div class="carousel-item">
        <p class="slider">05-Lorem ipsum dolor sit amet consectetur, adipisicing elit. At dolor laborum reprehenderit perspiciatis facere, hic sint accusamus atque esse aperiam corrupti incidunt! Culpa beatae dicta ex nisi ipsa dolore facere?</p>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

@stop
