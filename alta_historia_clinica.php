<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';


switch ($Permisos){
 case "admin":

?>
<!--*************************************FORMULARIO************************************************ -->



<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="historia_clinica.php?>" class="float-right btn btn-outline-primary mt-1">Volver</a>
	<h4 class="card-title mt-2">Registrar Historia Clinica</h4>
</header>
<article class="card-body">
<form action="alta_historia_clinica1.php" method="POST">

			<input type="hidden" value="<?php echo $_GET['i1'] ?>" name="idmascota">
	<div class="form-row">
		<div class="col form-group">
			<label>Motivo </label>   
		  	<input type="text" class="form-control" placeholder="" name="motivo" id="motivo" required>
		</div> 
		<div class="col form-group">
			<label>Seña Particular</label>
		  	<input type="text" class="form-control" placeholder=" " name="sena" id="sena" required>
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Temperatura </label>   
		  	<input type="text" class="form-control" placeholder="" name="temperatura" id="temperatura"required>
		</div> 
		<div class="col form-group">
			<label>Peso</label>
		  	<input type="text" class="form-control" placeholder=" " name="peso" id="peso" required>
		</div> 
	</div> 
	<div class="form-group">
		<label>Diagnóstico</label>
		<textarea class="form-control" rows="5" name="diagnostico" required></textarea> 
		
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Consulta</label>
		  <input type="date" class="form-control" name="fecha" id="fecha" required>
		</div> 
		<div class="form-group col-md-6">
		  <label>Tratamiento</label>
		  <textarea class="form-control" rows="3" name="tratamiento" required></textarea> 
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
<p class="h5 text-white">Contacto: (0380) 4434648   <br><br> Av. Rivadavia N° 1021 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>

        
<?php
        	break;
}