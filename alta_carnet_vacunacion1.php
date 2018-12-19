<?php

include 'conexion.php';
include 'permisos.php';

switch ($Permisos) {
	case 'admin':
$id=$_POST['idmascota'];

try{

//*******************************insertar registro*****************************************
$insertar="INSERT INTO calendariosvacunacion (id_mascotas, enfermedad, vacuna, fecha_vacuna) VALUE (:id, :enfermedad, :vacuna, :fecha)";
  
$resultado=$base-> prepare ($insertar);
$resultado->execute(Array(":id"=>$_POST['idmascota'], ":enfermedad"=>$_POST['enfermedad'], ":vacuna"=>$_POST['vacuna'], ":fecha"=>$_POST['fecha']));



header("Location: ver_carnet_vacunacion.php?f=1&i1=$id ");

}catch(Exception $e)  {

    die("error: " . $e->getMessage());
}  



		break;
	
	
}