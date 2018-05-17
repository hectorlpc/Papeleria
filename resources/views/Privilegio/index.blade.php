@extends('layouts.app')
@section('content')

   <div class="container">
     <div class="row justify-content-center mt-5">
       <div class="col-sm-12 col-md-10 col-lg-10">
         <div class="card text-black bg-white mb-3">
          <div class="card-header bg-dark text-white"><center> Privilegio</div>
           <div class="card-body">
             @if (session('info'))
             <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('info') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              @if (session('eli'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                 {{ session('eli') }}
                 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                   <span aria-hidden="true">&times;</span>
                 </button>
               </div>
               @endif
              <div class="row justify-content-center">
                <div class="form-group col-lg-6">
                  <form method="get" action="{{url('Privilegio/buscar')}}">
                   <input type="text" name="buscar" class="form-control mb-2" id="" placeholder="Buscar">
                      <center>
                     <button type="submit" class="btn btn-raised btn-outline-info" >Buscar</button>
                     <a href="{{url('Privilegio/create')}}" class="btn btn-raised btn btn-outline-dark" >Agregar</a>
                   </center>
                 </form>
                 </div>
              </div>

                  <table class="table table-hover table-responsive-sm">
                   <thead class="thead-dark">
                   <tr>
                   <th>Id</th>
                   <th>Nombre</th>
                   <th>Privilegio</th>
                   <th></th>
                   <th></th>
                   </tr>
                   </thead>
                   <tbody>
                     @foreach($privilegios as $privilegio)
                       <tr>
                       <td>{{$privilegio->id}}</td>
                       <td>{{$privilegio->Nombre}}</td>
                       <td>{{$privilegio->privilegio}}</td>
                       <td><a href="{{url('/Privilegio/'.$privilegio->id.'/edit')}}"class="btn btn-raised btn btn-outline-success btn-sm">Modificar</a></td>
                       <td><button class="btn btn-raised btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#Modal{{$privilegio->id}}">Eliminar</button></td>

                                          <div class="modal fade" id="Modal{{$privilegio->id}}" tabindex="-1" role="dialog" aria-labelledby="Modal{{$privilegio->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que deseas eliminar el metodo de pago?{{$privilegio->Nombre}}?</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-raised btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                                                   <form method="post" action="{{url('/Privilegio/'.$privilegio->id)}}">
                                                     {{ csrf_field() }}
                                                     {{method_field('delete')}}
                                                     <button type="submit" class="btn btn-raised btn btn-outline-success">Aceptar</button>
                                                   </form>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                      @endforeach
                   </tbody>
                   </table>

            </div>
          </div>
      </div>
    </div>
  </div>
@endsection
