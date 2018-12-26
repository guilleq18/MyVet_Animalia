<!DOCTYPE html>
<html>
<head>

  <link rel="stylesheet" type="text/css" href="estilos.css">

  <title></title>
<?php 
require "scripts.php";
include 'menu.php';
include "conexion.php";
include "permisos.php";

switch ($Permisos) {
  case 'admin':

  

$client="SELECT * FROM clientes";
$ResCliente=$base ->prepare ($client);
$ResCliente->execute();
$ResCliente->setFetchMode(PDO::FETCH_ASSOC); 

?>

<!--************************************************************************************************* -->
</head>
<body>
  <br>
  <div class="container" style="max-width: 1800px; width: 1400px;>
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
           <a href="alta_clientes_admin.php" class="float-right btn btn-primary mt-1">Agregar Cliente</a>
           <h4 class="card-title text-center mt-2"> Listado de Clientes en el Sistema</h4>
          </div>
          </div>
          <div class="card-body">
            
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered dt-responsive" id="iddatatable">
              <thead style="background-color: #194270;color: white; font-weight: bold;">
                    <tr>
                      
                      
                      <td width="10">DNI</td>
                      <td width="80">Nombre</td>
                      <td width="80">Apellido</td>
                      <td width="10">Fecha de Nacimiento</td>
                      <td width="10">teléfono</td>
                      <td width="10">Dirección</td>
                      <td width="50">E-Mail</td>
                      
        
                    </tr>
              </thead>
                  
              <tbody >
                    <?php 
                    //****************IMPRIMO CLIENTES************************
                    while ($clien=$ResCliente->fetch()) {
                      ?>
                      <tr >
                        <td><?php echo $clien['dni'] ?></td>
                        <td><?php echo $clien['nombre'] ?></td>
                        <td><?php echo $clien['apellido'] ?></td>
                        <td><?php echo $clien['fechadenacimiento'] ?></td>
                        <td><?php echo $clien['telefono'] ?></td>
                        <td><?php echo $clien['direccion'] ?></td>
                        <td><?php echo $clien['email'] ?></td>
                     
                     

   
          
          
          
          
        </tr>
        <?php 
      }
      ?>
   </tbody>
   
  </table>
</div>


<!--***************************************FUNCIÓN PARA BUSCAR************************************** -->
<script type="text/javascript">
  $(document).ready(function() {
    $('#iddatatable').DataTable();
          
     } );
$(document).ready(function(){
    $('#tablaDatatable').load('tabla.php');
  });


</script>

  


  







<?php
break;
}
?>
