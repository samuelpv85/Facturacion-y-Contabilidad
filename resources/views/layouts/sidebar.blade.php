<div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          {{-- <p>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</p> --}}
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
                <li><a href="#"><i class="fa fa-circle-o"></i> Grupos</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Permisos y Roles</a></li>
                <li><a href="#"><i class="fa fa-circle-o"></i> Usuarios</a></li>
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
            <li><a href="#"><i class="fa fa-circle-o"></i> otrasOpcioes</a></li>
          </ul>
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
      