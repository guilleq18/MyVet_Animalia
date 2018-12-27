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
    
$usuarios="SELECT * FROM clientes";
$ResUsuarios=$base ->prepare ($usuarios);
$ResUsuarios->execute();
$ResUsuarios->setFetchMode(PDO::FETCH_ASSOC); 
?>
<!--*******************************************ALERTAS********************************************* -->
<?php
if ($f==1) {
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
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="card text-left">
          <div class="card-header">
            <a href="ver_mascotas.php" class="float-right btn btn-primary mt-1">Ver Mascotas</a>
            <h4 class="card-title text-center mt-2">Agregar Mascotas</h4>
          </div>
          <div class="card-body">
            <h6 class="card-title text-center mt-2">Seleccionar Cliente Para Asignarle una Mascota</h6>
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #194270;color: white; font-weight: bold;">
                    <tr>
                      
                      <td width="50">DNI</td>
                      <td width="100">Nombre</td>
                      <td width="100">Apellido</td>
                      <td width="10">E-mail</td>
                      <td width="100">Agregar Mascota</td>
                      

        
        
                    </tr>
              </thead>
                  
              <tbody >
                    <?php 
                    //****************IMPRIMO CLIENTES************************
                    while ($User=$ResUsuarios->fetch()) {
                      ?>
                      <tr >
                        <td><?php echo $User['dni'] ?></td>
                        <td><?php echo $User['nombre'] ?></td>
                        <td><?php echo $User['apellido'] ?></td>
                        <td><?php echo $User['email'] ?></td>
                   
                    
           
                  
                    <td style="text-align: center;">
                
                        <a href="alta_mascotas1.php?i1=<?php echo  $User['id_clientes']?>" class=" btn btn-primary mt-1">Agregar</a>
                 
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
