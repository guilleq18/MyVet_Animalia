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
        <strong>Permiso modificado con Exito!!!</strong>  
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
						Tablas dinamicas con datatble y php
					</div>
					<div class="card-body">
						
						<hr>
<!--////////////////////////////////////COMIENZO DATATABLE//////////////////////////////////////////////-->						
						<div>
							<table class="table table-hover table-condensed table-bordered" id="iddatatable">
							<thead style="background-color: #dc3545;color: white; font-weight: bold;">
										<tr>
											<td width="10">id</td>
											<td width="50">DNI</td>
											<td width="100">Nombre</td>
											<td width="100">Permiso</td>
											<td width="10">Modificar</td>
											

				
				
										</tr>
							</thead>
									
							<tbody >
										<?php 
										//****************IMPRIMO CLIENTES************************
										while ($User=$ResUsuarios->fetch()) {
											?>
											<tr >
												<td><?php echo $User['id_clientes'] ?></td>
												<td><?php echo $User['dni'] ?></td>
												<td><?php echo $User['nombre'] ?></td>
										<?php

										//***************BUSCO EL PERMISO DEL USUARIO*************
										$permiso="SELECT * FROM permisos WHERE id_clientes=:id";
										$ResPermiso=$base ->prepare ($permiso);
										$ResPermiso->execute(array(":id"=>$User['id_clientes']));
									    $ResUsuarios->setFetchMode(PDO::FETCH_ASSOC); 

										while ($perm=$ResPermiso->fetch()) {
 										?>

											 <td><?php echo $perm['aplicaciones_cod'] ?></td>

										
							<td style="text-align: center;">
								<span class="btn btn-primary a-btn-slide-text btn-lg  " data-toggle="modal" onclick = "location='editar_permisos.php?i1=<?php echo $User["id_clientes"];?>&i2=<?php echo $perm["id_permisos"];?>'">
									<span class="glyphicon glyphicon-edit"></span>
								</span>
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
