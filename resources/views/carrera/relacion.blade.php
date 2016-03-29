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
	   		<?php 
				foreach ($carrera_materia as $cm) {
					?>
				    <li class='ui-state-default'><?php echo "$cm->materia_id";?>
				    </li>
				    <?php 
				}
			?>
			</ul>
			<ul id="sortable2" class="connectedSortable">
			<?php 
				foreach ($materia as $m) {
					?>
				    <li class='ui-state-highlight'><?php echo "$m->nombre";?>
				    </li>
				    <?php 
				}
			?>
			</ul>
    	</div>
	@endsection
