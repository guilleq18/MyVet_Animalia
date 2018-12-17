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
	<h4 class="card-title mt-2">Registrar Historia Clinica</h4>
</header>
<article class="card-body">
<form action="altahistoria_clinica1.php" method="POST">

			<input type="hidden" value="<?php echo $_GET['i1'] ?>" name="idmascota">
	<div class="form-row">
		<div class="col form-group">
			<label>Motivo </label>   
		  	<input type="text" class="form-control" placeholder="" name="motivo" id="motivo">
		</div> 
		<div class="col form-group">
			<label>Seña Particular</label>
		  	<input type="text" class="form-control" placeholder=" " name="sena" id="sena">
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Temperatura </label>   
		  	<input type="text" class="form-control" placeholder="" name="temperatura" id="temperatura">
		</div> 
		<div class="col form-group">
			<label>Peso</label>
		  	<input type="text" class="form-control" placeholder=" " name="peso" id="peso">
		</div> 
	</div> 
	<div class="form-group">
		<label>Diagnóstico</label>
		<textarea class="form-control" rows="5" name="diagnostico"></textarea> 
		
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Consulta</label>
		  <input type="date" class="form-control" name="fecha" id="fecha">
		</div> 
		<div class="form-group col-md-6">
		  <label>Tratamiento</label>
		  <textarea class="form-control" rows="3" name="tratamiento"></textarea> 
		</div> 
	</div> 
	
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Registrar </button>
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