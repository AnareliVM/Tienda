$(document).ready(function(){
	$.ajax({
		type:"POST",
		url:"php/empleadoRead.php",
		success:function(respuesta){
            if(respuesta==0){
                swal("No existen empleados","Presiona OK","error");
            }else{
                $('div.Empleados').html(respuesta);
            }
        }
    });
});