@extends('layouts.app')

@section('content')
<div class="container marketing">
  <div class="row mt-5 justify-content-center ">
    <div class="card text-white bg-info ">
      <h4 class="m-2">
      <i class="material-icons md-36">&#xE53B;</i>
        Tipos de Productos</h4>
  </div>
</div>
  <!--2-->
    <div class="row mt-5">

      @foreach($tipos as $tipo)
      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top img-thumbnail" src="{{ asset('images/'.$tipo->img) }}" style="height:250px;" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">{{$tipo->Nombre}}</p>
              <p class="card-text">{{$tipo->Desc_Tipo}}</p>
            <div class="d-flex justify-content-end align-items-center">
                <a class="btn btn-raised btn-info" href="productos.html">Detalles</a>
            </div>
          </div>
        </div>
      </div>
      @endforeach




<!--

      <div class="col-sm-6 col-md-6 col-lg-4">
        <div class="card mb-4 box-shadow">
          <img class="card-img-top img-thumbnail" src="images/boligrafos.jpg" style="height:250px;" alt="Card image cap">
          <div class="card-body">
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <div class="d-flex justify-content-end align-items-center">
                <a class="btn btn-raised btn-info" href="productos.html">Detalles</a>
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
                <a class="btn btn-raised btn-info" href="productos.html">Detalles</a>
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
                <a class="btn btn-raised btn-info" href="productos.html">Detalles</a>
            </div>
          </div>
        </div>
      </div>
  </div>

</div><!-- /.container -->
@endsection
