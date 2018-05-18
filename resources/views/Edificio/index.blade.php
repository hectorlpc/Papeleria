 @extends('layouts.app')

@section('content')
      
   <div class="container">
     <div class="row justify-content-center mt-5">
       <div class="col-sm-12 col-md-10 col-lg-10">
         <div class="card text-black bg-white mb-3">
          <div class="card-header bg-dark text-white"><center>Edificio</div>
           <div class="card-body">
              <div class="row justify-content-center">
                <div class="form-group col-lg-6">
                   <input type="text" class="form-control mb-2" id="" placeholder="Buscar">
                      <center>
                     <button type="submit" class="btn btn-raised btn-outline-info" >Buscar</button>
                     <!--<button type="button" class="btn btn-raised btn btn-outline-dark" onclick = "location='EdificioAlta.html'">Agregar</button>-->
                     
                     <a href="{{url('Edificio/create')}}" class="btn btn-raised btn btn-outline-dark">Agregar</a>
                   </center>
                 </div>
              </div>

                  <table class="table table-hover table-responsive-sm">
                   <thead class="thead-dark">
                   <tr>
                   <th>Id</th>
                   <th>Edificio</th>
                   <th>No Plantas</th>
                   <th></th>
                   <th></th>
                   </tr>
                   </thead>
                   <tbody>
                   @foreach($edi as $edificio)
                   <tr>
                   <td>{{$edificio->id}}</td>
                   <td>{{$edificio->Nombre_edificio}}</td>
                   <td>{{$edificio->No_plantas}}</td>
                   <!--<td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum assumenda, veritatis voluptates sunt in fuga explicabo a repellendus repudiandae quaerat.</td>-->
                   <td><a href="{{url('/Edificio/'.$edificio->id.'/edit')}}" class="btn btn-raised btn btn-outline-success btn-sm">Modificar</a></td>
                   <td><button type="button" class="btn btn-raised btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#Modal{{$edificio->id}}">Eliminar</button></td>
                   
                   
                                      <!-- Modal -->

                   <div class="modal fade" id="Modal{{$edificio->id}}" tabindex="-1" role="dialog" aria-labelledby="Modal{{$edificio->id}}" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header">
                           <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que deseas eliminar el producto: {{$edificio->id}}?</h5>
                           <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                             <span aria-hidden="true">&times;</span>
                           </button>
                         </div>
                         <div class="modal-footer">
                           <button type="button" class="btn btn-raised btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                            <form method="post" action="{{url('/Edificio/'.$edificio->id)}}">
                              {{ csrf_field() }}
                              {{method_field('delete')}}
                              <button type="submit" class="btn btn-raised btn btn-outline-success">Aceptar</button>
                            </form>
                         </div>
                       </div>
                     </div>
                   </div>
                   
                   
                   
                   
                   </tr>
                    @endforeach                  
                   </tbody>
                   </table>

            </div>
          </div>
      </div>
    </div>
  </div>

<!-- Modal 
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">¿Está seguro que deseas eliminar éste Edificio?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-raised btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-raised btn btn-outline-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>  -->                                                        
 @endsection