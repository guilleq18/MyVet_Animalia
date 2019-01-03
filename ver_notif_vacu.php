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

error_reporting(0);
$f=$_GET['f'];    
$volver=$_GET['v'];
$notivac="SELECT * FROM notificacionvacunacion";
$Resnot=$base ->prepare ($notivac);
$Resnot->execute();
$Resnot->setFetchMode(PDO::FETCH_ASSOC); 

?>
<!--*******************************************ALERTAS********************************************* -->

<?php
if ($f==1) {
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Notificación  Modificada con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
  <?php
}
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
            <?php
            if ($volver==1) { 
              ?>

              <a href="alta_notific_vacunacion.php" class="float-left btn btn-secondary mt-1">Volver</a>
              <?php 

            } else if ($volver==3) { 
              ?>

              <a href="index1.php" class="float-left btn btn-secondary mt-1">Volver</a>
              <?php 
            }
             ?>
            
            
          

          <h4 class="card-title text-center mt-2">Notificación de Vacunación</h4>
          </div>
          <div class="card-body">
            
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #194270;color: white; font-weight: bold;">
                    <tr>
                      
                      <td width="80">Farmaco</td>
                      <td width="11">Número de Dosis</td>
                      <td width="30">Fecha de Aplicación</td>
                      <td width="30">Nombre del cliente</td>
                      <td width="30">Apellido del cliente</td>
                      <td width="30">Modificar</td>
                      <td width="30">Eliminar</td>
                      
        
                    </tr>
              </thead>
                  
              <tbody >
                    <?php 
                    //****************IMPRIMO MASCOTAS************************
                    while ($noti=$Resnot->fetch()) {
                      ?>
                      <tr >
                        <td><?php echo $noti['Farmaco'] ?></td>
                        <td><?php echo $noti['numero_dosis'] ?></td>
                        <td><?php echo $noti['fecha_vacuna'] ?></td>
                        
                       
                        
                        <!--IMPRIMO EL NOMBRE Y APELLIDO DE LA NOTIFICACION -->
                        <?php
                              $usuarios="SELECT * FROM clientes WHERE id_clientes=:id";
                              $ResUsuarios=$base ->prepare ($usuarios);
                              $ResUsuarios->execute(array(':id' =>$noti['id_clientes']  ));
                              $ResUsuarios->setFetchMode(PDO::FETCH_ASSOC);
                              while ($User=$ResUsuarios->fetch() ) {
                              ?>
                              <td><?php echo $User['nombre'] ?></td>
                              <td><?php echo $User['apellido'] ?></td>  
                         
                                                     
                   
                    
              <td style="text-align: center;">
                
                <a href="mod_notific_vacunacion.php?i=<?php echo $noti["id_notificacion"]?>" class=" btn btn-primary mt-1">Modificar</a>
                 
              </td>

              <td style="text-align: center;">
                
                <a href="baja_notif_vacu.php?v=3<?php echo $noti["id_notificacion"]?>" class=" btn btn-primary mt-1">Eliminar</a>
                 
              </td>
              
              
              
           
          
        </tr>
        <?php 
          }
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
