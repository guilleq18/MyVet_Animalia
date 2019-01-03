<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';

$id=$_SESSION['idcliente'];
switch ($Permisos){
 
case 'cliente':
error_reporting(0);
$f=$_GET['f'];


if ($f==1){
?>
 <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong style="font-size: 25px; ">Turno Concedido</strong> <h6>Ingrese a la opcion de "Mis Turnos" en el menú para visualizar sus turnos disponibles.</h6>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>

<?php
}else if ($f==2) {
?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong style="font-size: 25px;">Turno No disponible</strong>  <h6>Seleccione una nueva fecha por favor!</h6>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
    </div>
<?php
}else if ($f==3) {
?>
 <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong style="font-size: 25px;">Turno No disponible</strong>  <h6>Seleccione una nueva fecha por favor!</h6>
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
	 <a href="alta_mascotas.php" class="float-right btn btn-secondary mt-1">Volver</a>
	<h4 class="card-title text-center text-center mt-2">Solicitur de Turnos Peluqueria</h4>
</header>
<article class="card-body">
<form action="alta_turno_peluqueria1.php" method="POST">

			<input type="hidden" value="<?php echo $id ?>" name="idcliente">
	
	
	
	<div class="form-group">
		<div class="form-group ">
		  <label>Fecha de Turnos</label>
		  <input type="date" class="form-control" name="fecha" id="fecha" required>
		  <small>Recuerde no seleccionar Fin de Semanas o dias Feriados!</small>
		</div> 
		 
	</div> 
	<div class="form-group">
		<label>Tamaño de su Mascota</label>
	    <select class="custom-select" name="tamano" id="tamano" required>
                  <option selected>Seleccione el tamaño</option>
                  <option  value="1">Micro</option>
                  <option  value="2">Pequeño</option>
                  <option  value="3">Mediano</option>
                  <option  value="4">Grande</option>
            </select>
	</div> 
	
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Solicitars  </button>
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