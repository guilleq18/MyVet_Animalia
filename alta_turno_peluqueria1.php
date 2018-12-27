<?php
$perfil;


include 'conexion.php';
include 'permisos.php';

switch ($Permisos) {
	case 'cliente':
	case 'semiAdmin':
//**************************FUNCION PARA VER SI HAY FIN DE SEMANA	
$FechaTurno=$_POST['fecha'];
function saber_dia($nombredia) {

$dias = array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado');

$fecha = $dias[date('N', strtotime($nombredia))];

return $fecha;

}

// ******************ejecutamos la función pasándole la fecha ingresada**************************

if ((saber_dia($FechaTurno))=="Sabado" ||(saber_dia($FechaTurno))=="Domingo"){

	header("location: alta_turno_peluqueria.php?f=3");

}else{
	$flag=0;
	$turnos="SELECT * FROM turnospeluqueria WHERE fecha=:fecha";
	$Resturno=$base ->prepare ($turnos);
	$Resturno->execute(array(":fecha"=>$FechaTurno));
	$Resturno->setFetchMode(PDO::FETCH_ASSOC);
	while ($Turno=$Resturno->fetch()){

		if ($Turno['turno']>$flag ){
			//**determino el valor mas alto de turno y lo pongo en flag
			++$flag;
		}


	}
//***determino si flag es menor a 5
	if ($flag<5 ) {
		//***********************************insertar registro**************************************
			//aumento flag en uno para aumentar en uno el numero de turno
			++$flag;
			$insertar="INSERT INTO turnospeluqueria (id_clientes, fecha, turno, id_tamano) VALUE (:idcli, :fecha, :turno, :idtamano)";
			$resultado=$base-> prepare ($insertar);
			$resultado->execute(Array(":idcli"=>$_POST['idcliente'], ":fecha"=>$_POST['fecha'], ":turno"=>$flag, ":idtamano"=>$_POST['tamano']));

			if ($Permisos=="semiAdmin"){
			header('Location: alta_mascotas.php?f=1');
			}else if($Permisos=="cliente"){
			header('Location: alta_turno_peluqueria.php?f=1');
			}
		
		}elseif ($flag==5) {
			header("location: alta_turno_peluqueria.php?f=2");
		}


	



}



	break;
	
	
}

