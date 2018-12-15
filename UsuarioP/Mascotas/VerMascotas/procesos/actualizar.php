<?php 

$id=$_POST["idMascota"];
$idCliente=$_POST["idCliente"];
$nombre=$_POST["nombre"];
$sexo=$_POST["sexo"];
$color=$_POST['color'];
$tio=$_POST["tipo"];
$tamano=$_POST["tamano"];


$base=new PDO("mysql:host=localhost; dbname=my_vet_animalia", "root", "");
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sql="UPDATE mascotas SET id_clientes=:idCliente, nombre=:nom, sexo=:sexo, color=:color, tipo=:tipo, tamano=:tamano, WHERE id=:id";

$Resultado=$base->prepare($sql);

$Resultado->execute(array("idCliente"=>$idCliente, "nom"=>$nombre, "color"=>$color, "tipo"=>$tipo, "tamano"=>$tamano, "id"=>$id ));

if($Resultado){

echo "Dato Actualizado";
header("Location:../index.php");


}else{
echo "ERROR, Dato no Actualizado";

}





 ?>