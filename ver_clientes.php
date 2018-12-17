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

$clien="SELECT * FROM clientes";
$ResCliente=$base ->prepare ($clien);
$ResCliente->execute();
$ResCliente->setFetchMode(PDO::FETCH_ASSOC); 

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
           Mascotas
          </div>
          <div class="card-body">
            
            <hr>
<!--////////////////////////////////COMIENZO DATATABLE///////////////////////////////////////////-->        
            <div>
              <table class="table table-hover table-condensed table-bordered" id="iddatatable">
              <thead style="background-color: #dc3545;color: white; font-weight: bold;">
                    <tr>
                      
                      <td width="80">Nombre</td>
                      <td width="11">DNI</td>
                      <td width="30">Nombre</td>
                      <td width="80">Apellido</td>
                      <td width="10">Fecha de Nacimiento</td>
                      <td width="10">teléfono</td>
                      <td width="10">Dirección</td>
                      <td width="100">E-Mail</td>
                      <td width="10">Modificar</td>
        
        
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
                        
                       
                                                     
                   
                    
              <td style="text-align: center;">
                
                 <span style="font-size: 12px" class="btn btn-primary a-btn-slide-text btn-lg  " data-toggle="modal" onclick = "location='mod_clientes.php?i1=<?php echo $clien["id_clientes"]?>'">Modificar
                  <span class="glyphicon glyphicon-edit"></span>
                </span>
                </span>
          </td>
              </td>
              
           
          
        </tr>
        <?php 
        
        }
      ?>
    </tbody>
   
  </table>
</div>



<!-- ///////////////////////////////MODAL AGREGAR TURNO/////////////////////////////////////////// -->
  <div class="modal fade" id="modalMascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Agregar Mascota</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form id="frmnuevo" method="POST" action="alta_mascotas1.php">
            <input type="text" class="form-control input-sm" id="idmascota" name="idmascota" required>
            <label>Nombre</label>
            <input type="text" class="form-control input-sm" id="nombre" name="nombre" required>
            <label>Sexo</label>
              <select class="custom-select" name="sexo" id="sexo" required>
                  <option selected>Seleccionar Sexo</option>
                  <option  value="macho">Macho</option>
                  <option  value="hembra">Hembra</option>
            </select>
            <label>Tipo</label>
            <input type="text" class="form-control input-sm" id="tipo" name="tipo" required>
            <label>Raza</label>
            <input type="text" class="form-control input-sm" id="raza" name="raza" required>
            <label>Color</label>
            <input type="text" class="form-control input-sm" id="color" name="color" required>
            <label>Fecha de Nacimiento</label>
            <input type="date" class="form-control input-sm" id="Nacimiento" name="Nacimiento" required>
            <label>Tamaño</label>
              <select class="custom-select" name="tamano" id="tamano" required>
                  <option selected>Seleccione el tamaño</option>
                  <option  value="1">Micro</option>
                  <option  value="2">Pequeño</option>
                  <option  value="3">Mediano</option>
                  <option  value="4">Grande</option>
            </select>
    
        <div class="modal-footer">
          <input type="submit" value="guardar" class="btn btn-primary">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
          
        </div>

          </form>
        </div>
        
      </div>
    </div>
  </div>
<!--***********************************FUNCION PARA LLEVAR ID CLIENTE*************************** -->
<script>
  function mascotaModificar(id, nom, sexo, tipo, raza, color, tamano, nacimiento){
    /*console.log(color);
        idMascotaHidden = $('#idmascota');
        Nombre = $('#nombre');
        sexo = $('#sexo');
        tipo = $('#tipo');
        raza = $('#raza');
        color = $('#color');
        tamano = $('#tamano');
        nacimiento = $('#Nacimiento');

    
        idMascotaHidden.val(id);
        Nombre.val(nom);
        sexo.val(sexo);
        tipo.val(tipo);
        raza.val(raza);
        color.val(color);
        tamano.val(tamano);
        nacimiento.val(nacimiento);*/
  }
</script>

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
