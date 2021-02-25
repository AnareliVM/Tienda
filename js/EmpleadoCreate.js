$(document).ready(function(){
    $('#btnEmpleadosCaptura').click(function(){
        var datosUsuario2=$('#nuevoEmpleado').serialize();
		$.ajax({
			type:"POST",
			url:"php/empleadoCreate.php",
			data: datosUsuario2,
			success:function(respuesta){
                  
                if(respuesta==1){
                    swal("Favor de completar Nombre", "Presiona OK", "error");
                }else if(respuesta==2){
                    swal("Favor de completar Apellido paterno", "Presiona OK", "error");
                }else if(respuesta==3){
                    swal("Favor de completar Apellido materno", "Presiona OK", "error");
                }else if(respuesta==4){
                    swal("Favor de verificar Teléfono", "Presiona OK", "error");
                }else if(respuesta==5){
                    swal("Error al verificar la Email", "Presiona OK", "error");
                }else{
                    swal("Completado", "Presiona OK", "success");
                     $(".swal-button").click(function(){
                        location.reload();
                    });
                }
            }
        });
        return false;
    });
});  