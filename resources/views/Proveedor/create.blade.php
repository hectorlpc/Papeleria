@extends('layouts.app')

@section('content')

   <div class="container">

     <div class="row justify-content-center mt-5">
       <div class="col-sm-12 col-md-8 col-lg-8">
   <div class="card text-black bg-white mb-3">
       <div class="card-header bg-dark text-white"><center><h4>Alta Proveedor</h4></div>
     <div class="card-body">
    <br>
   <form method="post" action="{{url('Proveedor/store')}}">
    {{ csrf_field() }}
     <div class="form-group row">
       <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Nombre:</label>
       <div class="col-sm-9">
         <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre" name="Nombre">
       </div>
     </div>
    <div class="form-group row">
       <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Teléfono:</label>
       <div class="col-sm-9">
         <input type="text" class="form-control" id="inputEmail3" placeholder="Teléfono" name="Telefono">
       </div>
     </div>
     <div class="form-group row">
       <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Correo electrónico:</label>
       <div class="col-sm-9">
         <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo@mail.com" name="Email">
       </div>
     </div>
     
     <div class="form-group row">
       <div class="offset-sm-2 col-sm-10 d-flex flex-row-reverse"><br>
         <button type="button" class="btn btn-raised btn btn-outline-danger" onclick = "location='Categorias.html'" padding=20px>Cancelar</button>
         <button type="submit" class="btn btn-raised btn btn-outline-success ">Agregar</button>
       </div>
     </div>
   </form>
 </div>
 </div>
</div>
</div>
</div>
@endsection