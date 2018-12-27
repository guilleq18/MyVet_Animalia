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
  case 'cliente':

error_reporting(0);
$f=$_GET['f'];
$id=$_SESSION['idcliente'];    

$turn="SELECT * FROM turnospeluqueria WHERE id_clientes=:id";
$ResTurno=$base ->prepare ($turn);
$ResTurno->execute(array("id"=>$id ));
$ResTurno->setFetchMode(PDO::FETCH_ASSOC); 

?>
<!--*******************************************ALERTAS********************************************* -->

<?php
if ($f==2) {
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Mascota Modificada con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
  <?php
}else if ($f==1){
  ?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Mascota Agregada con Exito!!!</strong>  
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
            <a href="index1.php" class="float-left btn btn-secondary mt-1">Volver</a>
            <a href="alta_turno_peluqueria.php" class="float-right btn btn-primary mt-1">Agregar Turno</a>

          <h4 class="card-title text-center mt-2">Listado de Mascotas</h4>
          </div>
          <div class="card-body">
            
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #194270;color: white; font-weight: bold;">
                    <tr>
                      
                      <td width="20">Fecha del Turno</td>
                      <td width="11">Numero del Turno</td>
                      <td width="30">Tamaño de Mascota</td>
                      <td width="20">Eliminar</td>
                
        
                    </tr>
              </thead>
                  
              <tbody >
                    <?php 
                    //****************IMPRIMO MASCOTAS************************
                    while ($Turno=$ResTurno->fetch()) {
                      ?>
                      <tr >
                        <td style="font-size: 18px"><?php echo $Turno['fecha'] ?></td>
                        <td style="font-size: 18px"><?php echo $Turno['turno'] ?></td>
                        <td style="font-size: 18px"><?php if ($Turno['id_tamano'] ==1) {
                                  echo "Micro"; 
                                 }elseif ($Turno['id_tamano'] ==2) {
                                   echo "Pequeño";
                                 }elseif ($Turno['id_tamano'] ==3) {
                                   echo "Mediano";
                                 }elseif ($Turno['id_tamano'] ==4) {
                                   echo "Grande";
                                 }?></td>
                       
                                                     
                   
                    
              <td style="text-align: center;">
                
                <a href="baja_turno_peluqueria.php?i1=<?php echo $Turno["id_turnospeluqueria"]?>" class=" btn btn-danger mt-1">Eliminar</a>
                 
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
