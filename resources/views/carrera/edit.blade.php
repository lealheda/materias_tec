	@extends('template.master')
	@section('title','Editar carrera:' . $carrera->nombre)
	@section('content')
    <div class="container">
    <hr>
    <p class="">Registro</p>
    {!! Form::open(['route' => ['carreras.update', $carrera], 'method'=> 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre', $carrera->nombre, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de la carrera']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('descripcion','Descripción') !!}
			{!! Form::text('descripcion', $carrera->descripcion, ['class' => 'form-control', 'required', 'placeholder' => 'Descripción de la carrera']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>	
	{!! Form::close() !!}
    </div>
	@stop    
