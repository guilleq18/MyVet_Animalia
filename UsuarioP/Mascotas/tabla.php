
<?php 

require_once "procesos/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();

$sql="SELECT * FROM clientes";
$result=mysqli_query($conexion,$sql);
?>


<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td width="10">id</td>
				<td width="100">Nombre</td>
				<td width="100">Apellido</td>
				<td width="100">Telefono</td>
				<td width="150">E-mail</td>
				<td width="50">Agregar Mascota</td>

				<td width="50">Buscar</td>
				
			</tr>
		</thead>
		
		<tbody >
			<?php 
			while ($mostrar=mysqli_fetch_row($result)) {
				?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[1] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[5] ?></td>
					<td><?php echo $mostrar[7] ?></td>
				
					<td style="text-align: center;">
						<span class="btn btn-info " data-toggle="modal" data-target="#agregarnuevosdatosmodal"  onclick="cambiarIdClienteEnModal(<?php echo $mostrar[0]?>)" >
							<span class="fa fa-plus-circle"></span>
						</span>
					</td>
					
					<td style="text-align: center;">
						<span class="btn btn-warning " data-toggle="modal" data-target="#modalEditar"  onclick="VerMascotas(<?php echo $mostrar[0]?>)">
							<span class="fa fa-search "></span>
						</span>
					</td>
					
				</tr>
				<?php 
			}
			?>
		</tbody>
	</table>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#iddatatable').DataTable();
		
	} );
</script>

<!-- /////////////////////////////////////////////////////////////////////////////////////////////////-->


