$(document).ready(function(){
    $('#btnEmpleadosUpdate2').click(function(){
        var datosUsuario2=$('#modificarEmpleado2').serialize();
		$.ajax({
			type:"POST",
			url:"php/empleadoDelete.php",
			data: datosUsuario2,
			success:function(respuesta){
                
                if(respuesta==1){
                    swal("Favor de seleccionar un Empleado", "Presiona OK", "error");
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