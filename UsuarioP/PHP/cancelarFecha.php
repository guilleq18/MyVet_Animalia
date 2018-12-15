<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Page Title</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	

</head>
<body>
<?php 
require_once 'scripts.php';
$base=new PDO("mysql:host=localhost; dbname=my_vet_animalia", "root", "");
 
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$id=$_POST['idClienteNuevaMascota'];
	$nombre=$_POST['nombre'];
	$sexo=	$_POST['sexo'];
	$color=$_POST['color'];
	$tipo=$_POST['tipo'];
	$tamano=$_POST['tamano'];
	

$sql="INSERT INTO mascotas (id_clientes, nombre, sexo, color, tipo, tamano) VALUES (:id, :nombre, :sexo,:color, :tipo, :tamano)";

$resultado=$base-> prepare ($sql);
	
$resultado->execute(array(":id"=>$id, ":nombre"=>$nombre, ":sexo"=>$sexo, ":color"=>$color, ":tipo"=>$tipo, ":tamano"=>$tamano,));
 ?>
 <h1>Mascota Agregada!</h1> 
<input type="submit"  value="Continuar" onclick ="location.href='../index.php'" class="btn btn-primary">

</body>
</html>



