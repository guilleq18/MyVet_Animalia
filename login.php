<?php
include 'conexion.php';
$pass=$_POST['password'];

try{

$sql="SELECT * FROM clientes WHERE dni= :dni ";
$resultado=$base-> prepare ($sql);
$resultado->execute(array(":dni"=>$_POST["dni"]));


//***********************DETECTAR SI EXISTE EL USUARIO************************************
$numeroRegistro=$resultado->rowCount();

if ($numeroRegistro!=0) {

	
//***********************SI EXISTE REVISA QUE COINCIDAN LAS CONTRASEÑAS*******************	

while($cliente =$resultado->fetch(PDO::FETCH_ASSOC)){
        echo $cliente['password'];
        if (password_verify($pass, $cliente['password'])) {

//**********************SI COINCIDEN NOS LLEVA A LA PAG PCIPAL****************************
            session_start();
            $_SESSION["idcliente"]=$cliente['id_clientes'];
            header("location: index1.php");

//**********************SI NO COINCIDEN DEVUELVE UN ERROR AL INICIO***********************
        }else{

            header("location: index.php?f=2");

        }   
	}
}else{

header("location: index.php?f=2");
    
}  

}catch(Exception $e)  {

    die("error: " . $e->getMessage());

}