 



<?php

include 'conexion.php';
include 'permisos.php';



switch ($Permisos) {
	case 'admin':

$idm=$_POST['idmascota'];


$sql="DELETE FROM historiasclinicas WHERE id_historiasclinicas=:idh";

$Resultado=$base->prepare($sql);

$Resultado->execute(array("idh"=>$_POST['idhistoria']));


header("location: ver_historia_clinica.php?i1=$idm &f=2");




	break;
	
}



