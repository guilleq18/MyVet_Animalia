<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" media="screen" href="CSS/jquery-ui.min.css" />
    <title>Document</title>
</head>
<body>
<?php
/*session_start();

if(!isset($_SESSION["usuario"])){

header("Location:../index.php");

}*/
include 'menu.php';


   

?>
  <div class="formulario">
         <form class="formulario" method="POST" action="PHP/Crear_Cliente.php">
                <input type="text" name="nombre" id="nombre" placeholder="Nombre" >
                <input type="text" name="apellido" id="apellido" placeholder="Apellido" >
                <input type="hidden" name="usuario" id="usuario" value="<?php echo $_POST['usuario']; ?>">
                <input type="text" class="datepicker" id="datepicker" name="datepicker" placeholder="Fecha de Nacimiento">
                <input type="text" name="telefono" id="telefono" placeholder="Telefono" >
                <input type="text" name="direccion" id="direccion" placeholder="Direccion" >
                <input type="email" name="email" id="email" placeholder="E-Mail">


                <input type="submit" name="crear" id="crear" value="Registrar">
                
        </form>
    </div>

     <script src="Js/jquery.js"></script>
     <script src="Js/jquery-ui.min.js"></script>
     <script src="Js/datepicker-es.js"></script>
     <script>$("#datepicker"). datepicker($.datepicker.regional["es"]);</script>
</body>
</html> 