<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';
include 'conexion.php';


switch ($Permisos){
 case "admin":

$notivac="SELECT * FROM notificacionvacunacion WHERE id_notificacion=:id";
$Resnot=$base ->prepare ($notivac);
$Resnot->execute(array(':id'=>$_GET['i']));
$Resnot->setFetchMode(PDO::FETCH_ASSOC); 
$noti=$Resnot->fetch();
?>
<!--*************************************FORMULARIO************************************************ -->



<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	 <a href="ver_notif_vacu.php" class="float-right btn btn-secondary mt-1">Volver</a>

	<h4 class="card-title text-center text-center mt-2">Modificación de Vacunación</h4>
</header>
<article class="card-body">
<form action="mod_notific_vacunacion1.php" method="POST">

			<input type="hidden" value="<?php echo $_GET['i'] ?>" name="idnotificacion">
			<input type="hidden" value="<?php echo $noti['id_clientes']?>" name="idcliente">
			<input type="hidden" value="<?php echo $noti['id_mascotas']?>" name="idmascota">
	<div class="form-row">
		<div class="col form-group">
			<label>Farmaco</label>   
		  	<input type="text" class="form-control" value="<?php echo $noti['Farmaco'] ?>" name="farmaco" id="farmaco" required>
		</div> 
		 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Numero de Dosis</label>
		  	<input type="text" class="form-control" value="<?php echo $noti['numero_dosis']?> "name="dosis" id="dosis">
		</div>
		
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>Fecha de Aplicación</label>
		  <input type="date" class="form-control" name="fecha" id="fecha" required value="<?php echo $noti['fecha_vacuna']?>">
		</div> 
		
	</div> <br><br>
	
	
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Actualizar  </button>
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