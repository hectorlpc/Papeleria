@extends('layouts.app')
@section('content')

 <div class="container">

   <div class="row justify-content-center mt-5">
     <div class="col-sm-12 col-md-8 col-lg-8">
 <div class="card text-black bg-white mb-3">
     <div class="card-header bg-dark text-white"><center>Modificar Salón</div>
   <div class="card-body">

 <form method="post" action="{{url('/Salon/'.$salon->id)}}">
   {{ csrf_field() }}
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Id Salón:</label>
     <div class="col-sm-9">
       <input type="text" class="form-control"  value="{{$salon->id}}" id="inputEmail3" name="id">
     </div>
   </div>
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Id Edificio:</label>
     <div class="col-sm-9">
       <input class="form-control"  value="{{$salon->id_edificio}}" id="exampleTextarea" rows="3" name="id_edificio"></input>
     </div>
   </div>
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Piso:</label>
     <div class="col-sm-9">
       <input class="form-control"  value="{{$salon->piso}}" id="exampleTextarea" rows="3" name="piso"></input>
     </div>
   </div>
   <div class="form-group row">
     <div class="offset-sm-2 col-sm-10 d-flex flex-row-reverse"><br>
     <a href="{{url('/Salon')}}" class="btn btn-raised btn btn-outline-danger">Cancelar</a>
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
