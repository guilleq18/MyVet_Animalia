<?php
$perfil;
include 'conexion.php';
$flag=0;
$dni=$_POST['dni'];
$contrasena=$_POST['pass'];
$contrasena2=$_POST['pass2'];
//*****************************************VALIDAR ESCRITURA DE EMAIL**************************************************
function validarEmail($email)
{
    return (filter_var($email, FILTER_VALIDATE_EMAIL)) ? 1 : 0;
}
if (validarEmail($_POST['email'])){
    
 
//*************************SI EL EMAIL ES VALIDO REALIZA LAS DEMAS COMPROBACIONES*****************************


//******************************COMPRUEBO SI EL USUARIO YA EXISTE***************************************

$sql="SELECT * FROM clientes";
$ResUsuarios=$base ->prepare ($sql);
$ResUsuarios->execute();
$ResUsuarios->setFetchMode(PDO::FETCH_ASSOC); 
while ($User=$ResUsuarios->fetch()) {
	$dni2=$User['dni'];
	echo $dni2;
	if (strcmp($dni, $dni2) === 0) {
	
		header("location: alta_clientes.php?f=2");
		++$flag;
	}else if(strcmp($contrasena, $contrasena2) !== 0){
		
	}
}

//*******************************COMPRUEBO SI EL E-MAIL ESTA ESCRITO BIEN*******************************

//*******************************COMPRUEBO SI LA CONTRASEÑA TIENE < DE 8 CARACTERES*********************
		
	if ($flag==0) {
		
	
		if (strlen($contrasena)<8) {
		header("Location: alta_clientes.php?f=3");
		}else{

				//********************COMPRUEBO SI LAS CONTRASEÑAS INGRESADAS COINCIDEN************
			if (strcmp($contrasena, $contrasena2) === 0){

			$passCrypt=password_hash($contrasena, PASSWORD_DEFAULT, array("cost"=>12));

				//************************insertar registro************************************
			$insertar="INSERT INTO clientes (dni, password, nombre, apellido, fechadenacimiento, telefono, direccion, email) VALUE (:dni, :pass, :nom, :ape, :fecha, :telefono, :direcc, :email)";
  
			$resultado=$base-> prepare ($insertar);
			$resultado->execute(Array(":dni"=>$_POST['dni'], ":pass"=>$passCrypt, ":nom"=>$_POST['nombre'], ":ape"=>$_POST['apellido'], ":fecha"=>$_POST['Naci'], ":telefono"=>$_POST['telef'], ":direcc"=>$_POST['direcc'], ":email"=>$_POST['email']));


			//*************************buscar id del registro insertado***************************
			$idRregistro="SELECT * FROM clientes WHERE dni=:dni";
			$resRegistro=$base-> prepare ($idRregistro);
			$resRegistro->execute(array(':dni' =>$_POST['dni']  ));
			$idCliente=$resRegistro->fetch(PDO::FETCH_ASSOC);

			//**********************ESTABLECER PERMISO CLIENTE*******************************
			$aplicaciones="cliente";
			$permisos="INSERT INTO permisos (id_clientes, aplicaciones_cod) VALUE (:id, :app)";
			$resPermisos=$base-> prepare ($permisos);
			$resPermisos->execute(array(":id"=>$idCliente['id_clientes'], ":app"=>$aplicaciones));

			header('Location: index.php?f=1');


    
			}else{
				header("Location: alta_clientes.php?f=4");

			}
		}
}else{
			header("location: alta_clientes.php?f=2");
		}









//*****************************SI EL E-MAIL ES INVALIDO ENVIO UN MSJ DE ERROR**********************************
} 
else 
{
   header("location: alta_clientes.php?f=5");
}



