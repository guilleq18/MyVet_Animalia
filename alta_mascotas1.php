<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';


switch ($Permisos){
 case "admin":
 case 'cliente':
 case 'semiAdmin':


?>
<!--*************************************FORMULARIO************************************************ -->



<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	 <a href="alta_mascotas.php" class="float-right btn btn-secondary mt-1">Volver</a>
	<h4 class="card-title text-center text-center mt-2">Registro de Mascotas</h4>
</header>
<article class="card-body">
<form action="alta_mascotas2.php" method="POST">

			<input type="hidden" value="<?php echo $_GET['i1'] ?>" name="idcliente">
	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" placeholder="" name="nombre" id="nombre" required="">
		</div> 
		<div class="col form-group">
			<label>Tipo</label>
		  	<input type="text" class="form-control" placeholder=" " name="tipo" id="tipo" required>
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Raza </label>   
		  	<input type="text" class="form-control" placeholder="" name="raza" id="raza" required>
		</div> 
		<div class="col form-group">
			<label>Color</label>
		  	<input type="text" class="form-control" placeholder=" " name="color" id="color" required>
		</div> 
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Nacimiento</label>
		  <input type="date" class="form-control" name="Nacimiento" id="Nacimiento" required>
		</div> 
		<div class="form-group col-md-6">
		  <label>Sexo</label>
		  <select class="custom-select" name="sexo" id="sexo" required>
                  <option selected>Seleccionar Sexo</option>
                  <option  value="macho">Macho</option>
                  <option  value="hembra">Hembra</option>
            </select>
		    
		</div> 
	</div> 
	<div class="form-group">
		<label>Tamaño</label>
	    <select class="custom-select" name="tamano" id="tamano" required>
                  <option selected>Seleccione el tamaño</option>
                  <option  value="1">Micro</option>
                  <option  value="2">Pequeño</option>
                  <option  value="3">Mediano</option>
                  <option  value="4">Grande</option>
            </select>
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
	<h4 class="card-title mt-2">Registro</h4>
</header>
<article class="card-body">
<form action="alta_clientes.admin1.php" method="POST">

	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" placeholder="" name="nombre" id="nombre">
		</div> 
		<div class="col form-group">
			<label>Apellido</label>
		  	<input type="text" class="form-control" placeholder=" " name="apellido" id="apellido">
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>DNI </label>   
		  	<input type="text" class="form-control" placeholder="" name="dni" id="dni">
		</div> 
		<div class="col form-group">
			<label>Teléfono</label>
		  	<input type="text" class="form-control" placeholder=" " name="telef" id="telef">
		</div> 
	</div> 
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="" name="email" id="email">
		<small class="form-text text-muted">Tu correo nunca será compartido con nadie mas.</small>
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Nacimiento</label>
		  <input type="date" class="form-control" name="Naci" id="Naci">
		</div> 
		<div class="form-group col-md-6">
		  <label>Dirección</label>
		  <input type="text" class="form-control" placeholder="" name="direcc" id="direcc">
		    
		</div> 
	</div> 
	<div class="form-group">
		<label>Contraseña</label>
	    <input class="form-control" type="password" name="pass" id="pass">
	</div> 
	<div class="form-group">
		<label>Vuelve a Ingresar la Contraseña</label>
	    <input class="form-control" type="password" name="pass2" id="pass2">
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
<p class="h5 text-white">Contacto: 3804-3656416   <br><br> Av. Rivadavia N° 542 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>
<?php
        	break;
}