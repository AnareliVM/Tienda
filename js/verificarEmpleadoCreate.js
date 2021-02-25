$(document).ready(function(){
    $('.error').hide();
    $('.correcto').hide();
    
    $('#nombreEmpleado').keyup(function(e){
		var datosUsuario2=$('#nuevoEmpleado').serialize();
        $('.error').hide();
        var nombreEmpleado=$("input#nombreEmpleado").val();
        var Nombre=document.getElementById("nombreEmpleado");
        
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
    
    $('#apellidoPaterno').keyup(function(e){
        var apellidoPaterno=$("input#apellidoPaterno").val();
        var Apellido=document.getElementById("apellidoPaterno");
        Apellido.style.borderColor='#000';
        var regexApellidoPaterno=/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/;
        if(!regexApellidoPaterno.test(apellidoPaterno)){
            $("label#apellidoPaterno_error").show();
            $("label#apellidoPaterno_correcto").hide();
            $("input#apellidoPaterno").focus();
            Apellido.style.borderColor='#ffcccc';
            Apellido.style.borderWidth='3px';
            return false;
        }else if(regexApellidoPaterno.test(apellidoPaterno)){
            Apellido.style.borderColor='#C6FFD5';
            Apellido.style.borderWidth='3px';
            $("label#apellidoPaterno_correcto").show();
            $("label#apellidoPaterno_error").hide();
        }
    });
    
    $('#apellidoMaterno').keyup(function(e){
        var apellidoMaterno=$("input#apellidoMaterno").val();
        var ApellidoMaterno=document.getElementById("apellidoMaterno");
        ApellidoMaterno.style.borderColor='#000';
        var regexApellidoMaterno=/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/;
        if(!regexApellidoMaterno.test(apellidoMaterno)){
            $("label#apellidoMaterno_error").show();
            $("label#apellidoMaterno_correcto").hide();
            $("input#apellidoMaterno").focus();
            ApellidoMaterno.style.borderColor='#ffcccc';
            ApellidoMaterno.style.borderWidth='3px';
            return false;
        }else if(regexApellidoMaterno.test(apellidoMaterno)){
            ApellidoMaterno.style.borderColor='#C6FFD5';
            ApellidoMaterno.style.borderWidth='3px';
            $("label#apellidoMaterno_correcto").show();
            $("label#apellidoMaterno_error").hide();
        }
    });
    
    $('#telefonoEmpleado').keyup(function(e){
        var telefonoEmpleado=$("input#telefonoEmpleado").val();
        var telefono=document.getElementById("telefonoEmpleado");
        var regexTelefono=/^[0-9]{10}$/;
        if(!regexTelefono.test(telefonoEmpleado)){
            $("label#telefono_error").show();
            $("label#telefono_correcto").hide();
            $("input#telefonoEmpleado").focus();
            telefono.style.borderColor='#ffcccc';
            telefono.style.borderWidth='3px';
            return false;
        }else if(regexTelefono.test(telefonoEmpleado)){
            telefono.style.borderColor='#C6FFD5';
            telefono.style.borderWidth='3px';
            $("label#telefono_error").hide();
            $("label#telefono_correcto").show();
        }
    });
    
    $('#emailEmpleado').keyup(function(e){
        var emailEmpleado=$("input#emailEmpleado").val();
        var email=document.getElementById("emailEmpleado");
        var regexEmail=/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;
        if(!regexEmail.test(emailEmpleado)){
            $("label#email_error").show();
            $("label#email_correcto").hide();
            $("input#emailEmpleado").focus();
            email.style.borderColor='#ffcccc';
            email.style.borderWidth='3px';
            return false;
        }else if(regexEmail.test(emailEmpleado)){
            email.style.borderColor='#C6FFD5';
            email.style.borderWidth='3px';
            $("label#email_error").hide();
            $("label#email_correcto").show();
        }
    });
    
    
    
});