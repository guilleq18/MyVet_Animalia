<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/estilos.css" />
    <title>Agregar Usuario</title>
</head>
<body>
<?php
/*session_start();
if(!isset($_SESSION["usuario"])){

header("Location:../index.php");

}*/
include 'menu.php';

?>

            <form class="formulario" method="POST" action="PHP/Crear_Usuario.php">
                <input type="text" name="user" id="user" placeholder="Usuario" required >
                <input type="password" name="pass" id="pass" placeholder="Contraseña" required>
                <input type="submit" name="crear" id="crear" value="Registrar">
            </form>






</body>
</html>