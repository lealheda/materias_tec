	@extends('template.master')
	@section('title','Lista de carreras')
	@section('content')
	<br>
	@include('flash::message')
	<a href="{{ route('carreras.create') }}" class="btn btn-info">Registrar nueva carrera</a><hr>
		<table class="table table-striped">
			<thead>
				<th>Id</th>
				<th>Carrera</th>
				<th>Descripción</th>
				<th>Acción</th>			
			</thead>
			<tbody>
				@foreach($carreras as $carrera)
				<tr>
					<td> {{ $carrera->id }} </td>
					<td> {{ $carrera->nombre }} </td>
					<td> {{ $carrera->descripcion }} </td>
					<td>
					<a href="{{ route('carreras.edit', $carrera->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('carreras.destroy',$carrera->id) }}" onclick="return confirm('Seguro que deseas eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $carreras->render() !!}

	@endsection