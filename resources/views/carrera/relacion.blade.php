@extends('template.master')
	@section('title','asignar materias')
	@section('content')
		<div class="container">
    	<hr>
    	<ol class="breadcrumb">
			<li class="active">Relación de materias</li>
		</ol>
    	<h4>Materias disponibles - Materias del curso</h4>
    		<ul id="sortable1" class="connectedSortable">
				    @foreach($materia_disponibles as $md)
				    <li class='ui-state-default'>
				    <input type="hidden" value="{{ $md->id }}">
				    {{ $md->nombre }}
				    </li>
				    @endforeach
			</ul>
			<ul id="sortable2" class="connectedSortable">
				 @foreach ($carrera_materia as $cm)
				    <li class='ui-state-highlight'>
				    <input type="hidden" value="{{ $cm->id }}">
				    {{ $cm->nombre }} 
				    </li>
				@endforeach
			</ul>
			<a href="#" onclick="actualizar_relacion()" class="btn btn-info">Guardar</a>
    	</div>
	@endsection
