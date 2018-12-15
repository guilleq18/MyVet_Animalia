<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";
	include 'menu.php';
	$idCli=$_POST['idCliente1'];?>
<?php 

require_once "procesos/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT * FROM mascotas WHERE id_clientes=$idCli";
$result=mysqli_query($conexion,$sql);
?>

</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Tablas dinamicas con datatble y php
					</div>
					<div class="card-body">
						
						<hr>
<!--///////////////////////////////////////////////////COMIENZO DATATABLE//////////////////////////////////////////////-->						
						<div>
							<table class="table table-hover table-condensed table-bordered" id="iddatatable">
							<thead style="background-color: #dc3545;color: white; font-weight: bold;">
										<tr>
											<td width="10">id</td>
											<td width="100">Nombre</td>
											<td width="100">Sexo</td>
											<td width="100">Color</td>
											<td width="150">Raza</td>
											<td width="50">Tamaño</td>
											<td width="50">Editar</td>

				
				
										</tr>
							</thead>
									
							<tbody >
										<?php 
										while ($mostrar=mysqli_fetch_row($result)) {
											?>
											<tr >
												<td><?php echo $mostrar[0] ?></td>
												<td><?php echo $mostrar[2] ?></td>
												<td><?php echo $mostrar[3] ?></td>
												<td><?php echo $mostrar[4] ?></td>
												<td><?php echo $mostrar[5] ?></td>
												<td><?php echo $mostrar[6] ?></td>


							<td style="text-align: center;">
								<span class="btn btn-warning " data-toggle="modal" data-target="#EditarMascota"  onclick="idMascotaModal(<?php echo $mostrar[0].','. $mostrar[1]?>)" >
									<span class="fa fa-pencil-square-o"></span>
								</span>
							</td>
							
					
					
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>
<!--////////////////////////////////////////////////////FIN DATATABLE/////////////////////////////////////////////////////////-->
					<div class="card-footer text-muted">
						
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
	} );
</script>

	<!-- ///////////////////////////////MODAL AGREGAR MASCOTA/////////////////////////////////////////// -->
	<div class="modal fade" id="EditarMascota" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Editar Mascota</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo" method="POST" action="procesos/actualizar.php">
						<input type="hidden" class="form-control input-sm" id="idMascota" name="idMascota">
						<input type="hidden" class="form-control input-sm" id="idCliente" name="idCliente">
						<label>Nombre</label>
						<input type="text" class="form-control input-sm" id="nombre" name="nombre">
						<label>Sexo</label>
						<input type="text" class="form-control input-sm" id="sexo" name="sexo">
						<label>Color</label>
						<input type="text" class="form-control input-sm" id="color" name="color">
						<label>Tipo</label>
						<input type="text" class="form-control input-sm" id="tipo" name="tipo">
						<label>Tamaño</label>
						<input type="text" class="form-control input-sm" id="tamano" name="tamano">
						<input type="submit" value="guardar" class="btn btn-primary">
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>

</body>
</html>

<script>
	function idMascotaModal(idMascota, idCliente ){
		
        idMascotaHidden = $('#idMascota');
		idClienteHidden = $('#idCliente');

        idClienteHidden.val(idCliente);
		idMascotaHidden.val(idMascota)

		
	}
</script>



<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
		
	} );
</script>
