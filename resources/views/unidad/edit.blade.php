	@extends('template.master')
	@section('title','Editar unidad:' . $unidad->nombre)
	@section('content')
    <div class="container">
    <hr>
    <p class="">Registro</p>
    {!! Form::open(['route' => ['unidades.update', $unidad], 'method'=> 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre', $unidad->nombre, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de la unidad']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Editar', ['class' => 'btn btn-primary']) !!}
		</div>	
	{!! Form::close() !!}
    </div>
	@stop    
