@extends('layouts/layout')

@section('title', 'Home')


@section('content')
	<h1>contenido para el home - Pagina de {{ __('Home') }}</h1>
	<h1>@lang('Contact')</h1>
	<h1>@lang('Contact') - {{ __('About') }}</h1>
@endsection