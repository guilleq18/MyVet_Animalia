
<?php
include 'scripts.php';
?>

<!--***************************************ALERTAS**************************************************** -->
<?php
error_reporting(0);
$f=$_GET['f']; // se usa para enviar datos x url

if ($f==1) {
    ?>
<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Datos no corresponden a un regitro del sistema</strong> Intenta nuevamente.  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
}
//***********************************CONTRASEÑA O USUARIOS NO ENCONTRADOS******************************
if ($f==2){
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong> Contraseña establecida con exito </strong>  Intenta nuevamente!.
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
	<a href="index.php" class="float-right btn btn-outline-primary mt-1">Iniciar Sesión</a>
	<h4 class="card-title mt-2">Reestablecer contraseña</h4>
</header>
<article class="card-body">
<form action="rest_contrasena1.php" method="POST">
	
	<div class=" form-group">
			<label>DNI </label>   
		  	<input type="text" class="form-control" placeholder="" name="dni" id="dni">
	</div> 
		
		<label>Email</label>
		<input type="email" class="form-control" placeholder="" name="email" id="email">
   </div> 
   <br> 
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Recuperar  </button>
    </div>      
                                             
</form>
</article> 
<div class="border-top card-body text-center">Restablecio su contraseña? <a href="index.php">Inicie Sesión!</a></div>
</div> 
</div> 
</div> 

</div> 


</div> 


<br><br>
<article class="bg-secondary mb-3">  
<div class="card-body text-center">
    <h3 class="text-white mt-3">Veterinaria Animalia</h3>
<p class="h5 text-white">Contacto: 3804-3656416   <br><br> Av. Rivadavia N° 542 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>