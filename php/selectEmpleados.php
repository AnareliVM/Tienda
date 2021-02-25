<?php

    include("conexion.php");

    $sql="
        SELECT 
            *
        FROM
            empleado";

    $resultado=mysqli_query($conn, $sql);
    
    if($resultado){
        echo'<option value="0">Empleados</option>';
        
        
        while($fila=mysqli_fetch_array($resultado)){
            
            $nombreCompleto=$fila['Nombre']." ".$fila['Apellido_paterno']." ".$fila['Apellido_materno'];
            
            echo '<option value="'.$fila['Id'].'">';
			echo $nombreCompleto;
			echo '</option>';
        }
        
    }else{
        echo 0;
    }
?>