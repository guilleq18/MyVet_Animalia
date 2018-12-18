



<?php

include 'conexion.php';
include 'permisos.php';



switch ($Permisos) {
	case 'admin':

$idm=$_POST['idmascota'];


$sql="UPDATE historiasclinicas SET id_mascotas=:idm, motivode_consulta=:motivo, sena_particulares=:sena, temperatura=:temp, peso=:peso, tratamiento=:trata, diagnostico=:diag, fechade_observacion=:fecha  WHERE id_historiasclinicas=:idh";

$Resultado=$base->prepare($sql);

$Resultado->execute(array("idm"=>$_POST['idmascota'], "motivo"=>$_POST['motivo'], "sena"=>$_POST['sena'], "temp"=>$_POST['temperatura'], "trata"=>$_POST['tratamiento'], "peso"=>$_POST['peso'], "temp"=>$_POST['temperatura'], "diag"=>$_POST['diagnostico'], "fecha"=>$_POST['fecha'], "idh"=>$_POST['idhistoria']));


header("location: ver_historia_clinica.php?i1=$idm&f=1");




	break;
	
}



