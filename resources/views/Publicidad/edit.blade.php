@extends('layouts.app')

@section('content')
<div class="container">

   <div class="row justify-content-center mt-5">
     <div class="col-sm-12 col-md-8 col-lg-8">
 <div class="card text-black bg-white mb-3">
     <div class="card-header bg-dark text-white"><center>Modificar Publicidad</div>
   <div class="card-body">

 <form method="post" action="{{url('/Publicidad/'.$publicidades->id)}}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <!--
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Descripcion:</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" name="Desc_Publicidad" value="{{$publicidades->Desc_Publicidad}}" placeholder="...">
     </div>
   </div>
   -->
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Descripción:</label>
     <div class="col-sm-9">
       <textarea class="form-control" name="Desc_Publicidad" rows="3">{{$publicidades->Desc_Publicidad}}</textarea>
     </div>
   </div>
   
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">imagen:</label>
     <div class="col-sm-9">
       <input class="form-control" type="file" name="img"
       value="{{$publicidades->img}}" rows="3" ></input>
     </div>
   </div>
   
   <div class="form-group row">
     <div class="offset-sm-2 col-sm-10 d-flex flex-row-reverse"><br>
       <a href="{{url('Publicidad')}}" class="btn btn-raised btn btn-outline-danger">Cancelar</a>
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
