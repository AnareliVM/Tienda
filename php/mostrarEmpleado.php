<?php
    include("conexion.php");
    
    $sql="
            SELECT 
                Id, Nombre, Apellido_paterno, Apellido_materno, Telefono, Email
            FROM
                empleado";

    $resultado=mysqli_query($conn, $sql);
    
    $json=array();

    while($rows=mysqli_fetch_array($resultado)){
        
        $Id=$rows['Id'];
        $Nombre=$rows['Nombre'];
        $Apellido_paterno=$rows['Apellido_paterno'];
        $Apellido_materno=$rows['Apellido_materno'];
        $Telefono=$rows['Telefono'];
        $Email=$rows['Email'];
        
        $json[]=array('Id'=>$Id, 'Nombre'=>$Nombre, 'Apellido_paterno'=>$Apellido_paterno,'Apellido_materno'=>$Apellido_materno,'Telefono'=>$Telefono, 'Email'=>$Email);
    }

echo json_encode($json);
?>