

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
  <a class="navbar-brand" src="librerias/Img/4.png" href="#">Mega Dropdown</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon" ></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="cerrar_sesion.php">Cerrar Sesion</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category 1
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <span class="text-uppercase text-white">Category 1</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              
              <div class="col-md-4">
                <a href="">
                  <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                </a>
                <p class="text-white">Short image call to action</p>

              </div>
              
            </div>
          </div>
          


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category 2
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <span class="text-uppercase text-white">Category 2</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
             
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
            
              <div class="col-md-4">
                <a href="">
                  <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                </a>
                <p class="text-white">Short image call to action</p>

              </div>
              
            </div>
          </div>
          


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Category 3
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
               <span class="text-uppercase text-white">Category 3</span>
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
              
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Active</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Link item</a>
                </li>
              </ul>
              </div>
           
              <div class="col-md-4">

                <a href="">
                  <img src="https://dummyimage.com/200x100/ccc/000&text=image+link" alt="" class="img-fluid">
                </a>
                <p class="text-white">Short image call to action</p>
                
              </div>
             
            </div>
          </div>
          


        </div>
      </li>

    </ul>
   
  </div>


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
