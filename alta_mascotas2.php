<?php
$perfil;


include 'conexion.php';
include 'permisos.php';

switch ($Permisos) {
	case 'admin':
	case 'cliente':
	case 'semiAdmin':
	
	
//***********************************insertar registro***********************************************
$insertar="INSERT INTO mascotas (id_cliente, nombre, sexo, raza, color, tipo_demascota, id_tamano, nacimiento) VALUE (:idcli, :nom, :sexo, :raza, :color, :tipo, :idtamano, :naci)";
  
$resultado=$base-> prepare ($insertar);
$resultado->execute(Array(":idcli"=>$_POST['idcliente'], ":nom"=>$_POST['nombre'], ":sexo"=>$_POST['sexo'], ":raza"=>$_POST['raza'], ":color"=>$_POST['color'], ":tipo"=>$_POST['tipo'], ":idtamano"=>$_POST['tamano'], ":naci"=>$_POST['Nacimiento']));


if ($Permisos=="admin"){
header('Location: alta_mascotas.php?f=1');
}else if($Permisos=="cliente"){
header('Location: ver_mascotas_clientes.php?f=1');
}else{


}



	break;
	
	
}

