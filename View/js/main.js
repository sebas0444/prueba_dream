$(document).ready(function(){

	function conteo(fecha_limite)
	{
		var fecha_actual = new Date();
		var contador = (new Date(fecha_limite) - fecha_actual + 1000)/1000;
		var segundos = ("0" + Math.floor(contador % 60)).slice(-2);
		var minutos = ("0" + Math.floor(contador / 60 % 60)).slice(-2);
		var horas = ("0" + Math.floor(contador / 3600 % 24)).slice(-2);
		var dias = Math.floor(contador / (3600 * 24));

		$(".sp_dia").text(dias);
		$(".sp_hor").text(horas);
		$(".sp_min").text(minutos);
		$(".sp_seg").text(segundos);
	}


	setInterval(function(){conteo("Jun 06 2018 10:00:00 GMT-0500")}, 1000);

	function obtenerPaticipantes()
	{
		var dat = {
			crud: "listAll"
		};

		$.ajax({
			data: dat,
			url: "./Controller/ParticipantesController.php",
			method: "POST",
			success: function(datos){
				$("#div_participantes").html(datos);
			},
			error: function(error){
				console.log(error);
			} 
		});
	}

	function obtenerParticipante(id)
	{
		var dat = {
			crud: "listParameter",
			id: id
		};

		$.ajax({
			data: dat,
			url: "./Controller/ParticipantesController.php",
			method: "POST",
			dataType: "JSON",
			success: function(datos){
				$("#lbl_nombre").text(datos[0]["nombre"] + " " + datos[0]["apellido"]);
				$("#img_foto").prop("src", datos[0]["foto"])
			},
			error: function(error){
				console.log(error);
			}
		});
	}


	obtenerPaticipantes();
	obtenerParticipante($("#txt_id").val());

});