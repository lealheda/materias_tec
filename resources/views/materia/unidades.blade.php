@extends('template.master')
	@section('title','Ver unidades')
	@section('content')
		<div class="container">
    	<hr>
    	<ol class="breadcrumb">
    		<li class="active">Unidades de {{ $materia->nombre }}</li>
    	</ol>
			<a href="{{ route('unidades.nueva' ,$materia->id) }}" class="btn btn-info">Registrar nueva unidad</a>
			<br>
    		<table class="table table-striped">
			<thead>
				<th>Id</th>
				<th>Unidad</th>
				<th>Descripcion</th>
				<th>Acción</th>				
			</thead>
			<tbody>
				@foreach($unidades as $unidad)
				<tr>
					<td> {{ $unidad->id }} </td>
					<td> {{ $unidad->nombre }} </td>
					<td> {{ $unidad->descripcion }} </td>
					<td>
					<a href="{{ route('unidades.destroy',$unidad->id) }}" onclick="return confirm('Seguro que deseas eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
    	</div>
	@endsection
