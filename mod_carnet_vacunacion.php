<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';


switch ($Permisos){
 case "admin":


$vacuna="SELECT * FROM calendariosvacunacion where id_calendariosvacunacion=:id";
$Resvacuna=$base ->prepare ($vacuna);
$Resvacuna->execute(array("id"=>$_GET['i1'] ));
$Resvacuna->setFetchMode(PDO::FETCH_ASSOC);
$HVacuna=$Resvacuna->fetch()



?>
<!--*************************************FORMULARIO************************************************ -->



<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="ver_carnet_vacunacion.php?i1=<?php echo $HVacuna['id_mascotas'] ?>" class="float-right btn btn-outline-primary mt-1">Volver</a>
	<h4 class="card-title mt-2">Registrar Vacunación</h4>
</header>
<article class="card-body">
<form action="mod_carnet_vacunacion1.php" method="POST">

			<input type="hidden" value="<?php echo $_GET['i1'] ?>" name="idcarnetvacuna">
			<input type="hidden" value="<?php echo $HVacuna['id_mascotas'] ?>" name="idmascota">
	<div class="form-row">
		<div class="col form-group">
			<label>Enfermedad </label>   
		  	<input type="text" class="form-control" value="<?php echo $HVacuna['enfermedad'] ?>" name="enfermedad" id="enfermedad" required>
		</div> 
		 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Farmaco Aplicado </label>   
		  	<input type="text" class="form-control" value="<?php echo $HVacuna['vacuna'] ?>" name="vacuna" id="vacuna"required>
		</div> 
		 
	</div> 
	
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Aplicación</label>
		  <input type="date" class="form-control" value="<?php echo $HVacuna['fecha_vacuna'] ?>" name="fecha" id="fecha" required>
		</div> 
		
	</div> 
	
    <div class="form-group"><br>
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
<p class="h5 text-white">Contacto: (0380) 4434648   <br><br> Av. Rivadavia N° 1021 - La Rioja - Argenitna </p>   
</div>
<br><br>
</article>

        
<?php
        	break;
}