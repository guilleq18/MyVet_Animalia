
<?php   
include 'conexion.php';
$id=$_POST['id'];
echo $id;

$pass1=$_POST['contrasena'];

$pass2=$_POST['contrasena2'];



////////////////////////////////////////////////////////////////////////////////////////////////
                    // LA BD TRAE LOS DATOS DE LA TABLA CLIENTES// 
if (strlen($pass1)<8) {
  header("Location: mod_contrasena.php?f=1");
}else{




//******************************COMPRUEBO SI LAS CONTRASEÑAS INGRESADAS COINCIDEN***********************
if (strcmp($pass1, $pass2) === 0){

			 
      		$passCrypt=password_hash($_POST['contrasena'], PASSWORD_DEFAULT, array("cost"=>12));
      		
      		$sql="UPDATE clientes SET password=:pass WHERE id_clientes=:id";
      		$Resultado=$base->prepare($sql);
      		$Resultado->execute(array("id"=>$id, "pass"=>$passCrypt));
      		header("Location: mod_contrasena.php?f=3");
  
 }else{
  header("Location: mod_contrasena.php?f=2");

}
}




