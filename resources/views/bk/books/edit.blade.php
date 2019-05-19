
@extends('books/layout')

{{-- @section('title', 'index') --}}

@section('content')
{{-- <h1>edit</h1> --}}




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

	{{-- 
</div>
</div>/.div class="modal-body">
</div><!-- /.END mo
 --}}

	@endsection

