<?php
include 'scripts.php';
?>

<!--***************************************ALERTAS***********************************************-->
<?php
error_reporting(0);
$f=$_GET['f'];




//************************************USUARIO EXISTENTE*****************************************
if ($f==2){
?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>El DNI ingresado ya existe</strong>  Ingrese nuevamente el DNI!! o pulse recuperar contraseña para iniciar sesión.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>

<?php
}

if ($f==3){
?>
<!--********************************CONTRASEÑA DEMASIADO CORTA**********************************-->
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>La contraseña es Demasiado corta</strong>  Ingrese una nueva contraseña de almenos 8 caracteres!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>

<?php
}else if($f==4){
?>
<!--********************************CONTRASEÑAS NO COINCIDEN**********************************-->
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Las contraseñas NO coinciden!</strong>  Ingrese una nuevamente la contraseña!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>



<?php
}elseif ($f==5) {
	?>
<!--********************************E-mail Invalido**********************************-->
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Email Incompleto. Por favor Ingrese una direccion de E-mail Valida</strong>  Ingrese una nuevamente la contraseña!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>



<?php
}
//*******************************************************************************************
?>




<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="index.php" class="float-right btn btn-outline-primary mt-1">Iniciar Sesión</a>
	<h4 class="card-title mt-2">Registro</h4>
</header>
<article class="card-body">
<form action="alta_clientes1.php" method="POST">

	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" placeholder="" name="nombre" id="nombre" required>
		</div> 
		<div class="col form-group">
			<label>Apellido</label>
		  	<input type="text" class="form-control" placeholder=" " name="apellido" id="apellido" required>
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>DNI </label>   
		  	<input type="text" class="form-control" placeholder="" name="dni" id="dni" required>
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Teléfono</label>
		  	<input type="text" class="form-control" placeholder=" " name="telef" id="telef" required>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Dirección de E-Mail</label>
		<input type="email" class="form-control" placeholder="" name="email" id="email" required>
		<small class="form-text text-muted">Tu correo nunca será compartido con nadie mas.</small>
	</div> <!-- form-group end.// -->
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Nacimiento</label>
		  <input type="date" class="form-control" name="Naci" id="Naci" required>
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Direccion</label>
		  <input type="text" class="form-control" placeholder="" name="direcc" id="direcc" required>
		    
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label>Contraseña</label>
	    <input class="form-control" type="password" name="pass" id="pass" required>
	</div> <!-- form-group end.// -->  
	<div class="form-group">
		<label>Vuelve a Ingresar la Contraseña</label>
	    <input class="form-control" type="password" name="pass2" id="pass2" required>
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Registrarme  </button>
    </div> <!-- form-group// -->      
                                             
</form>
</article> 
<div class="border-top card-body text-center">Ya tienes una cuenta? <a href="index.php">Inicia Sesión</a></div>
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