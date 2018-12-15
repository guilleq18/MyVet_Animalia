<?php 
$fecha=$_POST['fecha'];
$id=1;
$turno=5;

$base=new PDO("mysql:host=localhost; dbname=my_vet_animalia", "root", "");
 
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="INSERT INTO turnos_peluqueria (id_clientes, fecha, Turno) VALUE (:id, :fecha, :Turno) ";

$Resultado=$base-> prepare ($sql);

$Resultado->execute(array(":id"=>$id, ":fecha"=>$fecha, ":Turno"=>$turno));

header('Location: ../VistaTurnos.php');


 ?>