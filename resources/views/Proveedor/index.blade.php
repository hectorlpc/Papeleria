@extends('layouts.app')

@section('content')

   <div class="container">
     <div class="row justify-content-center mt-5">
       <div class="col-sm-12 col-md-10 col-lg-10">
         <div class="card text-black bg-white mb-3">
             <div class="card-header bg-dark text-white"><center><h4>Administrar Rol</h4></center></div>
            
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
                  <br>
                    <form method="get" action="{{url('Proveedor/buscar')}}">
                   <input type="text" class="form-control mb-2" id="" placeholder="Buscar">
                     <br>
                      <center>
                     <a href="{{url('Proveedor/buscar')}}" class="btn btn-raised btn-outline-info" >Buscar</a>
                     <a href="{{url('Proveedor/create')}}" class="btn btn-raised btn btn-outline-dark" >Agregar</a>
                   </center>
                    </form>
                 </div>
              </div>
                <br>
                  <table class="table table-hover table-responsive-sm">
                   <thead class="thead-dark">
                   <tr>
                   <th>Id</th>
                   <th>Nombre</th>
                   <th>Teléfono</th>
                   <th>Correo electrónico</th>
                   <th></th>
                   <th></th>
                   </tr>
                   </thead>
                      
                   <tbody>
                   @foreach($proveedores as $proveedor)
                   <tr>
                   <td>{{$proveedor->id}}</td>
                   <td>{{$proveedor->Nombre}}</td>
                   <td>{{$proveedor->Telefono}}</td>
                   <td>{{$proveedor->Email}}</td>
                   <td><a href="{{url('/Proveedor/'.$proveedor->id.'/edit')}}" class="btn btn-raised btn btn-outline-success btn-sm">Modificar</a></td>
                   <td><button type="button" class="btn btn-raised btn btn-outline-danger btn-sm"data-toggle="modal" data-target="#Modal{{$proveedor->id}}">Eliminar</button></td>
                   </tr>
                          
                   <!-- Modal -->

                   <div class="modal fade" id="Modal{{$proveedor->id}}" tabindex="-1" role="dialog" aria-labelledby="Modal{{$proveedor->id}}" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que deseas eliminar el proveedor {{$proveedor->Nombre}}?</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-raised btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                            <form method="post" action="{{url('/Proveedor/'.$proveedor->id)}}">
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

<!-- Modal 
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar Proveedor</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         
        </div>
        <div class="modal-body" align="center">
          <p>Se eliminara un proveedor!!! </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-raised btn-success" data-dismiss="modal">Aceptar</button>
        </div>
      </div>
    </div>
  </div>-->
  @endsection