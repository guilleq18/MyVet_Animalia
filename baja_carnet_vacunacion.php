 



<?php

include 'conexion.php';
include 'permisos.php';



switch ($Permisos) {
	case 'admin':

$idm=$_GET['idm'];


$sql="DELETE FROM calendariosvacunacion WHERE id_calendariosvacunacion=:idh";

$Resultado=$base->prepare($sql);

$Resultado->execute(array("idh"=>$_GET['i1']));


header("location: ver_historia_clinica.php?i1=$idm &f=3");




	break;
	
}



