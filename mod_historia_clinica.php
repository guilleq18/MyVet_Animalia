<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';


switch ($Permisos){
 case "admin":
$historia="SELECT * FROM historiasclinicas where id_historiasclinicas=:id";
$Reshistoria=$base ->prepare ($historia);
$Reshistoria->execute(array("id"=>$_GET['i1']));
$Reshistoria->setFetchMode(PDO::FETCH_ASSOC);
$Hclinicas=$Reshistoria->fetch()


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
<form action="mod_historia_clinica1.php" method="POST">

			<input type="hidden" value="<?php echo $Hclinicas['id_mascotas'] ?>" name="idmascota" required>
			<input type="hidden" value="<?php echo $Hclinicas['id_historiasclinicas'] ?>" name="idhistoria" required>
	<div class="form-row">
		<div class="col form-group">
			<label>Motivo </label>   
		  	<input type="text" class="form-control" value="<?php echo $Hclinicas['motivode_consulta'] ?>" name="motivo" id="motivo" required>
		</div> 
		<div class="col form-group">
			<label>Seña Particular</label>
		  	<input type="text" class="form-control" value="<?php echo $Hclinicas['sena_particulares'] ?>" name="sena" id="sena" required>
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Temperatura </label>   
		  	<input type="text" class="form-control" value="<?php echo $Hclinicas['temperatura'] ?>" name="temperatura" id="temperatura" required>
		</div> 
		<div class="col form-group">
			<label>Peso</label>
		  	<input type="text" class="form-control" value="<?php echo $Hclinicas['peso'] ?>" name="peso" id="peso" required>
		</div> 
	</div> 
	<div class="form-group">
		<label>Diagnóstico</label>
		<textarea class="form-control" rows="5"  name="diagnostico" required><?php echo $Hclinicas['diagnostico'] ?></textarea> 
		
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Consulta</label>
		  <input type="date" class="form-control" value="<?php echo $Hclinicas['fechade_observacion'] ?>" name="fecha" id="fecha" required>
		</div> 
		<div class="form-group col-md-6">
		  <label>Tratamiento</label>
		  <textarea class="form-control" rows="3"  name="tratamiento" required><?php echo $Hclinicas['tratamiento'] ?></textarea> 
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
}