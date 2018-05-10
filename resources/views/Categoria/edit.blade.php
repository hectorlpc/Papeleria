@extends('layouts.app')

@section('content')
<div class="container">

   <div class="row justify-content-center mt-5">
     <div class="col-sm-12 col-md-8 col-lg-8">
 <div class="card text-black bg-white mb-3">
     <div class="card-header bg-dark text-white"><center>Modificar Categoria</div>
   <div class="card-body">

 <form method="post" action="{{url('/Categoria/'.$categoria->id)}}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Nombre:</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" name="Nombre" value="{{$categoria->Nombre}}" placeholder="Nombre">
     </div>
   </div>
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Descripción:</label>
     <div class="col-sm-9">
       <textarea class="form-control" name="Desc_Categoria" rows="3">{{$categoria->Desc_Categoria}}</textarea>
     </div>
   </div>
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">imagen:</label>
     <div class="col-sm-9">
       <input class="form-control" type="file" name="img" value="{{$categoria->img}}" rows="3" ></input>
     </div>
   </div>
   <div class="form-group row">
     <div class="offset-sm-2 col-sm-10 d-flex flex-row-reverse"><br>
       <button type="button" class="btn btn-raised btn btn-outline-danger" onclick = "location='CategoriaIndex.html'">Cancelar</button>
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
