<?php
    include("conexion.php");

$nombre=trim($_POST['nombreEmpleado']);
$apellidoPaterno=trim($_POST['apellidoPaterno']);
$apellidoMaterno=trim($_POST['apellidoMaterno']);
$telefono=trim($_POST['telefonoEmpleado']);
$email=trim($_POST['emailEmpleado']);


$sql="INSERT INTO `empleado` (`Id`, `Nombre`, `Apellido_paterno`, `Apellido_materno`, `Telefono`, `Email`) VALUES (NULL, '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$telefono', '$email')";
$respuesta=mysqli_query($conn, $sql);
//$sql="INSET INTO empleado(Id, Nombre, Apellido_paterno, Apellido_materno, Telefono, Email) values (NULL, '$nombre', '$apellidoPaterno', '$apellidoMaterno', '$telefono', '$email')";
if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/', $nombre)){
        echo 1;
}else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/', $apellidoPaterno)){
        echo 2;
}else if(!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=[áéíóúÁÉÍÓÚñÑ]*)(?=\s*)[A-Za-záéíóúÁÉÍÓÚñÑ\s]{2,}$/', $apellidoMaterno)){
        echo 3;
}else if(!preg_match('/^[0-9]{10}/', $telefono)){
        echo 4;
}else if(!preg_match('/^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/', $email)){
        echo 5;
}else{
    if(mysqli_execute($respuesta)){
        echo nombre;
    }
    
}

?>