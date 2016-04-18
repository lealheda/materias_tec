$(function() {
    $( "#sortable1, #sortable2" ).sortable({
       connectWith: ".connectedSortable"
    }).disableSelection();
});
    
function actualizar_relacion(parametro) {
	var carrera_id = parametro;
	var tabla2 = $("#sortable2 input");
	var valoresTabla2 = [];
	$.each(tabla2, function(index, valor){
		valoresTabla2[index] = {
			//carrera_id: carrera_id , materia_id: $(valor).val()
			materia_id: $(valor).val()
		};
	});
	console.log(valoresTabla2);
	$.ajax({
		url: "/carreras/actrelacion",
		type: "POST",
		data: {
			relacion: JSON.stringify(valoresTabla2),
			carrera_id: carrera_id
		},
		success: function(response) {
			//console.log(response);
			alert("Materias actualizadas con exito");
		}
	});
}

