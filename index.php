<?php
include("php/conexion.php");
?>
<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="styles/main_styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link  rel="icon" href="img/a.jpg" type="image/jpg"/>
    <title>Tienda | Panel Empleados</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    </head>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark" data-toggle="affix">
            <div class="mx-auto d-sm-flex d-block flex-sm-nowrap">
                <img src="img/a.jpg" alt="Logo">
                <center><h4>Panel de empleados</h4>
                </center>
            </div><br>
        </nav>
    </header>
    
    <body>
       <section id="EmpleadosControl">
          <div class="container">
              <div class="row">
                    <div class="col-4 col-sm-4 col-lg-4">
                        <center><button class="btn btn-outline-light" type="submit" data-toggle="modal" data-target="#NuevoEmpleado"><i class="bi bi-person-plus-fill"></i> Nuevo empleado</button></center>
                    </div>
                    <div class="col-4 col-sm-4 col-lg-4">
                        <center><button class="btn btn-outline-light" type="submit" data-toggle="modal" data-target="#editarEmpleado"><i class="bi bi-pencil-square"></i> Editar empleado</button></center>
                    </div>
                    <div class="col-4 col-sm-4 col-lg-4">
                        <center><button class="btn btn-outline-light" type="submit" data-toggle="modal" data-target="#eliminarEmpleado"><i class="bi bi-trash-fill"></i> Borrar empleado</button></center>
                    </div>
                    <br><br><br><br>
                </div>
            </div>
                 
                  <div class="container-fluid">
                           <div class="row Empleados">
                               
                           </div>
                      </div>
           
       </section>
        <!--ModalNuevoEmpleado-->
  <div class="modal fade" id="NuevoEmpleado">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registrar Nuevo empleado</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form id="nuevoEmpleado" method="POST" onsubmit="empleadoCaptura()">
               <div class="container">
                    <div class="row">
                      <div class="col-sm-4">
                           <p>Nombre Empleado:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Nombre" name="nombreEmpleado" class="form-control" id="nombreEmpleado" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                            <label class="error" for="nombreEmpleado" id="nombre_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo letras.)</label>
                            <label class="correcto" for="nombreEmpleado" id="nombre_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        <div class="col-sm-4">
                            <p>Primer apellido:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Primer apellido" name="apellidoPaterno" class="form-control" id="apellidoPaterno" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                           <label class="error" for="apellidoPaterno" id="apellidoPaterno_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo letras)</label>
                           <label class="correcto" for="apellidoPaterno" id="apellidoPaterno_correcto"><i class="bi bi-check-circle-fill"></i>
                           </label>
                        </div><br><br>
                        <div class="col-sm-4">
                            <p>Segundo apellido:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Segundo apellido" name="apellidoMaterno" class="form-control" id="apellidoMaterno" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                           <label class="error" for="apellidoMaterno" id="apellidoMaterno_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo letras.)</label>
                           <label class="correcto" for="apellidoMaterno" id="apellidoMaterno_correcto"><i class="bi bi-check-circle-fill"></i>
                           </label>
                        </div><br><br>
                        
                        <div class="col-sm-4">
                            <p>Teléfono:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="tel" id="telefonoEmpleado" name="telefonoEmpleado" class="form-control" placeholder="ej. 7333334567" required>
                        </div>
                       <div class="col-sm-4">
                           <label class="error" for="telefonoEmpleado" id="telefono_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo números. 10 dígitos)</label>
                            <label class="correcto" for="telefonoEmpleado" id="telefono_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        <div class="col-sm-4">
                            <p>Email:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="email" id="emailEmpleado" name="emailEmpleado" class="form-control" placeholder="tucorreo@gmail.com">
                        </div>
                       <div class="col-sm-4">
                           <label class="error" for="emailEmpleado" id="email_error"><i class="bi bi-x-circle-fill"></i> Requerido. (ej. tucorreo@gmail.com)</label>
                            <label class="correcto" for="emailEmpleado" id="email_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        <div class="col-sm-12">
                            <center><button class="btn btn-success btnEmpleadosCaptura" id="btnEmpleadosCaptura" >Registrar</button></center>
                        </div>
                   </div>
              </div>
            </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>
       <!--ModalEditarEmpleado-->
  <div class="modal fade" id="editarEmpleado">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Editar empleado</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
              <form id="modificarEmpleado" method="POST">
               <div class="container">
                    <div class="row">
                     <div class="col-sm-4">
                         <p>Seleccione ID de empleado a editar</p>
                     </div>
                        <div class="col-sm-4">
                            <div class="empleados2" name="empleados2" id="empleados2">
                                <select id="idEmpleados2" class="form-control form-control" name="idEmpleados2">
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="error" for="idEmpleados" id="id_errorEmp2" ><i class="bi bi-x-circle-fill"></i></label>
                            <label class="correcto" for="idEmpleados" id="id_correctoEmp2"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                      <div class="col-sm-4">
                           <p>Nombre Empleado:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Nombre" name="nombreEmpleadoModif" class="form-control" id="nombreEmpleadoModif" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                            <label class="error" for="nombreEmpleado" id="nombre_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo letras.)</label>
                            <label class="correcto" for="nombreEmpleado" id="nombre_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        <div class="col-sm-4">
                           <p>Primer Apellido:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Primer Apellido" name="apellidoPaternoModif" class="form-control" id="apellidoPaternoModif" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                            <label class="error" for="apellidoPaternoModif" id="apellidoPaterno_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo letras.)</label>
                            <label class="correcto" for="apellidoPaternoModif" id="apellidoPaterno_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        
                        <div class="col-sm-4">
                           <p>Segundo Apellido:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Primer Apellido" name="apellidoMaternoModif" class="form-control" id="apellidoMaternoModif" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                            <label class="error" for="apellidoMaternoModif" id="apellidoMaterno_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo letras.)</label>
                            <label class="correcto" for="apellidoMaternoModif" id="apellidoMaterno_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        <div class="col-sm-4">
                           <p>Telefono:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Teléfono" name="telefonoModif" class="form-control" id="telefonoModif" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                            <label class="error" for="telefonoModif" id="telefono_error"><i class="bi bi-x-circle-fill"></i> Requerido. (Sólo letras.)</label>
                            <label class="correcto" for="telefonoModif" id="telefono_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        
                        <div class="col-sm-4">
                           <p>E-mail:</p>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" placeholder="Teléfono" name="emailModif" class="form-control" id="emailModif" required title="Sólo letras y más de dos letras">
                        </div>
                       <div class="col-sm-4">
                            <label class="error" for="emailModif" id="email_error"><i class="bi bi-x-circle-fill"></i> Requerido. (ej. tucorreo@gmail.com)</label>
                            <label class="correcto" for="emailModif" id="email_correcto"><i class="bi bi-check-circle-fill"></i></label>
                        </div><br><br>
                        <div class="col-sm-12">
                            <center><button class="btn btn-success btnEmpleadosUpdate" id="btnEmpleadosUpdate" >Editar</button></center>
                        </div>
                   </div></div></form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
         </div>
        </div>
    </div>
        
        
        <!--ModalEditarEmpleado-->
  <div class="modal fade" id="eliminarEmpleado">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Eliminar empleado</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
            <form id="modificarEmpleado2" method="POST">
               <div class="container">
                    <div class="row">
                     <div class="col-sm-4">
                         <p>Seleccione ID de empleado a eliminar</p>
                     </div>
                   <div class="col-sm-4">
                       <div class="eempleados" name="eempleados" id="eempleados">
                            <select id="idEmpleados" class="form-control form-control" name="idEmpleados">
                            </select>
                        </div>
                    </div><br><br>
                       <div class="col-sm-12">
                            <center><button class="btn btn-success btnEmpleadosUpdate2" id="btnEmpleadosUpdate2" >Borrar</button></center>
                        </div>
                        
                   </div></div></form>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        </div>
        </div>
         </div>
        </div>
    </div>
    </body>
    
    <script src="js/EmpleadoCreate.js"></script>
    <script src="js/EmpleadoDelete.js"></script>
    <script src="js/EmpleadoRead.js"></script>
    <script src="js/EmpleadoUpdate.js"></script>
    <script src="js/verificarEmpleadoCreate.js"></script>
    <script src="js/mostrarEmpleado.js"></script>
    <script src="js/selectEmpleados.js"></script>
    <script src="js/verificarEmpleadoUpdate.js"></script>
    <script src="js/selectEmpleados2.js"></script>
</html>