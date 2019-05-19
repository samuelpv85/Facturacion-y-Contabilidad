
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')
{{-- {{ Log::info( $echo ) }} --}}


  </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="home" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
             
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              {{-- hidden-xs hides the username on small devices so only the image appears. --}}
              <span class="hidden-xs">{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                {{-- <p><p>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p> --}}
                Web Developer -colocar departamenro, profecion o cargo que ocupa
                <small>Member since Nov. 2012</small>
              </p>
            </li>
                <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                {{-- <a href="" class="btn btn-default btn-flat">Sign out</a> --}}
                <a href="logout" class="btn btn-default btn-flat">Salir</a>
              </div>
            </li>
          </ul>
        </li>
        <!-- Control Sidebar Toggle Button -->
        <li>
          <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
        </li>
      </ul>
    </div>
  </nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar user panel (optional) -->
    <div class="user-panel">
      <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
      </div>
      <div class="pull-left info">
        {{ Log::info( 'sesion', [auth()->user()->username]) }}   {{-- .envia el nombre de usuario al log. --}}
        {{-- {{ Log::info(request()->route()->getActionName()) }} --}}

        <p>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
      </div>
    </div>

    <!-- search form (Optional) -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
          <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
          </button>
        </span>
      </div>
    </form>
    <!-- /.search form -->

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu" data-widget="tree">
      <li class="header"><span>MENU</span></li>
      <!-- Optionally, you can add icons to the links -->
      <li class="treeview">
        <a href="#">
          <i class="fa fa-share"></i> <span>Administración</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="#"><i class="fa fa-circle-o"></i> aaaa</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Control de Acceso
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="grupos"><i class="fa fa-circle-o"></i> Grupos</a></li>
              <li><a href="roles"><i class="fa fa-circle-o"></i> Permisos y Roles</a></li>
              <li><a href="register"><i class="fa fa-circle-o"></i> Usuarios</a></li>
              {{-- tercer nivel --}}
            </ul>
          </li>
          <li><a href="#"><i class="fa fa-circle-o"></i> Divisa</a></li>
          <li class="treeview">
            <a href="#"><i class="fa fa-circle-o"></i> Empresa
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
            </a>
            <ul class="treeview-menu">
              <li><a href="#"><i class="fa fa-circle-o"></i> Almacen</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Cuentas Bancarias</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> Informacion</a></li>
              <li><a href="#"><i class="fa fa-circle-o"></i> otros</a></li>
            </ul>
          </li>
          <li><a href="log-viewer"><i class="fa fa-circle-o"></i> log-viewer</a></li>
          <li><a href="#"><i class="fa fa-circle-o"></i> otrasOpcioes</a></li>
        </ul>
      </li>
{{-- 
<li class="active"><a href="#"><i class="fa fa-link"></i> <span>Link</span></a></li>
<li><a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a></li>
--}}
{{-- ALMACEN --}}
<li class="treeview">
  <a href="#"><i class="fa fa-link"></i> <span>Almacen</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Almacenes</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Articulos</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Fabricantes</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Familia</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Inventario</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> OtraOpcinoes</a></li>
  </ul>
</li>
{{-- CONTABILIDAD --}}
<li class="treeview">
  <a href="#"><i class="fa fa-link"></i> <span>Contabilidad</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Asientos Contables</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Balances</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Cuentas Contables</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Ejercicios</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Formas de Pago</a></li>
    <li class="treeview">
      <a href="#"><i class="fa fa-circle-o"></i> Impuestos
        <span class="pull-right-container">
          <i class="fa fa-angle-left pull-right"></i>
        </span>
      </a>
      <ul class="treeview-menu">
        <li><a href="#"><i class="fa fa-circle-o"></i> Impuestos</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Regularizacion de Iva</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Retenciones</a></li>
        <li><a href="#"><i class="fa fa-circle-o"></i> Zona de Impuestos</a></li>
        {{-- tercer nivel --}}
      </ul>
    </li>
    <li><a href="#"><i class="fa fa-circle-o"></i> OtraOpcinoes</a></li>
  </ul>
</li>
{{-- EMPLEADOS --}}
<li class="treeview">
  <a href="#"><i class="fa fa-link"></i> <span>Empleado</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Control</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Empleados</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Informes</a></li>
    {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Familia</a></li> --}}
    {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Inventario</a></li> --}}
    <li><a href="#"><i class="fa fa-circle-o"></i> OtraOpcinoes</a></li>
  </ul>
</li>
{{-- INFORMES --}}
<li class="treeview">
  <a href="#"><i class="fa fa-link"></i> <span>Informes</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Informe 1</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Informe 2</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Informe 3</a></li>
    {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Familia</a></li> --}}
    {{-- <li><a href="#"><i class="fa fa-circle-o"></i> Inventario</a></li> --}}
    <li><a href="#"><i class="fa fa-circle-o"></i> OtrasInforme</a></li>
  </ul>
