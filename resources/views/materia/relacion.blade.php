@extends('template.master')
	@section('title','asignar unidades')
	@section('content')
		<div class="container">
    	<hr>
    	<ol class="breadcrumb">
			<li class="active">Relación de unidades</li>
		</ol>
    	<h4>Unidades disponibles - Unidades del curso</h4>
    		<ul id="sortable1" class="connectedSortable">
				    @foreach($uni_disponibles as $ud)
				    <li class='ui-state-default'>
				    {{ $ud->nombre }}
				    </li>
				    @endforeach
			</ul>
			<ul id="sortable2" class="connectedSortable">
				 @foreach ($materia_unidad as $mu)
				    <li class='ui-state-highlight'>
				    {{ $mu->nombre }} 
				    </li>
				@endforeach
			</ul>
			<a href="#" class="btn btn-info">Guardar</a>
    	</div>
	@endsection
