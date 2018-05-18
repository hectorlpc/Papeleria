@extends('layouts.app')

@section('content')

<main role="main">

 
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1" class=""></li>
      <li data-target="#myCarousel" data-slide-to="2" class=""></li>
    </ol>
    <div class="carousel-inner">
     <?php $a=true;?>
@foreach($publicidades as $publicidad)
     @if($a==true)
      <div class="carousel-item active">
        <?php $a=false;?>
      @else 
       <div class="carousel-item">
    @endif
        <img class="first-slide" src="{{ asset($publicidad->img) }}" alt="First slide">
        <!-- src="{{ asset($publicidad->img) }}"-->
        <div class="container">
          <div class="carousel-caption text-left">
            <p>{{$publicidad->Desc_Publicidad}}</p>
            <!--<p><a class="btn btn-lg btn-raised btn-secondary" href="#" role="button">Sign up today</a></p>-->
          </div>
        </div>
      </div>
@endforeach
      
      
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!--2-->
      <div class="row mt-5">


        @foreach($categorias as $categoria)
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" height="200px" src="{{ asset($categoria->img) }}" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">{{$categoria->Nombre}}</p>
              <p class="card-text">{{$categoria->Desc_Categoria}}</p>
              <div class="d-flex justify-content-end align-items-center">
                  <a class="btn btn-raised btn-info" href="{{url('/tipo/'.$categoria->id)}}">Detalles</a>
              </div>
            </div>
          </div>
        </div>
        @endforeach





      <!--  <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="images/fondo.svg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-end align-items-center">
                  <a class="btn btn-raised btn-info" href="Categoria.html">Detalles</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="images/fondo.svg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-end align-items-center">
                  <a class="btn btn-raised btn-info" href="Categoria.html">Detalles</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-4">
          <div class="card mb-4 box-shadow">
            <img class="card-img-top" src="images/fondo.svg" alt="Card image cap">
            <div class="card-body">
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <div class="d-flex justify-content-end align-items-center">
                  <a class="btn btn-raised btn-info" href="Categoria.html">Detalles</a>
              </div>
            </div>
          </div>
        </div>
    </div>-->

  </div><!-- /.container -->

</main>
@endsection
