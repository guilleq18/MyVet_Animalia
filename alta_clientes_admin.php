<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';


switch ($Permisos){
 case "admin":

//***************************************ALERTAS*****************************************************

error_reporting(0);
$f=$_GET['f'];
//************************************USUARIO AGREGADO*****************************************
if ($f==1) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuario Agregado con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
//************************************USUARIO AGREGADO*****************************************
}else if ($f==1) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuario Agregado con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>


<!--********************************CONTRASEÑA DEMASIADO CORTA**********************************-->
<?php
 }else if ($f==3){
?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>La contraseña es Demasiado corta</strong>  Ingrese una nueva contraseña de almenos 8 caracteres!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>

<?php
}else if($f==4){
?>
<!--************************************CONTRASEÑAS NO COINCIDEN************************************-->
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Las contraseñas NO coinciden!</strong>  Ingrese una nuevamente la contraseña!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>



<?php
}
?>
<!--*************************************FORMULARIO************************************************ -->



<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	 <a href="ver_clientes.php" class="float-right btn btn-secondary mt-1">Volver</a>
	<h4 class="card-title text-center mt-2">Registro de Clientes</h4>
</header>
<article class="card-body">
<form action="alta_clientes.admin1.php" method="POST">

	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" placeholder="" name="nombre" id="nombre" required="">
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
		</div> 
		<div class="col form-group">
			<label>Teléfono</label>
		  	<input type="text" class="form-control" placeholder=" " name="telef" id="telef" required>
		</div> 
	</div> 
	<div class="form-group">
		<label>Dirección de E-Mail</label>
		<input type="email" class="form-control" placeholder="" name="email" id="email" required>
		<small class="form-text text-muted">Tu correo nunca será compartido con nadie mas.</small>
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Nacimiento</label>
		  <input type="date" class="form-control" name="Naci" id="Naci" required>
		</div> 
		<div class="form-group col-md-6">
		  <label>Dirección</label>
		  <input type="text" class="form-control" placeholder="" name="direcc" id="direcc" required>
		    
		</div> 
	</div> 
	<br><br>
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Registrar  </button>
    </div>      
                                             
</form>
</article> 
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
<?php
        break;
        case 'semiAdmin':

//***************************************ALERTAS*****************************************************

error_reporting(0);
$f=$_GET['f'];
//************************************USUARIO AGREGADO*****************************************
if ($f==1) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuario Agregado con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
//************************************USUARIO AGREGADO*****************************************
}else if ($f==1) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Usuario Agregado con Exito!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>


<!--********************************CONTRASEÑA DEMASIADO CORTA**********************************-->
<?php
 }else if ($f==3){
?>
	<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>La contraseña es Demasiado corta</strong>  Ingrese una nueva contraseña de almenos 8 caracteres!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>

<?php
}else if($f==4){
?>
<!--************************************CONTRASEÑAS NO COINCIDEN************************************-->
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Las contraseñas NO coinciden!</strong>  Ingrese una nuevamente la contraseña!.
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>



<?php
}
?>
<!--*************************************FORMULARIO************************************************ -->



<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	 <a href="index1.php" class="float-right btn btn-secondary mt-1">Volver</a>
	<h4 class="card-title text-center mt-2">Registro de Clientes</h4>
</header>
<article class="card-body">
<form action="alta_clientes.admin1.php" method="POST">

	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" placeholder="" name="nombre" id="nombre" required="">
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
		</div> 
		<div class="col form-group">
			<label>Teléfono</label>
		  	<input type="text" class="form-control" placeholder=" " name="telef" id="telef" required>
		</div> 
	</div> 
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="" name="email" id="email" required>
		<small class="form-text text-muted">Tu correo nunca será compartido con nadie mas.</small>
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Nacimiento</label>
		  <input type="date" class="form-control" name="Naci" id="Naci" required>
		</div> 
		<div class="form-group col-md-6">
		  <label>Dirección</label>
		  <input type="text" class="form-control" placeholder="" name="direcc" id="direcc" required>
		    
		</div> 
	</div> 
	<div class="form-group">
		<label>Contraseña</label>
	    <input class="form-control" type="password" name="pass" id="pass" required>
	</div> 
	<div class="form-group">
		<label>Vuelve a Ingresar la Contraseña</label>
	    <input class="form-control" type="password" name="pass2" id="pass2" required>
	</div>  
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Registrar  </button>
    </div>      
                                             
</form>
</article> 
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
<?php
        	break;
}