<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SisCont | Login</title>
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

 
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    {{-- en # se puede colocar el logo --}}
    <a href="#"><b>Nombre o logo</b>Sistema</a> 
  </div>
  <!-- /.login-logo -->
  {{-- {{ $errors }} --}}
  <div class="login-box-body">
    <p class="login-box-msg">Ingrese al sistema</p>
    <form action="login" method="post">
       <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">   
      <div class="form-group has-feedback {{ $errors->has('username') ? 'has-error' : '' }}">
        {!!  $errors->first('userpass', '<span style="color:red" class="help-block">:message</span>') !!}
        <label for="username">Usuario</label>
        <input type="text" class="form-control" name="username" placeholder="Ingresa tu Usuario" >
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
        {!!  $errors->first('username', '<span class="help-block">:message</span>') !!}
      </div>
      <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
        <label for="username">Password</label>
        <input type="password" class="form-control" name="password" placeholder="Ingresa tu Password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        {!!  $errors->first('password', '<span class="help-block">:message</span>') !!}
      </div>
      <div class="row">
        <div class="col-xs-6">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Recordarme
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-6">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Iniciar Sesión</button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    {{-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> --}}
    <!-- /.social-auth-links -->

    {{-- <a href="#">I forgot my password</a><br>
    <a href="register.html" class="text-center">Register a new membership</a>
 --}}
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
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
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
