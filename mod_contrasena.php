<?php

include 'menu.php';
include 'scripts.php';
$idcliente=$_SESSION['idcliente'];






?>

<!--***************************************ALERTAS**************************************************** -->
<?php
error_reporting(0);
$f=$_GET['f']; // se usa para enviar datos x url
//****************************contraseña con menos de 8 caracteres*************************************
if ($f==1) {
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>La contraseña ingresada podesee menos de 8 caracteres</strong> Intenta nuevamente.  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
}else if ($f==2){
//***********************************CONTRASEÑA NO COINCIDEN******************************

    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong> Las Contraseñas NO Coinciden</strong>  Intenta nuevamente!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
}else if ($f==3){
//***********************************CONTRASEÑA MODIFICADA******************************

    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> La Contraseña Fue Modificada con Exito!!!! </strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
}
?>

<!--****************************************FORMULARIO********************************************** -->
<div class="container">
<br><p class="text-center">My Vet Animalia</p>
<hr>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="index1.php" class="float-right btn btn-outline-primary mt-1">Volver</a>
	<h4 class="card-title mt-2">Modificar contraseña</h4>
</header>
<article class="card-body">
<form action="mod_contrasena1.php" method="POST">

    <input type="hidden" value="<?php echo $idcliente ?>" name="id">
	
	<div class=" form-group">
	
	</div> 

	<label>Nueva Contraseña</label>
		<input type="password" class="form-control" placeholder="" name="contrasena" id="contrasena">
   <div> 
    <br>
   <label>Vuelva a Escribir la Nueva Contraseña</label>
        <input type="password" class="form-control" placeholder="" name="contrasena2" id="contrasena2">
   </div> 
   <br> 
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Modificar  </button>
    </div>      
                                             
</form>
</article> 

</div> 
</div> 
</div> 

</div> 


</div> 


<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Veterinaria Animalia</h3>
<p class="h5 text-white">Contacto: (0380) 4434648   <br><br> Av. Rivadavia N° 1021 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>