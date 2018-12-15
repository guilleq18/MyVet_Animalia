<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php require_once "scripts.php";  
	include 'menu.php'



	?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="card text-left">
					<div class="card-header">
						Clientes
					</div>
					<div class="card-body">
						
						<hr>
						<div id="tablaDatatable"></div>
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
	<div class="modal fade" id="agregarnuevosdatosmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar Mascota</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevo" method="POST" action="procesos/agregar.php">
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


	<!--///////////////////////////////////////// MODAL VER MASCOTAS ////////////////////////////////////////////// -->
	<div class="modal fade" id="modalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Agregar Mascota</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="frmnuevoU" method="POST" action="VerMascotas/index.php">
						<input type="hidden" id="idCliente1" name="idCliente1">
						<h2>Presiones Continuar</h2>
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
        idClienteHidden = $('#idCliente');
		
        idClienteHidden.val(id);
		

		
	}
</script>
<script>
	function VerMascotas(id){
		console.log(id);

        idClienteHidden = $('#idCliente1');
	
     
		idClienteHidden.val(id);
		
	}
</script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#tablaDatatable').load('tabla.php');
	});
</script>

