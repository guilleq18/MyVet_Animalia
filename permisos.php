<?php

session_start();
error_reporting(0);
$idcliente=$_SESSION["idcliente"];

try{
$sql="SELECT * FROM permisos WHERE id_clientes= :id ";
$resultado=$base-> prepare ($sql);
$resultado->execute(array(":id"=>$idcliente));
$permiso =$resultado->fetch(PDO::FETCH_ASSOC);
 $Permisos=$permiso['aplicaciones_cod'];



}catch(Exception $e)  {
    die("error: " . $e->getMessage());
}  
?>


