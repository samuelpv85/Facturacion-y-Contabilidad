@extends('layouts/layout')

@section('title', 'Roles')

@section('content')
{{-- muestras alerta de regirtro creado --}}
@if (session('status'))
<div class="alert alert-success" fade in role="alert">
	{{ session('status')  }}
	{{-- {{ Log::info(session('status')) }} --}}
</div>
@endif
{{-- {{  Log::error($exception) }} --}}

{{-- {{ Log::info(print_r($users, false)) }} --}}

{{-- {{ error_log('Some message here.') }} --}}

{{-- {{ Log::debug((request()->route()->getAction())) }} --}}
{{-- {{ Log::info(request()->route()->getActionMethod()) }} --}}
{{-- {{ Log::info(request()->route()->getActionName()) }} --}}
{{-- {{ Log::debug(Route::getCurrentRoute()->getActionName()) }} --}}

{{-- {{ var_dump($roles) }} --}}
{{-- {{ var_dump(Session::get(5)) }} --}}

{{-- {{ session }} --}}



<div class="box">
	<div class="box-header">
		<h3 class="box-title">Permisos y Roles</h3>
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
				@foreach ($roles as $role)
				<tr>
					<td>{{ $role->id }}</td>
					<td>{{ $role->rolname }}</td>
					<td>{{ $role->descripcion }}</td>
								{{-- <td>
									<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									</div>
								</td> --}}
								<td>
									<div class="btn-group-icons"> 
										<a href="{{ route('roles.edit', $role->id) }}" method="post" ><span class="glyphicon glyphicon-edit btn-lg"></span></a>
										<a href="#" onclick="delete()"><span class="glyphicon glyphicon-remove-circle btn-lg"></span></a>
										<input type="hidden" name="roles" id="delete_user">
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
								<div class="modal-header cla">
									<h3 class="modal-title">Nuevo Registro : Permisos y Roles</h3>
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
											{{-- {{ Log::info($errors) }} --}}
											@endforeach
										</ul>
									</div>
									{{ Log::info($errors) }}
									@endif

									<form action="roles" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
										<div class="form-group has-feedback {{ $errors->has('rolname') ? 'has-error' : '' }}">
											<label>Nombre</label>
											<input type="text" class="form-control" name="rolname" value="{{ old('rolname') }}">  {{-- value="{{ old('rolname') }} PARA MANTENER LOS VALORES INGRESADOS EN CASO DE ERROR --}}
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

