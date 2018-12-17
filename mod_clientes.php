<?php
include 'scripts.php';
include 'menu.php';
include 'conexion.php';
include 'permisos.php';


switch ($Permisos){
 case "admin":
 //***************************************ALERTAS*****************************************************

error_reporting(0);
$f=$_GET['f'];
//************************************DNI EXISTENTE*****************************************
if ($f==1) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>DNI Existente!!!</strong>  
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
}

//***************************************Consulta para rellenar***********************************
$clien="SELECT * FROM clientes where id_clientes=:id";
$ResCliente=$base ->prepare ($clien);
$ResCliente->execute(array("id"=>$_GET['i1'] ));
$ResCliente->setFetchMode(PDO::FETCH_ASSOC); 
$cliente=$ResCliente->fetch()
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
<form action="mod_mascota1.php" method="POST">
			<input type="hidden" value="<?php echo $cliente['id_clientes'] ?>" name="id">
	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" value="<?php echo $cliente['nombre'] ?>" name="nombre" id="nombre">
		</div> 
		<div class="col form-group">
			<label>Apellido</label>
		  	<input type="text" class="form-control" value="<?php echo $cliente['apellido'] ?>" name="apellido" id="apellido">
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>DNI </label>   
		  	<input type="text" class="form-control" value="<?php echo $cliente['dni'] ?>" name="dni" id="dni">
		</div> 
		<div class="col form-group">
			<label>Teléfono</label>
		  	<input type="text" class="form-control" value="<?php echo $cliente['telefono'] ?>" name="telef" id="telef">
		</div> 
	</div> 
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" value="<?php echo $cliente['email'] ?>" name="email" id="email">
		
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Nacimiento</label>
		  <input type="date" class="form-control" value="<?php echo $cliente['fechadenacimiento'] ?>" name="Naci" id="Naci">
		</div> 
		<div class="form-group col-md-6">
		  <label>Dirección</label>
		  <input type="text" class="form-control" value="<?php echo $cliente['direccion'] ?>" name="direcc" id="direcc">
		    
		</div> 
	</div> 
	
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Guardar Cambios </button>
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
//************************************DNI EXISTENTE*****************************************
if ($f==1) {
?>
<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>DNI Existente!!!</strong>  
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



   case "cliente":

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


  			break;
}