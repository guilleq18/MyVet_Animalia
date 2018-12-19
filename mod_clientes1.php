<?php

include 'conexion.php';
include 'permisos.php';


switch ($Permisos) {
	case 'admin':



$sql="UPDATE clientes SET dni=:dni, nombre=:nombre, apellido=:enfe, fechadenacimiento=:fecha, telefono=:telefono, direccion=:direccion, email=:email WHERE id_clientes=:idclientev";
$Resultado=$base->prepare($sql);
$Resultado->execute(array("dni"=>$_POST['dni'], "nombre"=>$_POST['enfermedad'] , "vacuna"=>$_POST['vacuna'], "fecha"=>$_POST['fecha'], "idcv"=>$_POST['idcarnetvacuna'] ));


header("location: ver_carnet_vacunacion.php?f=2&i1=$idmascota");




		break;
	
}



