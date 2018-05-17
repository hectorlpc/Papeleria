@extends('layouts.app')

@section('content')

 <div class="container">

   <div class="row justify-content-center mt-5">
     <div class="col-sm-12 col-md-8 col-lg-8">
 <div class="card text-black bg-white mb-3">
     <div class="card-header bg-dark text-white"><center><h4>Modificar Proveedor</h4></center></div>
   <div class="card-body">
 <br>
 <form method="post" action="{{url('/Proveedor/'.$proveedor->id)}}">
 {{ csrf_field() }}
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Nombre:</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="inputEmail3" placeholder="Nombre" name="Nombre" value="{{$proveedor->Nombre}}">
     </div>
   </div>
   <div class="form-group row">
       <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Teléfono:</label>
       <div class="col-sm-9">
         <input type="text" class="form-control" id="inputEmail3" placeholder="Teléfono" name="Telefono" value="{{$proveedor->Telefono}}">
       </div>
     </div>
     <div class="form-group row">
       <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Correo electrónico:</label>
       <div class="col-sm-9">
         <input type="text" class="form-control" id="inputEmail3" placeholder="ejemplo@mail.com" name="Email" value="{{$proveedor->Email}}">
       </div>
     </div>
     
   <div class="form-group row">
     <div class="offset-sm-2 col-sm-10 d-flex flex-row-reverse"><br>
       <button type="button" class="btn btn-raised btn btn-outline-danger" onclick = "location='Categorias.html'">Cancelar</button>
       <button type="submit" class="btn btn-raised btn btn-outline-success ">Modificar</button>
     </div>
   </div>
 </form>
</div>
</div>
</div>
</div>
</div>
@endsection