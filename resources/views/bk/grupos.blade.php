@extends('layouts/layout')

@section('title', 'Grupos')

@section('content')

@if (session('status'))
<div class="alert alert-success" fade in role="alert">
  {{ session('status') }}
</div>
@endif


{{-- {{ $errors }} --}}


<div class="box">
  <div class="box-header">
    <h3 class="box-title">Grupos</h3>
  </div>
  <!-- /.box-header -->

  <div class="panel-heading">
    <div class="row">
      {{-- <div class="col-xs"> --}}
        <button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modal-mrole" style="margin-left:10px">
          Nuevo Registro
        </button>
      {{-- </div> --}}
    </div>
  </div>

  

  <div class="box-body">
    <table id="dt1" class="table table-bordered table-striped table-curved table-responsive">
      <thead>{{-- <table id="datatab" class="table display table-striped table-bordered table-curved table-responsive w-auto table-sm table-hover h4"> --}}   {{-- <thead class="cla" > --}}
        <tr>
          <th class="col-id">ID</th>
          <th>Nombre</th>
          <th>Descripción</th>
          <th class="col-acciones">Editar / Borrar</th>
        </tr>
      </thead>
      <tbody class="">
        <!-- data -->
        @foreach ($grupos as $grupo)
        <tr>
          <td>{{ $grupo->id }}</td>
          <td>{{ $grupo->groupname }}</td>
          <td>{{ $grupo->descripcion }}</td>
                {{-- <td>
                  <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  </div>
                </td> --}}
                <td>
                  <div class="btn-group-icons"> 
                    <a href="#detailsForm" onclick="editUser()"><span class="glyphicon glyphicon-edit btn-lg"></span></a>
                    <a href="#" onclick="deleteUser(9,'pgonzalez')"><span class="glyphicon glyphicon-remove-circle btn-lg"></span></a>
                    <input type="hidden" name="delete_user" id="delete_user">
                  </div>
                </td>
              </tr>
              @endforeach
              <!-- /data -->
            </tbody>
            <tfoot>
              <tr>
                <th class="col-id">ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th class="col-acciones">Editar / Borrar</th>
              </tr>
            </tfoot>
          </table><!-- /tbl-custom -->
        </div>{{-- <div class="box-body"> --}}
        </div>{{-- </<div class="box">> --}}

          <!-- Modal Structure -->
          <div id="modal-mrole" class="modal">
            <div class="modal-dialog">
              <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                  <h3 class="modal-title">Nuevo Registro : Grupos</h3>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                  {{-- @include('messages') --}}
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

                  <form action="grupos" method="post">
                    {{ csrf_field() }}
                    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
                    <div class="form-group has-feedback">
                      <label>Nombre</label>
                      <input type="text" class="form-control" name="groupname" value="{{ old('groupname') }}">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                    <div class="form-group has-feedback">
                      <label>Descripción</label>
                      <input type="text" class="form-control" name="descripcion" value="{{ old('descripcion') }}">
                      <span class="glyphicon form-control-feedback"></span>
                    </div>
                  </div><!-- END modal-body -->
                  <!-- Modal footer -->
                  <div class="modal-footer">
                    <div class="row">
                      <div class="col-xs-4">
                        <button type="button" class="btn btn-danger btn-block btn-flat" data-dismiss="modal">Cancelar</button>
                      </div>
                      <div class="col-xs-4"></div>
                      <div class="col-xs-4">
                        <button type="submit" class="btn btn-success btn-block btn-flat">Guardar</button>
                      </div>
                    </div>
                  </div><!-- END modal-footer -->
                </form>

              </div><!-- /.END modal-content -->
            </div><!-- /.END modal-dialog -->
          </div>

        
          @endsection

