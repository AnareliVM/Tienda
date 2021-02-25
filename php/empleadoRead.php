<?php
    include("conexion.php");

    $sql="
            SELECT 
                Id, Nombre, Apellido_paterno, Apellido_materno, Telefono, Email
            FROM
                empleado";

    $resultado=mysqli_query($conn, $sql);

    if($resultado){

            $rows=mysqli_num_rows ($resultado);
        
            while($fila=mysqli_fetch_array($resultado)){
                echo '<div class="col-6 col-sm-1">';
                    echo'<center>';
                        echo'<h6>Id</h6>';
                        echo '<strong><p>'.$fila['Id'].'</p></strong>';
                    echo'</center>';
                echo '</div>';
                echo '<div class="col-6 col-sm-1">';
                    echo'<center>';
                        echo'<h6>Nombre</h6>';
                        echo '<p>'.$fila['Nombre'].'</p>';
                    echo'</center>';
                echo '</div>';
                echo '<div class="col-6 col-sm-2">';
                    echo'<center>';
                        echo'<h6> Primer<br>apellido</h6>';
                        echo '<p>'.$fila['Apellido_paterno'].'</p>';
                    echo'</center>';
                echo '</div>';
                echo '<div class="col-6 col-sm-2">';
                    echo'<center>';
                        echo'<h6>Segundo<br>apellido</h6>';
                        echo '<p>'.$fila['Apellido_materno'].'</p>';
                    echo'</center>';
                echo '</div>';
                echo '<div class="col-6 col-sm-2">';
                    echo'<center>';
                        echo'<h6>Teléfono</h6>';
                        echo '<p>'.$fila['Telefono'].'</p>';
                    echo'</center>';
                echo '</div>';
                echo '<div class="col-6 col-sm-4">';
                    echo'<center>';
                        echo'<h6>Email</h6>';
                        echo '<p>'.$fila['Email'].'</p>';
                    echo'</center>';
                echo '</div>';
                echo '<div class="col-sm-12"><hr style="height:1px;border-width:0;color:gray;background-color:gray"></div>';
            }

        }else{
            echo 0;
            }


?>