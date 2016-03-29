	@extends('template.master')
	@section('title','Lista de unidades')
	@section('content')
	<div class="container">
	<br>
	@include('flash::message')
	  	<ol class="breadcrumb">
			<li class="active">Unidades</li>
		</ol>
	<a href="{{ route('unidades.create') }}" class="btn btn-info">Registrar nueva unidad</a><hr>
		<table class="table table-striped">
			<thead>
				<th>Id</th>
				<th>Unidad</th>
				<th>Acción</th>			
			</thead>
			<tbody>
				@foreach($unidades as $unidad)
				<tr>
					<td> {{ $unidad->id }} </td>
					<td> {{ $unidad->nombre }} </td>
					<td>
					<a href="{{ route('unidades.edit', $unidad->id) }}" class="btn btn-warning"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span></a>
					<a href="{{ route('unidades.destroy',$unidad->id) }}" onclick="return confirm('Seguro que deseas eliminarlo')" class="btn btn-danger"><span class="glyphicon glyphicon-remove-circle" aria-hidden="true"></span></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		{!! $unidades->render() !!}
</div>
	@endsection