$(function() {
    $( "#sortable1, #sortable2" ).sortable({
       connectWith: ".connectedSortable"
    }).disableSelection();
});
    
function actualizar_relacion() {
	var tabla2 = $("#sortable2 input");
	var valoresTabla2 = [];
	$.each(tabla2, function(index, valor){
		valoresTabla2[index] = {
			idCarrera: $(valor).val()
		};
	});
	console.log(valoresTabla2);
	$.ajax({
		url: "/carreras/hola",
		type: "POST",
		data: {
			ids: JSON.stringify(valoresTabla2)
		},
		success: function(response) {
			console.log(response);
		}
	});
}

