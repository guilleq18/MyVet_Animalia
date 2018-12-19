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

$mascota="SELECT nombre FROM mascotas where id_mascotas=:id";
$ResMascota=$base ->prepare ($mascota);
$ResMascota->execute(array("id"=>$_GET['i1'] ));
$ResMascota->setFetchMode(PDO::FETCH_ASSOC);
$Masc=$ResMascota->fetch(); 

$historia="SELECT * FROM historiasclinicas where id_mascotas=:id";
$Reshistoria=$base ->prepare ($historia);
$Reshistoria->execute(array("id"=>$_GET['i1'] ));
$Reshistoria->setFetchMode(PDO::FETCH_ASSOC); 


?>
<!--*************************************ALERTAS********************************************* -->


<!--*************************************HISTORIA MODIFICADA************************************* -->

<?php
if ($f==1) {
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Historia Clinica Modificada con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
  <?php
//*************************************HISTORIA ELIMINADA**************************************** -->

}elseif ($f==2) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Historia Clinica Eliminada con Exito!!!</strong>  
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
  <div class="container" style="max-width: 1800px; width: 1400px;">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
          <a href="historia_clinica.php" class="float-left btn btn-secondary mt-1">Volver</a>
          <h4 class="card-title text-center mt-2"> Historial Clinico de: <?php echo $Masc['nombre'] ?></h4>
          </div>
          <div class="card-body">
          
            
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #dc3545;color: white; font-weight: bold;">
                    <tr>
                      
                      
                      <td width="10">Fecha</td>
                      <td width="80">Motivo</td>
                      <td width="80">Señas Particulares</td>
                      <td width="10">Temperatura</td>
                      <td width="10">Peso</td>
                      <td width="200">Diagnostico</td>
                      <td width="100">Tratamiento</td>
                      <td width="10">Modificar</td>
                      
                      
                   
                      
        
                    </tr>
              </thead>
                  
              <tbody >
                    <?php 
                    //****************IMPRIMO CLIENTES************************
                    while ($Hclinicas=$Reshistoria->fetch()) {
                      ?>
                      <tr >
                        <td><?php echo $Hclinicas['fechade_observacion'] ?></td>
                        <td><?php echo $Hclinicas['motivode_consulta'] ?></td>
                        <td><?php echo $Hclinicas['sena_particulares'] ?></td>
                        <td><?php echo $Hclinicas['temperatura'] ?></td>
                        <td><?php echo $Hclinicas['peso'] ?></td>
                        <td><textarea class="form-control" rows="3" name="tratamiento"><?php echo $Hclinicas['diagnostico'] ?></textarea> </td>
                        <td><textarea class="form-control" rows="3" name="tratamiento"><?php echo $Hclinicas['tratamiento']?></textarea></td>
                        
                     <td style="text-align: center;">
                  <a href="mod_historia_clinica.php?i1=<?php echo $Hclinicas['id_historiasclinicas']?>" class="float-right btn btn-primary mt-1">Modificar</a>
                 
                          </td>
                       

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
