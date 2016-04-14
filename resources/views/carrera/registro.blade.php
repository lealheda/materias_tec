	@extends('template.master')
	@section('title','Nueva carrera')
	@section('content')

    <div class="container">
    <hr>
    <p class="">Registro de carrera</p>

    {!! Form::open(['route' => 'carreras.store', 'method'=> 'POST']) !!}
		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de la carrera']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descripcion','Descripción') !!}
			{!! Form::text('descripcion', null, ['class' => 'form-control', 'required', 'placeholder' => 'Descripción de la carrera']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>	

		<!--
		<div class="form-group">
			{!! Form::label('password','Contraseña') !!}
			{!! Form::password('password', ['class' => 'form-control', 'required', 'placeholder' => '********']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('type','Tipo') !!}
			{!! Form::select('type', ['' => 'Seleccione un nivel', 'member' => 'Miembro', 'admin' => 'Administrador'], null, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>
		-->


	{!! Form::close() !!}
    </div>
	@stop    
