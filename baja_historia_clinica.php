 



<?php

include 'conexion.php';
include 'permisos.php';

switch ($Permisos) {
	case 'admin':
		
$idh=$_GET['i1'];
$idm=$_GET['idm'];

echo $idh;

$sql="DELETE FROM historiasclinicas WHERE id_historiasclinicas=:idh";

$Resultado=$base->prepare($sql);

$Resultado->execute(array("idh"=>$idh));


header("location: ver_historia_clinica.php?i1=$idm &f=2");


		break;
}



