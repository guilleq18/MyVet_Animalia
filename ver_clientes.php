<!DOCTYPE html>
<html>
<head>

  <title></title>
<?php 
require "scripts.php";
include 'menu.php';
include "conexion.php";
include "permisos.php";

switch ($Permisos) {
  case 'admin':

  

$clien="SELECT * FROM clientes";
$ResCliente=$base ->prepare ($clien);
$ResCliente->execute();
$ResCliente->setFetchMode(PDO::FETCH_ASSOC); 

?>

<!--************************************************************************************************* -->
</head>
<body>
  <br>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
           Clientes
          </div>
          <div class="card-body">
            
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #dc3545;color: white; font-weight: bold;">
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
</script>
<script type="text/javascript">
  $(document).ready(function(){
    $('#tablaDatatable').load('tabla.php');
  });
</script>



<?php
break;
}
?>
