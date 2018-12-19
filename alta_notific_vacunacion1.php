<?php
$perfil;


include 'conexion.php';
include 'permisos.php';

switch ($Permisos) {
	case 'admin':
	
	
//***********************************insertar registro***********************************************
$insertar="INSERT INTO notificacionvacunacion (id_clientes, id_mascotas, Farmaco, numero_dosis, fecha_vacuna) VALUE (:idcli, :idmas, :farmaco, :dosis, :fecha)";
  
$resultado=$base-> prepare ($insertar);
$resultado->execute(Array(":idcli"=>$_POST['idcliente'], ":idmas"=>$_POST['idmascota'], ":farmaco"=>$_POST['farmaco'], ":dosis"=>$_POST['dosis'], ":fecha"=>$_POST['fecha']));



header('Location: historia_clinica.php?f=3');


	break;
	
	
}

