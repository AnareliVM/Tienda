$(document).ready(function(){
    $('.error').hide();
    $('.correcto').hide();
    
    $('#nombreEmpleadoModif').keyup(function(e){
        $('.error').hide();
        var nombreEmpleado=$("input#nombreEmpleadoModif").val();
        var Nombre=document.getElementById("nombreEmpleadoModif");
        
        var regexNombre=/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/;
        if(!regexNombre.test(nombreEmpleado)){
            $("label#nombre_error").show();
            $("label#nombre_correcto").hide();
            $("input#nombreEmpleado").focus();
            Nombre.style.borderColor='#ffcccc';
            Nombre.style.borderWidth='3px';
            return false; 
        }else if(regexNombre.test(nombreEmpleado)){
            Nombre.style.borderColor='#C6FFD5';
            Nombre.style.borderWidth='3px';
            $("label#nombre_correcto").show();
            $("label#nombre_error").hide();
        }
    });
    
    $('#apellidoPaternoModif').keyup(function(e){
        var apellidoPaternoModif=$("input#apellidoPaternoModif").val();
        var Apellido1=document.getElementById("apellidoPaternoModif");
        Apellido1.style.borderColor='#000';
        var regexApellidoPaterno=/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/;
        if(!regexApellidoPaterno.test(apellidoPaternoModif)){
            $("label#apellidoPaterno_error").show();
            $("label#apellidoPaterno_correcto").hide();
            $("input#apellidoPaternoModif").focus();
            Apellido1.style.borderColor='#ffcccc';
            Apellido1.style.borderWidth='3px';
            return false;
        }else if(regexApellidoPaterno.test(apellidoPaternoModif)){
            Apellido1.style.borderColor='#C6FFD5';
            Apellido1.style.borderWidth='3px';
            $("label#apellidoPaterno_correcto").show();
            $("label#apellidoPaterno_error").hide();
        }
    });
    
    $('#apellidoMaternoModif').keyup(function(e){
        var apellidoMaternoModif=$("input#apellidoMaternoModif").val();
        var ApellidoMaternoModif=document.getElementById("apellidoMaternoModif");
        ApellidoMaternoModif.style.borderColor='#000';
        var regexApellidoMaterno=/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/;
        if(!regexApellidoMaterno.test(apellidoMaternoModif)){
            $("label#apellidoMaterno_error").show();
            $("label#apellidoMaterno_correcto").hide();
            $("input#apellidoMaternoModif").focus();
            ApellidoMaternoModif.style.borderColor='#ffcccc';
            ApellidoMaternoModif.style.borderWidth='3px';
            return false;
        }else if(regexApellidoMaterno.test(apellidoMaternoModif)){
            ApellidoMaternoModif.style.borderColor='#C6FFD5';
            ApellidoMaternoModif.style.borderWidth='3px';
            $("label#apellidoMaterno_correcto").show();
            $("label#apellidoMaterno_error").hide();
        }
    });
    
    $('#telefonoModif').keyup(function(e){
        var telefonoModif=$("input#telefonoModif").val();
        var telefono=document.getElementById("telefonoModif");
        var regexTelefono=/^[0-9]{10}$/;
        if(!regexTelefono.test(telefonoModif)){
            $("label#telefono_error").show();
            $("label#telefono_correcto").hide();
            $("input#telefonoModif").focus();
            telefono.style.borderColor='#ffcccc';
            telefono.style.borderWidth='3px';
            return false;
        }else if(regexTelefono.test(telefonoModif)){
            telefono.style.borderColor='#C6FFD5';
            telefono.style.borderWidth='3px';
            $("label#telefono_error").hide();
            $("label#telefono_correcto").show();
        }
    });
    
    $('#emailModif').keyup(function(e){
        var emailModif=$("input#emailModif").val();
        var email=document.getElementById("emailModif");
        var regexEmail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if(!regexEmail.test(emailModif)){
            $("label#email_error").show();
            $("label#email_correcto").hide();
            $("input#emailModif").focus();
            email.style.borderColor='#ffcccc';
            email.style.borderWidth='3px';
            return false;
        }else if(regexEmail.test(emailModif)){
            email.style.borderColor='#C6FFD5';
            email.style.borderWidth='3px';
            $("label#email_error").hide();
            $("label#email_correcto").show();
        }
    });
    
    
    
});