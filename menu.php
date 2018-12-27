

<!--///////////////////////////////////////////////INCLUDES///////////////////////////////////////////-->


<?php
include 'scripts.php';
include 'conexion.php';
include 'permisos.php';

/////////////////////////////////MENU CASE///////////////////////////////////////////////////////////////
switch ($Permisos) {

////////////////////////////////CASE CLIENTES//////////////////////////////////////////////////////////  
    case "cliente":
    ?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" src="librerias/Img/4.png" href="index1.php">MyVet Animalia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Gestionar Mis Datos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="mod_contrasena.php">Modificar Contraseña</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="mod_clientes.php">Modificar Datos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="ver_mascotas_clientes.php">Mis Mascotas</a>
                </li>
              </ul>
              </div>
              
             
          


        </div>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Turnos Peluqueria
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
               
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="alta_turno_peluqueria.php">Solicitar Turno</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="ver_turno_peluqueria.php">Ver Turnos Activos</a>
                </li>
                
              </ul>
              </div>
             <li class="nav-item active">
               <a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a>
             </li>
            
          



</nav>


<?php
///////////////////////////////////////CASE SEMIADMIN///////////////////////////////////////////////////
        break;
    case "semiAdmin":
?>
 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" >
  <a class="navbar-brand" href="index1.php" src="librerias/Img/4.png">MyVet Animalia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> 
    <span class="navbar-toggler-icon" src="librerias/Img/logo.jfif" alt="logo"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav  justify-content-center">
      
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active w-100 justify-content-center"  id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Clientes
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <span class="text-uppercase text-white">Gestión Usuarios</span>
                <ul class="nav flex-column ">
                <li class="nav-item">
                  <a class="nav-link active" href="alta_clientes_admin.php">Agregar Cliente</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Agregar Mascota</a>
                </li>

               </ul>
              </div>
             
             


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Turnos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <span class="text-uppercase text-white">Gestión Turnos</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Ver Turnos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="#">Cancelar Fechas</a>
                </li>
               </ul>
              </div>
            </div>
          </div>
        


        </div>
      </li>
            <li class="nav-item">
              <a class="nav-link active" href="cerrar_sesion.php">Cerrar Sesion</a>
            </li>       

        </div>
      </li>

    </ul>
   
  </div>


</nav>




<?php
//////////////////////////////////////CASE ADMIN///////////////////////////////////////////////////////
        break;
    case "admin":
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="index1.php">MyVet Animalia</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuarios
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
         <div class="container">
            <div class="row">
              <div class="col-md-4">
                <span class="text-uppercase text-white">Gestión de Usuarios y Clientes</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="ver_clientes.php">Clientes</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="ver_permisos.php">Asignar Permisos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="alta_mascotas.php">Agregar Mascotas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" href="ver_mascotas.php">Ver Mascotas</a>
                </li>
              </ul>
              
            </div>
          </div>
        </div>
      </li>
      <li class="nav-item">
              <a class="nav-link active" href="historia_clinica.php">Historias Clinicas</a>
        </li>
        <li class="nav-item">
              <a class="nav-link active" href="ver_notific_vacunacion.php">Ver Notificaciones</a>
        </li>
      
        <li class="nav-item">
              <a class="nav-link active" href="cerrar_sesion.php">Cerrar Sesion</a>
        </li> 
    </ul>
  </div>
</nav>
<?php

        break;
////////////////////////////////////SIN PERMISOS//////////////////////////////////////////////////////
 case "":
      header("location: index.php");

        break;

}
?>
