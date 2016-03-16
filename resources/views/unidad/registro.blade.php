	@extends('template.master')
	@section('title','Nueva unidad')
	@section('content')
    <div class="container">
    <hr>
    <p class="">Registro</p>
    {!! Form::open(['route' => 'unidades.store', 'method'=> 'POST']) !!}
		<div class="form-group">
			{!! Form::label('nombre','Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre de la unidad']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>	

	{!! Form::close() !!}
    </div>
	@stop    
