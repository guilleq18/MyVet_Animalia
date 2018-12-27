<?php

include 'conexion.php';
include 'permisos.php';


switch ($Permisos) {
	case 'cliente':



$sql="UPDATE clientes SET dni=:dni, nombre=:nombre, apellido=:ape, fechadenacimiento=:fecha, telefono=:telefono, direccion=:direccion, email=:email WHERE id_clientes=:idclientev";
$Resultado=$base->prepare($sql);
$Resultado->execute(array("dni"=>$_POST['dni'], "nombre"=>$_POST['nombre'] , "ape"=>$_POST['apellido'], "fecha"=>$_POST['Naci'], "telefono"=>$_POST['telef'], "direccion"=>$_POST['direcc'], "email"=>$_POST['email'], "idclientev"=>$_POST['id'] ));


header("location: mod_clientes.php?f=1");




		break;
	
}



