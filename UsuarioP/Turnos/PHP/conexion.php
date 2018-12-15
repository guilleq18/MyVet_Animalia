

<?php 

	class conectar{
		public function conexion(){
			$conexion=mysqli_connect('localhost',
										'root',
										'',
										'my_vet_animalia');
			return $conexion;
		}
	}


 ?>