
<?php 
session_start();
$usuario=$_SESSION['usuario'];

?>
<span class="btn btn-danger " data-toggle="modal" data-target="#modalEliminar"  >
							<span class="fa fa-pencil-square-o"></span>
						</span>
<?php
require_once "PHP/conexion.php";
$obj= new conectar();
$conexion=$obj->conexion();
/* PARA VALE

////////////////////////////////////////////BUSCAR ID DE USUARIO///////////////////////////////////////////////////////////
$sqlBusquedaUsuario="SELECT * FROM usuarios WHERE nombre_de_usuario LIKE '%$usuario%'";
$ResUsuario = mysqli_query($conexion, $sqlBusquedaUsuario);
$idusuario=mysqli_fetch_row($ResUsuario);
$idUser= $idusuario['0'];


////////////////////////////////////////////BUSQUEDA ID CLIENTE///////////////////////////////////////////////////////////
$sqlBusquedaCliente="SELECT id FROM clientes WHERE id_usuario LIKE '%$idUser%'";
$ResCliente = mysqli_query($conexion, $sqlBusquedaCliente);
$idcliente=mysqli_fetch_row($ResCliente);
error_reporting(0);
$idParaTurno=$idcliente['9'];

///////////////////////////////////////////BUSQUEDA DE TURNOS DEL CLIENTE/////////////////////////////////////////////////
$sql="SELECT * FROM turnos_peluqueria WHERE id_clientes LIKE '%$idParaTurno%'";
$result=mysqli_query($conexion,$sql);
?>*/
$sql="SELECT * FROM turnos_peluqueria ";
$result=mysqli_query($conexion,$sql);
?>
<div>
	<table class="table table-hover table-condensed table-bordered" id="iddatatable">
		<thead style="background-color: #dc3545;color: white; font-weight: bold;">
			<tr>
				<td width="10">id</td>
				<td width="100">Fecha</td>
				<td width="100">N° de Turno</td>
				<!--<td width="50">Nuevo Turno</td>
				<td width="50">Eliminar</td>-->
			</tr>
		</thead>
		
		<tbody >
			<?php 
			 $hoy=date('Y-m-d');
			 
			 
		
		///////////////////////////////MOSTRAR LA FECHAS IGUALES O MAYORES A LAS ACTUALES////////////////////////////
			while ($mostrar=mysqli_fetch_row($result)) {
			  if ($mostrar[2]<$hoy){
				
				
			  }else if($mostrar[2]==$hoy){?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
			<?php
		      }else if($mostrar[2]>$hoy){?>
				<tr >
					<td><?php echo $mostrar[0] ?></td>
					<td><?php echo $mostrar[2] ?></td>
					<td><?php echo $mostrar[3] ?></td>
			<?php
		      }
			?>	
<!--////////////////////////////////////////////////////////////////////////////////////////////////////////////////////-->			
				<!--
					<td style="text-align: center;">
						<span class="btn btn-info " data-toggle="modal" data-target="#agregarnuevosdatosmodal"  onclick="cambiarIdClienteEnModal(<?php echo $idParaTurno?>)" >
							<span class="fa fa-plus-circle"></span>
						</span>
					</td>
					

					<td style="text-align: center;">
						<span class="btn btn-danger " data-toggle="modal" data-target="#modalEliminar"  onclick="IdEliminar(<?php echo $mostrar[0]?>)">
							<span class="fa fa-pencil-square-o"></span>
						</span>
					</td>
					
				</tr>-->
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


