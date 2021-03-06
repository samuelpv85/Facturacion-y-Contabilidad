{{-- @extends('layouts/layout') --}}

{{-- @section('title', 'Registro') --}}
 
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistema Laravel | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../../plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

{{-- @section('content') --}}
</head>



<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a href="#"><b>Crear</b>Usuario</a>

    </div><!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Registro en el sistema</p>

      {{-- @include('messages') --}}
{{-- alerta de usuario creado --}}
      @if (session('status'))
      <div class="alert alert-success" fade in role="alert">
        {{ session('status') }}
      </div>
      @endif
  {{-- alerta de validacion de campos --}}
      @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
      @endif


      <form action="register" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        <div class="form-group has-feedback">
          <label>Nombre</label>
          <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <label>Apellido</label>
          <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <label>Usuario</label>
          <input type="text" class="form-control" name="username" value="{{ old('username') }}">
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox" class="form-control" name="activo"> Activo
            </label>
            {{-- <input type="text" class="form-control" name="apellido" value="{{ old('') }}"> --}}
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label>Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email') }}">
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <label>Password</label>
            <input type="password" class="form-control" name="password" value="{{ old('') }}">
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>

          <div class="row">
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Registrar</button>
            </div><!-- /.col -->
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->



      <div class="alert alert-success" fade in>
      hola alerta
      </div>

    <!-- jQuery 2.1.4 -->
    <script src="../../bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- iCheck -->
    <script src="../../plugins/iCheck/icheck.min.js"></script>

    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
increaseArea: '20%' // optional
});
      });
    </script>
    
    <script type="text/javascript">
      $(document).ready(function () {
        window.setTimeout(function() {
          $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
            $(this).remove();
          });
        }, 4000);
      });
    </script>

    
</body>


{{-- @endsection --}}

</html>
