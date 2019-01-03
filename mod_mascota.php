<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';


switch ($Permisos){
 case "admin":
 case "cliente":
$masco="SELECT * FROM mascotas WHERE id_mascotas=:id";
$ResMascotas=$base ->prepare ($masco);
$ResMascotas->execute(array(":id"=>$_GET['i1']));
$ResMascotas->setFetchMode(PDO::FETCH_ASSOC);
$Masc=$ResMascotas->fetch()
?>
<!--***********************************FORMULARIO************************************************ -->



<div class="container">
<br>  <p class="text-center">My Vet Animalia </p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="ver_mascotas.php" class="float-right btn btn-secondary mt-1">Volver</a>
	<h4 class="card-title text-center mt-2">Registrar Mascotas</h4>
</header>
<article class="card-body">
<form action="mod_mascota1.php" method="POST">
<input type="hidden" value="<?php echo $_GET['i1'] ?>" name="idm" id="idm" >
<input type="hidden" value="<?php echo $Masc['id_cliente'] ?>" name="idcli" id="idcli" >
	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" value="<?php echo $Masc['nombre'] ?>" name="nombre" id="nombre" required>
		</div> 
		 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Tipo </label>   
		  	<input type="text" class="form-control" value="<?php echo $Masc['tipo_demascota'] ?>" name="tipo" id="tipo">
		</div> 
		<div class="col form-group">
			<label>Raza</label>
		  	<input type="text" class="form-control" value="<?php echo $Masc['raza'] ?>" name="raza" id="raa">
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Color </label>   
		  	<input type="text" class="form-control" value="<?php echo $Masc['color'] ?>" name="color" id="color">
		</div> 
		<div class="col form-group">
			<label>Fecha de Nacimiento</label>
		  	<input type="date" class="form-control" value="<?php echo $Masc['nacimiento'] ?>" name="nacimiento" id="nacimiento">
		</div> 
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		<label>Tamaño</label>
		  <select class="custom-select" name="tamano" id="tamano" required>
                  <option selected>Seleccione el tamaño</option>
                  <option  value="1">Micro</option>
                  <option  value="2">Pequeño</option>
                  <option  value="3">Mediano</option>
                  <option  value="4">Grande</option>
            </select>
		</div> 
		
	</div> 
	<div class="form-row">
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
        <button type="submit" class="btn btn-primary btn-block"> Guardar Cambios  </button>
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
$masco="SELECT * FROM mascotas WHERE id_mascotas=:id";
$ResMascotas=$base ->prepare ($masco);
$ResMascotas->execute(array(":id"=>$_GET['i1']));
$ResMascotas->setFetchMode(PDO::FETCH_ASSOC);
$Masc=$ResMascotas->fetch()
?>
<!--***********************************FORMULARIO************************************************ -->



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
<input type="hidden" value="<?php echo $Masc['id_mascotas'] ?>" name="id" id="id" >
<input type="hidden" value="<?php echo $Masc['id_cliente'] ?>" name="idcli" id="idcli" >
	<div class="form-row">
		<div class="col form-group">
			<label>Nombre </label>   
		  	<input type="text" class="form-control" value="<?php echo $Masc['nombre'] ?>" name="nombre" id="nombre" required>
		</div> 
		 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Tipo </label>   
		  	<input type="text" class="form-control" value="<?php echo $Masc['tipo_demascota'] ?>" name="tipo" id="tipo">
		</div> 
		<div class="col form-group">
			<label>Raza</label>
		  	<input type="text" class="form-control" value="<?php echo $Masc['raza'] ?>" name="raza" id="raa">
		</div> 
	</div> 
	<div class="form-row">
		<div class="col form-group">
			<label>Color </label>   
		  	<input type="text" class="form-control" value="<?php echo $Masc['color'] ?>" name="color" id="color">
		</div> 
		<div class="col form-group">
			<label>Fecha de Nacimiento</label>
		  	<input type="date" class="form-control" value="<?php echo $Masc['nacimiento'] ?>" name="nacimiento" id="nacimiento">
		</div> 
	</div> 
	
	<div class="form-row">
		<div class="form-group col-md-6">
		<label>Tamaño</label>
		  <select class="custom-select" name="tamano" id="tamano" required>
                  <option selected>Seleccione el tamaño</option>
                  <option  value="1">Micro</option>
                  <option  value="2">Pequeño</option>
                  <option  value="3">Mediano</option>
                  <option  value="4">Grande</option>
            </select>
		</div> 
		
	</div> 
	<div class="form-row">
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
        <button type="submit" class="btn btn-primary btn-block"> Guardar Cambios  </button>
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