$(document).ready(function(){
    $('#btnEmpleadosUpdate').click(function(){
        var datosUsuario2=$('#modificarEmpleado').serialize();
		$.ajax({
			type:"POST",
			url:"php/empleadoUpdate.php",
			data: datosUsuario2,
			success:function(respuesta){
                
                if(respuesta==1){
                    swal("Favor de seleccionar un Empleado", "Presiona OK", "error");
                }else if(respuesta==2){
                    swal("Favor de completar Nombre", "Presiona OK", "error");
                }else if(respuesta==3){
                    swal("Favor de completar Primer apellido", "Presiona OK", "error");
                }else if(respuesta==4){
                    swal("Favor de completar Segundo apellido", "Presiona OK", "error");
                }else if(respuesta==5){
                    swal("Favor de verificar Teléfono", "Presiona OK", "error");
                }else if(respuesta==6){
                    swal("Error al verificar E-mail", "Presiona OK", "error");
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