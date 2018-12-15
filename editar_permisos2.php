



<?php

include 'conexion.php';
include 'permisos.php';

$idCliente=$_POST['idcliente'];
$idPermiso=$_POST['idpermiso'];
$perm=$_POST['permiso'];

switch ($Permisos) {
	case 'admin':
?>
<label><?php echo $_POST['idcliente']; ?></label> 
<label>hola</label>
echo $idPermiso;

echo $perm;
<?php
$sql="UPDATE permisos SET id_clientes=:idcli, aplicaciones_cod=:app WHERE id_permisos=:idper";
$Resultado=$base->prepare($sql);
$Resultado->execute(array("idcli"=>$idCliente, "app"=>$perm, "idper"=>$idPermiso));


header("location: ver_permisos.php?f=1");




		break;
	
}



