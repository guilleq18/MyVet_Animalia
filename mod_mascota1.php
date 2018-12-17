<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'conexion.php';
$idm=$_POST['idm'];
$nombre=$_POST['nombre'];
$sexo=$_POST['sexo'];
$color=$_POST['color'];
$tipo=$_POST['tipo'];
$nacim=$_POST['nacimiento'];
$tamano=$_POST['tamano'];
$idc=$_POST['idcli'];
$raza=$_POST['raza'];













$conexion=mysqli_connect($dbhost, $dbuser, $dbpassword);
//prueba de conexion
if(mysqli_connect_errno()){
    
    echo "fallo en la conexion";
    exit();
    }
//probamos si estamos accediendo a la db correcta 
mysqli_select_db($conexion, $dbname) or die ("No se encuentra la BD");
	
//***********************************MODIFICAR REGISTRO***********************************************
$consulta= "UPDATE mascotas SET id_cliente='$idc', nombre='$nombre', sexo='$sexo', raza='$raza', color='$color', tipo_demascota='$tipo', id_tamano='$tamano', nacimiento='$nacim', where 'mascotas'. 'id_mascotas'='$idm' ";

$resultados=mysqli_query($conexion, $consulta);

if( mysqli_query($conexion, $consulta) ) {
   // ok!
} else {
   echo "Has tenido el siguiente error:<br />".mysqli_error($conexion);
} 


if ($resultados==false) {
	
   echo "error";

}else{

header('Location: ver_mascotas.php?f=2');


}
mysqli_close($conexion);


//*****************************************PDO******************************************************
/*
$sql = "UPDATE mascotas SET id_cliente=:idc, nombre=:nombre, sexo=:sexo, raza=:raza, color=color, tipo_demascota=:tipo, id_tamano=:tamano nacimiento=:nacimiento WHERE idmascotas:=id_mascotas";
$resultado=$base-> prepare ($sql);

$resultado->execute();

$resultado->execute(array("idcli"=>$idc, "nom"=>$nombre, "sexo"=>$sexo, "raza"=>$raza, "color"=>$color, "tipo"=>$tipo, "idta"=>$tamano,"naci"=>$nacim, "idmasc"=>$id ));*/



?>
</body>
</html>
