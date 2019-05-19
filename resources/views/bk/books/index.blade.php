@extends('books/layout')

@section('title', 'index')

@section('content')
<h1>index</h1>



@foreach ($books as $book)
				<tr>
					<td>{{ $book->id }}</td>
					<td>{{ $book->title }}</td>
					<td>{{ $book->descripcion }}</td>
				</tr>
@endforeach
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user-id">Ver informacion</button>

<div id="user-id" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">{{ $book->title }}</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
        Nombre: {{  $book->title }}  
        <br>
        Apellidos: {{ $book->descripcion }}     
        <br>
        ...

<br>
...
        
        </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
      
      
    </div>
  </div>
</div>


<hr>

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#user-id-2">Editar</button>

<div id="user-id-2" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">New message</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name" value="{{ $book->title }};">
          </div>
         
         
         <div class="form-group">
            <label for="recipient-name" class="col-form-label">Nombre:</label>
            <input type="text" class="form-control" id="recipient-name" value="{{ $book->descripcion }};">
          </div>
          
          <br>
          ...
          <br>
          ...
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">
        Editar
        </button>
      </div>
      
    </div>
  </div>
</div>



<h1>index</h1>


@if (session('message'))
<div class="alert alert-success" fade in role="alert">
	{{ session('message')  }}
	{{-- {{ Log::info(session('status')) }} --}}
</div>
@endif

<div class="container">
	

<div class="box">
	<div class="box-header">
		<h3 class="box-title">BOOKS</h3>
	</div>
	<!-- /.box-header -->

	<div class="panel-heading">

		<div class="row">
			{{-- <div class="col-xs"> --}}
				<button type="button" class="btn btn-primary pull-left" data-toggle="modal" data-target="#modal-mrole" style="margin-left:10px">
					Nuevo Registro
				</button>
				<a  class="btn btn-primary pull-left" href="{{ route('books.create') }}" style="margin-left:10px">
					Nuevo Registro / create
				</a>
			{{-- </div> --}}
		</div>
	</div>

	<div class="box-body">
		<table id="dt1" class="table table-bordered table-striped table-curved table-responsive">
			<thead>
				<tr>
					<th class="col-id">ID</th>
					<th>Titulo</th>
					<th>Descripción</th>
					<th class="col-acciones">Editar / Borrar</th>
				</tr>
			</thead>
			<tbody class="">
				<!-- data -->

				@foreach ($books as $book)
				<tr>
					<td>{{ $book->id }}</td>
					<td>{{ $book->title }}</td>
					<td>{{ $book->descripcion }}</td>
								{{-- <td>
									<div class="form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									</div>
								</td> --}}
								<td>
									<div class="btn-group-icons"> 
										<a  data-toggle="modal" data-target="#modal-mrolee"><span class="glyphicon glyphicon-barcode btn-lg"></span></a>
										<a href="{{ route('books.edit', $book->id) }}" data-toggle="modal" data-target="#modal-mrolee"><span class="glyphicon glyphicon-adjust btn-lg"></span></a>
										<a href="{{ route('books.edit', $book->id) }}" ><span class="glyphicon glyphicon-edit btn-lg"></span></a>
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

{{-- para realizar paginacion de resultados de tabla --}}
{{-- {{ $books->links() }} --}}
{{-- {{ $books->onEachSide(5)->links() }} --}}


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

									<form action="books" method="post">
										{{ csrf_field() }}
										<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
										<div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
											<label>title</label>
											<input type="text" class="form-control" name="title" value="{{ old('title') }}">  {{-- value="{{ old('rolname') }} PARA MANTENER LOS VALORES INGRESADOS EN CASO DE ERROR --}}
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

							</div>

						</div><!-- /.div class="modal-body"> -->
</div>


{{-- modal Editalr --}}

<div id="modal-mrolee" class="modal" >
	<div class="modal-dialog">
		<div class="modal-content">
			{{-- Modal Header --}}
			<div class="modal-header cla">
				<h3 class="modal-title">Actualizacion de Registro : Permisos y Roles</h3>
			</div>

			{{-- Modal body --}}
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
				<div class="container-fluid">
					{{-- echo $book->id --}}
					<form action="{{ route('books.update', $book->id) }}" method="POST">
						{{ csrf_field() }}
						@csrf
						@method('PUT')

						<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
						<div class="form-group has-feedback {{ $errors->has('title') ? 'has-error' : '' }}">
							<label>title</label>
							<input type="text" class="form-control" name="title" value="{{ $book->title }}">  {{-- value="{{ old('rolname') }} PARA MANTENER LOS VALORES INGRESADOS EN CASO DE ERROR --}}
							<span class="glyphicon form-control-feedback"></span>
						</div>
						<div class="form-group has-feedback">
							<label>Descripción</label>
							<input type="text" class="form-control" name="descripcion" value="{{ $book->descripcion }}">
							<span class="glyphicon form-control-feedback"></span>
						</div>
						<div class="row">
							<div class="col-xs-4">
								<button type="button" class="btn btn-danger btn-block btn-flat" >Cancelar</button>
							</div>
							<div class="col-xs-4"></div>
							<div class="col-xs-4">
								<button type="submit" class="btn btn-success btn-block btn-flat">Guardar</button>
							</div>
						</div>
					</div>

				</form>
			</form>

		</div>

	</div><!-- /.div class="modal-body"> -->
</div>






 
@endsection