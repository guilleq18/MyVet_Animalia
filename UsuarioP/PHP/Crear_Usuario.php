<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php    
$user=$_POST["user"];
$pass=$_POST["pass"];
$perfil=3;

try{

$base=new PDO("mysql:host=localhost; dbname=my_vet_animalia", "root", "");
 

$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

///////////////////////////////////////////////Revisar Coincidencia de Usuario///////////////////////////////////

$base=new PDO("mysql:host=localhost; dbname=my_vet_animalia", "root", "");
 
$base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$sqlidUsuario="SELECT * FROM usuarios WHERE nombre_de_usuario= :usuario ";

$ResUsuario=$base-> prepare ($sqlidUsuario);

$ResUsuario->execute(array(":usuario"=>$user,));

$idUsuario=$ResUsuario->fetch(PDO::FETCH_ASSOC);

if($idUsuario['nombre_de_usuario']==$user){



//header('location: ../Agregar_Usuario.php');
$flag=2;


}else{


///////////////////////////////////////////////Crear Usuario////////////////////////////////////////////////////
$sql="INSERT INTO usuarios (nombre_de_usuario, contrasena, perfil) VALUES (:usuario, :contrasena, :perfil)";

  
$resultado=$base-> prepare ($sql);

$resultado->execute(array(":usuario"=>$user, ":contrasena"=>$pass, ":perfil"=>$perfil ));

echo "Registro Insertado";
$flag=1;

}


}catch(Exception $e)  {

    die("error: " . $e->getMessage());

}  



?>
<?php

if ($flag==1){
?>
<h1>¡USUARIO CARGADO CON EXITO!</h1>

<form method="POST" action="../Agregar_Cliente.php">
      <input type="hidden" name="usuario" id="usuario" value="<?php echo $_POST['user']; ?>">
      <input type="submit" name="Continuar" value="Continuar">


</form>
<?php
}else{
?>
<h1>EL USUARIO YA EXISTE!</h1>
<input type="submit" name="Continuar" value="Continuar" onclick ="location.href='../Agregar_Usuario.php'">
<?php
}
?>


</body>
</html>