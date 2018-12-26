



<?php

include 'conexion.php';
include 'permisos.php';



switch ($Permisos) {
	case 'admin':

$sql="UPDATE permisos SET id_clientes=:idcli, aplicaciones_cod=:app WHERE id_permisos=:idper";
$Resultado=$base->prepare($sql);
$Resultado->execute(array("idcli"=>$_POST['idcliente'] , "app"=>$_POST['permiso'], "idper"=>$_POST['idpermiso'] ));


header("location: ver_permisos.php?f=1");




		break;
	
}



