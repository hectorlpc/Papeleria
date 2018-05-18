 @extends('layouts.app')

@section('content')
    
<div class="container">

   <div class="row justify-content-center mt-5">
     <div class="col-sm-12 col-md-8 col-lg-8">
 <div class="card text-black bg-white mb-3">
     <div class="card-header bg-dark text-white"><center>Modificar Tipo del Producto</div>
   <div class="card-body">

 <form method="post" action="{{url('/Tipo/'.$tipos->id)}}" enctype="multipart/form-data">
   {{ csrf_field() }}
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Nombre:</label>
     <div class="col-sm-9">
       <input type="text" value="{{$tipos->Nombre}}" class="form-control" id="inputEmail3" name="Nombre" placeholder="Nombre">
     </div>
   </div>
   <div class="form-group row">
     <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Descripción:</label>
     <div class="col-sm-9">
       <textarea name="Desc_Tipo" class="form-control" id="exampleTextarea" rows="3" placeholder="...">{{$tipos->Desc_Tipo}}</textarea>
     </div>
   </div>
   <div class="form-group row">
       <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Foto:</label>
       <div class="col-sm-9">
         <input class="form-control" type="file" name="img" ></input>
       </div>
     </div>
    <div class="form-group row">
       <label for="formGroupExampleInput" class="col-sm-3 col-form-label">Categoria:</label>
       <div class="col-sm-9">
            <!--<div class="dropdown">
                <button class="btn btn-raised btn btn-outline-info btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Categoria
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" href="#">01</a>
                    <a class="dropdown-item" href="#">02</a>
                    <a class="dropdown-item" href="#">03</a>
                </div>
            </div>-->
            <select class="form-control" name="id_categoria">
                   <option value="">Selecciona</option>
                   @foreach($categorias as $categoria)
                    <option value="{{$categoria->id}}" selected>{{$categoria->Nombre}}</option>
                @endforeach
            </select>
       </div>
     </div>
     
   <div class="form-group row">
     <div class="offset-sm-2 col-sm-10 d-flex flex-row-reverse"><br>
       <!--<button type="button" class="btn btn-raised btn btn-outline-danger" onclick = "location='TipoProductoIndex.html'">Cancelar</button>-->
       <a href="{{url('Tipo')}}" class="btn btn-raised btn btn-outline-danger">Cancelar</a>
       
       <button type="submit" class="btn btn-raised btn btn-outline-success">Modificar</button>
     </div>
   </div>
 </form>
</div>
</div>
</div>
</div>
</div>
    
@endsection