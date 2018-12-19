<!DOCTYPE html>
<html>
<head>

  <title></title>
<?php 

include 'menu.php';
include "conexion.php";
require "scripts.php";
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

$vacuna="SELECT * FROM calendariosvacunacion where id_mascotas=:id";
$Resvacuna=$base ->prepare ($vacuna);
$Resvacuna->execute(array("id"=>$_GET['i1'] ));
$Resvacuna->setFetchMode(PDO::FETCH_ASSOC); 


?>
<!--*************************************ALERTAS********************************************* -->


<!--*************************************REGISTRO AGREGADO************************************* -->

<?php
if ($f==1) {
  ?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro de Vacuna Agregado con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
  <?php
//*************************************REGISTRO MODIFICADO**************************************** -->

}elseif ($f==2) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro de Vacuna Modificado con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
  <?php


//**********************************REGISTRO ELIMINADO************************************ -->
}elseif ($f==3) {
?>
  <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Registro de Vacuna Eliminado con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
  <?php
}
?>

</head>
<body>
  <br>
  <div class="container" style="max-width: 1800px; width: 1400px;">
    <div class="row">
      <div class="col-sm-12">

        <div class="card text-left">

          <div class="card-header">
            <a href="historia_clinica.php" class="float-left btn btn-secondary mt-1">Volver</a>
            <a href="ver_carnet_vacunacion.php?i1=<?php echo $_GET['i1'] ?>" class="float-right btn btn-primary mt-1">Agregar</a>
          <h4 class="card-title text-center mt-2"> Historial de Vacunación de: <?php echo $Masc['nombre'] ?></h4>

           
          </div>
          
          <div class="card-body">
            
              
           <div class="col-sm-6">
              
          </div>
            
          

             
          
            <hr>

<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #dc3545;color: white; font-weight: bold;">
                    <tr>
                      
                      
                      <td width="10">Fecha</td>
                      <td width="80">Enfermedad</td>
                      <td width="80">Farmaco Aplicado</td>
                      <td width="10">Modificar</td>
                      
                      
                   
                      
        
                    </tr>
              </thead>
                  
              <tbody >
                    <?php 
                    //****************IMPRIMO CLIENTES************************
                    while ($HVacuna=$Resvacuna->fetch()) {
                      ?>
                      <tr>
                        <td><?php echo $HVacuna['fecha_vacuna'] ?></td>
                        <td><?php echo $HVacuna['enfermedad'] ?></td>
                        <td><?php echo $HVacuna['vacuna'] ?></td>
                        
                        
                        
                     <td style="text-align: center;">

                  <a href="mod_carnet_vacunacion.php?i1=<?php echo $HVacuna["id_calendariosvacunacion"];?>" class=" btn btn-primary mt-1">Modificar</a>
                 
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
