<style>


</style>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';

switch ($Permisos) {
	case "cliente":
?>


<img style="width: 88%;" src="librerias/Img/animalia.jpeg" class="rounded mx-auto d-block" alt="Responsive image">




<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Veterinaria Animalia</h3>
<p class="h5 text-white">Contacto: 3804-3656416   <br><br> Av. Rivadavia N° 542 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>

<?php

break;
    case "semiAdmin":
?>
<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Veterinaria Animalia</h3>
<p class="h5 text-white">Contacto: 3804-3656416 <br><br> Av. Rivadavia N° 542 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>
<?php
break;

    case "admin":
?>
<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Veterinaria Animalia</h3>
<p class="h5 text-white">Contacto: 3804-3656416   <br><br> Av. Rivadavia N° 542 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>
<?php
break;

break;
    case "":
    header("location: index.php");
break;

}
?>
</body>
</html>