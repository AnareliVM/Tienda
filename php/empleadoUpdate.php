<?php
    include("conexion.php");

    $Id=$_POST['idEmpleados2'];
    $Nombre=$_POST['nombreEmpleadoModif'];
    $Apellido1=$_POST['apellidoPaternoModif'];
    $Apellido2=$_POST['apellidoMaternoModif'];
    $Telefono2=$_POST['telefonoModif'];
    $Email=$_POST['emailModif'];

    $sql="UPDATE `empleado` SET `Nombre` = '$Nombre', `Apellido_paterno` = '$Apellido1', `Apellido_materno` = '$Apellido2', `Telefono` = '$Telefono2', `Email` = '$Email' WHERE `empleado`.`Id` = '$Id'";

    $respuesta=mysqli_query($conn, $sql);
    if($Id=="0"){
        echo 1;
    }else{
        if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/', $Nombre)){
                echo 2;
        }else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/', $Apellido1)){
                echo 3;
        }else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/', $Apellido2)){
                echo 4;
        }else if(!preg_match('/^[0-9]{10}/', $Telefono2)){
                echo 5;
        }else if(!preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $Email)){
                echo 6;
        }else{
            if(mysqli_execute($respuesta)){
                echo $Nombre;
            }
        }
    }

?>