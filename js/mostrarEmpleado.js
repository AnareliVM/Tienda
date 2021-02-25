$("select#idEmpleados2").change(function(){
    var IdEmpleados;
    var url="php/mostrarEmpleado.php";
    
    $("select#idEmpleados2 option:selected").each(function(){
        idEmpleados=$(this).val();
    });
    
    $.getJSON(url,function(eempleados){
        $.each(eempleados, function(i, eempleado){
            if(idEmpleados==eempleado.Id){ $('#nombreEmpleadoModif').val(eempleado.Nombre); $('#apellidoPaternoModif').val(eempleado.Apellido_paterno);
            $('#apellidoMaternoModif').val(eempleado.Apellido_materno);
            $('#telefonoModif').val(eempleado.Telefono);
            $('#emailModif').val(eempleado.Email);
                }
        });
    
    });
}).change();