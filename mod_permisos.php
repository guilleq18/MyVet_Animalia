
<?php
include 'scripts.php';
include 'menu.php';
include 'permisos.php';
?>

<!--***************************************ALERTAS**************************************************** -->
<?php
switch ($Permisos) {
    case 'admin':
$cli=$_GET['i1'];
$per=$_GET['i2'];


?>
<!--****************************************FORMULARIO********************************************** -->
<div class="container">
<br><p class="text-center">My Vet Animalia</p>
<hr>
<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	 <a href="ver_permisos.php" class="float-right btn btn-secondary mt-1">Volver</a>
	<h4 class="card-title text-center mt-2">Modificar Permisos</h4>
</header>
<article class="card-body">
<form action="mod_permisos1.php" method="POST">
	           
	<div class=" form-group">
			<label>Permisos </label>   

                   <input type="hidden" name="idcliente" id="idcliente" value="<?php echo $cli?>"> 
                   <input type="hidden" name="idpermiso" id="idpermiso" value="<?php echo $per?>"> 

		  	 <select class="custom-select" name="permiso" id="permisos" required>
                  <option selected>Seleccionar Permiso</option>
                  <option  value="admin">Administrador</option>
                  <option  value="semiAdmin">Usuario Administrador</option>
                  <option  value="cliente">Cliente</option>
            </select> 
	</div> 
	</div> 
    <br> 
    <div class="form-group">
        <button type="submit" class="btn btn-primary btn-block"> Modificar  </button>
    </div>      
</form>
</article> 
</div>
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