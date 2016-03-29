@extends('template.master')
	@section('title','asignar materias')
	@section('content')
		<div class="container">
    	<hr>
    		<ul id="sortable1" class="connectedSortable">
			  <li class="ui-state-default">Item 1</li>
			  <li class="ui-state-default">Item 2</li>
			  <li class="ui-state-default">Item 3</li>
			  <li class="ui-state-default">Item 4</li>
			  <li class="ui-state-default">Item 5</li>
			</ul>
			 
			<ul id="sortable2" class="connectedSortable">
			  <li class="ui-state-highlight">Item 1</li>
			  <li class="ui-state-highlight">Item 2</li>
			  <li class="ui-state-highlight">Item 3</li>
			  <li class="ui-state-highlight">Item 4</li>
			  <li class="ui-state-highlight">Item 5</li>
			</ul>
    	</div>
    	 	<?php 
			foreach ($carrera_materia as $cm) {
			    echo $cm->materia_id;
			}
		?>
	@endsection
