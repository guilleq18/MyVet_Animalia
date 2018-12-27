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

$masco="SELECT * FROM mascotas WHERE id_cliente=:id";
$ResMascotas=$base ->prepare ($masco);
$ResMascotas->execute(array("id"=>$id ));
$ResMascotas->setFetchMode(PDO::FETCH_ASSOC); 

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
}else{
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
            <a href="alta_mascotas1.php?i1=<?php echo $id ?>" class="float-right btn btn-primary mt-1">Agregar Mascota</a>

          <h4 class="card-title text-center mt-2">Listado de Mascotas</h4>
          </div>
          <div class="card-body">
            
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #194270;color: white; font-weight: bold;">
                    <tr>
                      
                      <td width="80">Nombre</td>
                      <td width="11">Sexo</td>
                      <td width="30">Tipo</td>
                      <td width="80">Raza</td>
                      <td width="10">Color</td>
                      <td width="10">Tamaño</td>
                      <td width="10">Edad</td>
                      <td width="10">Modificar</td>
                      
        
                    </tr>
              </thead>
                  
              <tbody >
                    <?php 
                    //****************IMPRIMO MASCOTAS************************
                    while ($Masc=$ResMascotas->fetch()) {
                      ?>
                      <tr >
                        <td><?php echo $Masc['nombre'] ?></td>
                        <td><?php echo $Masc['sexo'] ?></td>
                        <td><?php echo $Masc['tipo_demascota'] ?></td>
                        <td><?php echo $Masc['raza'] ?></td>
                        <td><?php echo $Masc['color'] ?></td>
                        <td><?php if ($Masc['id_tamano'] ==1) {
                                  echo "Micro"; 
                                 }elseif ($Masc['id_tamano'] ==2) {
                                   echo "Pequeño";
                                 }elseif ($Masc['id_tamano'] ==3) {
                                   echo "Mediano";
                                 }elseif ($Masc['id_tamano'] ==4) {
                                   echo "Grande";
                                 }?></td>
                        <?php
                        //calculo la edad con respecto al año actual y de nacimiento
                        $hoy = date("Y");
                        $anio = date("Y", strtotime($Masc['nacimiento']));
                        $annos =$hoy-$anio;
                        ?> 
                        <td><?php  echo $annos ?></td>
                        
                         
                                                     
                   
                    
              <td style="text-align: center;">
                
                <a href="mod_mascota.php?i1=<?php echo $Masc["id_mascotas"]?>" class=" btn btn-primary mt-1">Modificar</a>
                 
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
