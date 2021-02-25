<?php
    $servername = "127.0.0.1";
    $database = "Tienda";
    $username = "root";
    $password = "";

    $conn = mysqli_connect($servername, $username, $password, $database);

    /*if (!$conn) {
        die("Conexión inválida: " . mysqli_connect_error());
    }
    echo "Se creó la conexión";*/
?>