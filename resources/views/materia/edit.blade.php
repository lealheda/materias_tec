	@extends('template.master')
	@section('title','Editar materia:' . $materia->nombre)
	@section('content')
    <div class="container">
    <hr>
    <p class="">Registro</p>
    {!! Form::open(['route' => ['materias.update', $materia], 'method'=> 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre', $materia->nombre, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de la materia']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>	
	{!! Form::close() !!}
    </div>
	@stop    
