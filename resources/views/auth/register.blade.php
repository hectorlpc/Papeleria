@extends('layouts.app')

@section('content')
<div class="container">


  <div class="row justify-content-center mt-5">
      <div class="col-lg-5">
        <h1>Registro</h1>
           <form method="POST" action="{{ route('register') }}">
               {{ csrf_field() }}
               <div class="form_registrar{{ $errors->has('name') ? ' has-error' : '' }}">
                   <label for="nombre">Curp:</label>
                   <input type="text" class="form-control" id="Curp" name="Curp" value="{{ old('name') }}" required autofocus placeholder="">
                   @if ($errors->has('Curp'))
                       <span class="help-block">
                           <strong>{{ $errors->first('Curp') }}</strong>
                       </span>
                   @endif
               </div>
         <div class="form_registrar{{ $errors->has('name') ? ' has-error' : '' }}">
             <label for="nombre">Nombre(s):</label>
             <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required autofocus placeholder="">
             @if ($errors->has('name'))
                 <span class="help-block">
                     <strong>{{ $errors->first('name') }}</strong>
                 </span>
             @endif
         </div>
         <div class="form_registrar{{ $errors->has('email') ? ' has-error' : '' }}">
             <label for="primer_apell">Primer apellido:</label>
             <input type="text" class="form-control" id="Primer_apellido" name="Primer_Ap" placeholder="">
             @if ($errors->has('Primer_Ap'))
                 <span class="help-block">
                     <strong>{{ $errors->first('Primer_Ap') }}</strong>
                 </span>
             @endif
         </div>
         <div class="form_registrar{{ $errors->has('email') ? ' has-error' : '' }}">
             <label for="segundo_apell">Segundo apellido:</label>
             <input type="text" class="form-control" id="Segundo_apellido" name="Segundo_Ap" placeholder="">
             @if ($errors->has('Segundo_Ap'))
                 <span class="help-block">
                     <strong>{{ $errors->first('Segundo_Ap') }}</strong>
                 </span>
             @endif
         </div>
         <div class="form_registrar{{ $errors->has('email') ? ' has-error' : '' }}">
             <label for="celular">Numero de celular:</label>
             <input type="number" class="form-control" id="Num_celular" name="Celular" placeholder="">
             @if ($errors->has('Segundo_Ap'))
                 <span class="help-block">
                     <strong>{{ $errors->first('Segundo_Ap') }}</strong>
                 </span>
             @endif
         </div>
         <div class="form_registrar{{ $errors->has('email') ? ' has-error' : '' }}">
           <label for="exampleInputEmail1">Correo electronico:</label>
           <input type="email" class="form-control" id="email" aria-describedby="emailHelp"  name="email" value="{{ old('email') }}" required placeholder="">
           @if ($errors->has('email'))
               <span class="help-block">
                   <strong>{{ $errors->first('email') }}</strong>
               </span>
           @endif
         </div>
         <div class="form_registrar{{ $errors->has('password') ? ' has-error' : '' }}">
           <label for="password">Password:</label>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="8 caracteres mínimo, usando caracteres especiales @#_.,; y numeros" name="password" required>

           @if ($errors->has('password'))
               <span class="help-block">
                   <strong>{{ $errors->first('password') }}</strong>
               </span>
           @endif
         </div>

         <div class="form_registrar">
           <label for="password">Confirmar Password:</label>
           <input type="password" class="form-control" id="exampleInputPassword1" placeholder="8 caracteres mínimo, usando caracteres especiales @#_.,; y numeros" name="password_confirmation" required>

         </div>
         <br>
         <button type="submit" class="btn btn-raised btn-primary">Registrar</button>
       </form>
     </div>
   </div>

<!--

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>-->
</div>
@endsection
