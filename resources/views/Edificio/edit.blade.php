@extends('layouts.app')

@section('content')
 <div class="container">

   <div class="row justify-content-center mt-5">
     <div class="col-sm-12 col-md-8 col-lg-8">
 <div class="card text-black bg-white mb-3">
     <div class="card-header bg-dark text-white"><center>Modificar Edificio</div>
   <div class="card-body">


<form method="post" action="{{url('/Edificio/'.$edi->id)}}">
   {{ csrf_field() }}
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Edificio:</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="inputEmail3" 
       name="Nombre_edificio" value="{{$edi->Nombre_edificio}}" placeholder="Nombre">
     </div>
   </div>
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">No. de Plantas:</label>
     <div class="col-sm-9">
       <input type="text" class="form-control" id="inputEmail3" 
       name="No_plantas" value="{{$edi->No_plantas}}">
     </div>
   </div>
   <div class="form-group row">
     <div class="offset-sm-2 col-sm-10 d-flex flex-row-reverse"><br>
       <a href="{{url('Edificio')}}" class="btn btn-raised btn btn-outline-danger">Cancelar</a>
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