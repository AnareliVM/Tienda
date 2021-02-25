<?php
    include("conexion.php");

    $Id=$_POST['idEmpleados'];

    $sql="DELETE FROM `empleado` WHERE `empleado`.`Id` = '$Id'";
    
    $respuesta=mysqli_query($conn, $sql);

    if($Id=="0"){
        echo 1;
    }else{
        if(mysqli_execute($respuesta)){
                echo $Id;
            }
        }
?>
