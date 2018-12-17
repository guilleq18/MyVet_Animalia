<?php

include 'conexion.php';
include 'permisos.php';

switch ($Permisos) {
	case 'admin':
		

try{

//*******************************insertar registro*****************************************
$insertar="INSERT INTO historiasclinicas (id_mascotas, motivode_consulta, sena_particulares, temperatura, peso, tratamiento, diagnostico, fechade_observacion) VALUE (:idm, :motivo, :sena, :temp, :peso, :tratamiento, :diag, :fecha)";
  
$resultado=$base-> prepare ($insertar);
$resultado->execute(Array(":idm"=>$_POST['idmascota'], ":motivo"=>$_POST['motivo'], ":sena"=>$_POST['sena'], ":temp"=>$_POST['temperatura'], ":peso"=>$_POST['peso'], ":tratamiento"=>$_POST['tratamiento'], ":diag"=>$_POST['diagnostico'], ":fecha"=>$_POST['fecha']));



header('Location: historia_clinica.php?f=1');

}catch(Exception $e)  {

    die("error: " . $e->getMessage());
}  



		break;
	
	
}