</li>
<li class="treeview">
  <a href="#"><i class="fa fa-link"></i> <span>Ventas</span>
    <span class="pull-right-container">
      <i class="fa fa-angle-left pull-right"></i>
    </span>
  </a>
  <ul class="treeview-menu">
    <li><a href="#"><i class="fa fa-circle-o"></i> Facturacion</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Pedidos</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Presupuesto</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Proveedores</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> Servicios</a></li>
    <li><a href="#"><i class="fa fa-circle-o"></i> OtraOpcinoes</a></li>
  </ul>
</li>

</ul>
<!-- /.sidebar-menu -->
</section>



<!-- /.sidebar -->
</aside>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->


  <section class="content-header">
    <h1>
      {{-- Page Header 1 {{ auth()->user()->username }} --}}
   
      @yield('content')

      {{-- {{ auth()->user()->firstname }} {{ auth()->user()->lastname }} --}}

      {{-- {{ dd(Session::all()) }} --}}
     {{--  {{ var_dump( Session::get('users') ) }}
      {{ Log::info($users) }}
      {{ var_dump($auth) }} --}}


    </h1>
   
  </section>








</div>



<!-- /.content-wrapper -->

<!-- Main Footer -->
<footer class="main-footer">
  <!-- To the right -->
  <div class="pull-right hidden-xs">
    Anything you want
  </div>
  <!-- Default to the left -->
  <strong>Copyright &copy; 2019 <a href="#">Company</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Create the tabs -->
  <ul class="nav nav-tabs nav-justified control-sidebar-tabs">
    <li class="active"><a href="#control-sidebar-home-tab" data-toggle="tab"><i class="fa fa-home"></i></a></li>
    <li><a href="#control-sidebar-settings-tab" data-toggle="tab"><i class="fa fa-gears"></i></a></li>
  </ul>
  <!-- Tab panes -->
  <div class="tab-content">
    <!-- Home tab content -->
    <div class="tab-pane active" id="control-sidebar-home-tab">
      <h3 class="control-sidebar-heading">Recent Activity</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:;">
            <i class="menu-icon fa fa-birthday-cake bg-red"></i>

            <div class="menu-info">
              <h4 class="control-sidebar-subheading">Langdon's Birthday</h4>

              <p>Will be 23 on April 24th</p>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

      <h3 class="control-sidebar-heading">Tasks Progress</h3>
      <ul class="control-sidebar-menu">
        <li>
          <a href="javascript:;">
            <h4 class="control-sidebar-subheading">
              Custom Template Design
              <span class="pull-right-container">
                <span class="label label-danger pull-right">70%</span>
              </span>
            </h4>

            <div class="progress progress-xxs">
              <div class="progress-bar progress-bar-danger" style="width: 70%"></div>
            </div>
          </a>
        </li>
      </ul>
      <!-- /.control-sidebar-menu -->

    </div>
    <!-- /.tab-pane -->
    <!-- Stats tab content -->
    <div class="tab-pane" id="control-sidebar-stats-tab">Stats Tab Content</div>
    <!-- /.tab-pane -->
    <!-- Settings tab content -->
    <div class="tab-pane" id="control-sidebar-settings-tab">
      <form method="post">
        <h3 class="control-sidebar-heading">General Settings</h3>

        <div class="form-group">
          <label class="control-sidebar-subheading">
            Report panel usage
            <input type="checkbox" class="pull-right" checked>
          </label>

          <p>
            Some information about this general settings option
          </p>
        </div>
        <!-- /.form-group -->
      </form>
    </div>
    <!-- /.tab-pane -->
  </div>
</aside>
<!-- /.control-sidebar -->
<!-- Add the sidebar's background. This div must be placed
  immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
{{--  --}}
<script>
  $(function () {
    $('#dt1').DataTable({

      'language': {
        "sProcessing":     "Procesando...",
        "sLengthMenu":     "Mostrar _MENU_ registros",
        "sZeroRecords":    "No se encontraron resultados",
        "sEmptyTable":     "Ningún dato disponible en esta tabla",
        "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
        "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
        "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
        "sInfoPostFix":    "",
        "sSearch":         "Buscar:",
        "sUrl":            "",
        "sInfoThousands":  ",",
        "sLoadingRecords": "Cargando...",
        "oPaginate": {
          "sFirst":    "Primero",
          "sLast":     "Último",
          "sNext":     "Siguiente",
          "sPrevious": "Anterior"
        }
      }

    })
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
{{-- funcion para mostrar las alertas por el tiempo definido --}}
<script type="text/javascript">
  $(document).ready(function () {
    window.setTimeout(function() {
      $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
        $(this).remove();
      });
    }, 4000);
  });
</script>
{{-- Retorna el Modal y muestra el error --}}
@if($errors->any())
<script>
  $('#modal-mrole').modal('show');
</script>
@endif 



</body>
</html>