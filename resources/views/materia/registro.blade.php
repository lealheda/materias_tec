	@extends('template.master')
	@section('title','Nueva materia')
	@section('content')
    <div class="container">
    <hr>
    <p class="">Registro de materia</p>
    {!! Form::open(['route' => 'materias.store', 'method'=> 'POST']) !!}
		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de la materia']) !!}
		</div>
		<div id="unidades">
		
		</div>
		<div class="form-group">
		<br>
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			<a href="#" class="btn btn-primary" onclick="agregar();">Nueva unidad</a>
		</div>	

	{!! Form::close() !!}
    </div>
	@stop    
