<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php"; include 'menu.php'; ?>
</head>
<body>
	<?php
	session_start();
	$usuario=$_SESSION['usuario'];
	?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Turnos de <?php echo $usuario;?>
					</div>
					<div class="card-body">
						
						<hr>
						<div id="tablaDatatable"></div>
					</div>
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

	<!-- ///////////////////////////////MODAL AGREGAR TURNO/////////////////////////////////////////// -->
	<div class="modal fade" id="agregarnuevoTurno" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Cancelar Fecha</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo" method="POST" action="PHP/cancelarFecha.php">
						<input type="hidden" class="form-control input-sm" id="idCliente" name="idCliente">
						<label>Fecha</label>
						<input type="date" class="form-control input-sm" id="fecha" name="fecha">
					
						<input type="submit" value="guardar" class="btn btn-primary">
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				</div>

					</form>
				</div>
				
			</div>
		</div>
	</div>


	<!--///////////////////////////////////////// MODAL ELIMINAR ////////////////////////////////////////////// -->
	<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Eliminar Turno</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmeliminar" method="POST" action="PHP/eliminar.php">
						<input type="hidden" id="idTurno" name="idTurno">
						<label>Fecha</label>
						<input type="date" class="form-control input-sm" id="fecha" name="fecha">
						<input type="submit" class="btn btn-warning" value="Continuar">
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
					
				</div>
			</div>
		</div>
	</div>


</body>
</html>
<script>
	function cambiarIdClienteEnModal(id){
		//console.log(id);
        idClienteHidden = $('#idCliente');
		
        idClienteHidden.val(id);
		

		
	}
</script>
<script>
	function IdEliminar(id_turno){
		

        idTurnoHidden = $('#idTurno');
		
		idTurnoHidden.val(id_turno);
		
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>

