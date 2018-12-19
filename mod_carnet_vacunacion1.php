



<?php

include 'conexion.php';
include 'permisos.php';


switch ($Permisos) {
	case 'admin':

$idmascota=$_POST['idmascota'];

$sql="UPDATE calendariosvacunacion SET id_mascotas=:idm, enfermedad=:enfe, vacuna=:vacuna, fecha_vacuna=:fecha WHERE id_calendariosvacunacion=:idcv";
$Resultado=$base->prepare($sql);
$Resultado->execute(array("idm"=>$_POST['idmascota'], "enfe"=>$_POST['enfermedad'] , "vacuna"=>$_POST['vacuna'], "fecha"=>$_POST['fecha'], "idcv"=>$_POST['idcarnetvacuna'] ));


header("location: ver_carnet_vacunacion.php?f=2&i1=$idmascota");




		break;
	
}



