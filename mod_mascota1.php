<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'conexion.php';
include 'permisos.php';

switch ($Permisos) {
	case 'admin':
		



$idm=$_POST['idm'];
$nombre=$_POST['nombre'];
$sexo=$_POST['sexo'];
$color=$_POST['color'];
$tipo=$_POST['tipo'];
$nacim=$_POST['nacimiento'];
$tamano=$_POST['tamano'];
$idc=$_POST['idcli'];
$raza=$_POST['raza'];




$sql = "UPDATE mascotas SET id_cliente=:idc, nombre=:nombre, sexo=:sexo, raza=:raza, color=:color, tipo_demascota=:tipo, id_tamano=:tamano, nacimiento=:nacimiento WHERE id_mascotas=:idmascotas";
$resultado=$base-> prepare ($sql);

$resultado->execute(array("idc"=>$idc, "nombre"=>$nombre, "sexo"=>$sexo, "raza"=>$raza, "color"=>$color, "tipo"=>$tipo, "tamano"=>$tamano,"nacimiento"=>$nacim, "idmascotas"=>$idm));




header('Location: ver_mascotas.php?f=2');






//*****************************************PDO******************************************************

break;
	
	
}




?>
</body>
</html>
