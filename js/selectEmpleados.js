$(document).ready(function(){
	$.ajax({
		type:"POST",
		url:"php/selectEmpleados.php",
		success:function(respuesta){
			if(respuesta==0){
				swal("OCURRIÓ UN ERROR, INTENTA MÁS TARDE","Presiona OK","error");
			}else{
				$('.eempleados select').html(respuesta);   
			}
		}
	});
});