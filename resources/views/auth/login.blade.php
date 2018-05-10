@extends('layouts.app')

@section('estilo')
  <style>
      .borde  {
          margin: 20px;
      }
      .color {
          background: #f1f1f1;
          background-cover:auto;
          height: 530px
      }
      body{
          background-color: currentColor
      }
      .imgcontainer {
          text-align: center;
          margin: 1px 1px 1px 1px;
      }
      img.avatar {
          width: 45%;
          border-radius: 55%;
      }
      h1 {
          font-family: Century Gothic;
          font-size: 45px;
      }
      label, input {
          font-family: Century Gothic;
          font-size: 18px}
  </style>
@endsection
@section('content')
<div class="container">


  <div class="row justify-content-center mt-5">
      <div class="col-lg-5 color borde">
           <center><h1>Iniciar Sesión</h1></center>
            <div class="imgcontainer">
                <img src="images/imag2.png" alt="Avatar" class="avatar">
            </div>
            <form method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}
                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                  <label>Usuario:</label>
                  <input type="text" class="form-control" id="email" placeholder="" name="email">
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                  <label for="pwd">Contraseña:</label>
                  <input type="password" class="form-control" id="pwd" placeholder="" name="password" required>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
                <div class="form-group">
                    <div class="col-md-6 col-md-offset-4">
                        <div class="">
                            <label>
                                <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordar
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group">

                        <button type="submit" class="btn btn-primary">
                            Iniciar
                        </button>

                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            Recordar contraseña
                        </a>
              
                </div>
            </form>
      </div>
  </div>

</div>
@endsection
