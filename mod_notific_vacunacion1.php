



<?php

include 'conexion.php';
include 'permisos.php';


switch ($Permisos) {
	case 'admin':



$sql="UPDATE notificacionvacunacion SET id_clientes=:idc, id_mascotas=:idm, Farmaco=:farmaco, numero_dosis=:dosis, fecha_vacuna=:fecha WHERE id_notificacion =:id";
$Resultado=$base->prepare($sql);
$Resultado->execute(array("idc"=>$_POST['idcliente'],"idm"=>$_POST['idmascota'], "farmaco"=>$_POST['farmaco'] , "dosis"=>$_POST['dosis'], "fecha"=>$_POST['fecha'], "id"=>$_POST['idnotificacion'] ));


header("location: ver_notif_vacu.php?f=1");




		break;
	
}



