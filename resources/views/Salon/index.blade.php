@extends('layouts.app')
@section('content')

   <div class="container">
     <div class="row justify-content-center mt-5">
       <div class="col-sm-12 col-md-10 col-lg-10">
         <div class="card text-black bg-white mb-3">
          <div class="card-header bg-dark text-white"><center>Salon</div>
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
                  <form method="get" action="{{url('Salon/buscar')}}">
                   <input type="text" name="buscar" class="form-control mb-2" id="" placeholder="Buscar">
                      <center>
                     <button type="submit" class="btn btn-raised btn-outline-info" >Buscar</button>
                     <a href="{{url('Salon/create')}}" class="btn btn-raised btn btn-outline-dark" >Agregar</a>
                   </center>
                 </form>
                 </div>
              </div>

                  <table class="table table-hover table-responsive-sm">
                   <thead class="thead-dark">
                   <tr>
                   <th>Id Salon</th>
                   <th>Id Edificio</th>
                   <th>Piso</th>
                   <th></th>
                   <th></th>
                   </tr>
                   </thead>
                   <tbody>
                     @foreach($salones as $salon)
                       <tr>
                       <td>{{$salon->id}}</td>
                       <td>{{$salon->id_edificio}}</td>
                       <td>{{$salon->piso}}</td>
                       <td><a href="{{url('/Salon/'.$salon->id.'/edit')}}"class="btn btn-raised btn btn-outline-success btn-sm">Modificar</a></td>
                       <td><button class="btn btn-raised btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#Modal{{$salon->id}}">Eliminar</button></td>

                                          <div class="modal fade" id="Modal{{$salon->id}}" tabindex="-1" role="dialog" aria-labelledby="Modal{{$salon->id}}" aria-hidden="true">
                                            <div class="modal-dialog" role="document">
                                              <div class="modal-content">
                                                <div class="modal-header">
                                                  <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que deseas eliminar el salon?{{$salon->id}}?</h5>
                                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                  </button>
                                                </div>
                                                <div class="modal-footer">
                                                  <button type="button" class="btn btn-raised btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                                                   <form method="post" action="{{url('/Salon/'.$salon->id)}}">
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
