	@extends('template.master')
	@section('title','Lista de materias')
	@section('content')
	<br>
	<div class="container">
	@include('flash::message')
	  	<ol class="breadcrumb">
			<li class="active">Materias</li>
		</ol>
	<a href="{{ route('materias.create') }}" class="btn btn-info">Registrar nueva materia</a><hr>
		<table class="table table-striped">
			<thead>
				<th>Id</th>
				<th>Materia</th>
				<th>Acción</th>			
			</thead>
			<tbody>
				@foreach($materias as $materia)
				<tr>
					<td> {{ $materia->id }} </td>
					<td> {{ $materia->nombre }} </td>
					<td>
					<a href="{{ route('materias.edit', $materia->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('materias.destroy',$materia->id) }}" onclick="return confirm('Seguro que deseas eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					<a href="{{ route('materias.relacion', $materia->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-resize-small" aria-hidden="true" title="ver unidades"></span></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $materias->render() !!}
		</div>
	@endsection