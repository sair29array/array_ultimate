<?php 
	class actividades
	{
		public function GetPuntuacionPara($id_user_ , $actividad)
		// sabremos si ya un user tiene puntos en una determinada actividad
		{
			include("../config_landing/conexion.php");
			$respuesta = mysqli_query($conn, "SELECT count(*) FROM actividades_realizadas where quien_la_hizo = '$id_user_' and actividad = '$actividad'  ");
			 if( $fila = mysqli_fetch_row($respuesta) )
			 {
			  $r = $fila[0];
			 }
			 if ($r !== 0 ) 
			 {
			 	$consul = mysqli_query($conn, "SELECT * FROM actividades_realizadas where quien_la_hizo = '$id_user_' and actividad = '$actividad'  ");

			 	return $consul;
			 }else
			 {
			 	return 0 ;
			 }
		}

		public function RequiredAct($vl,$id_u,$actividad) ///  esta función permite que algunas actividades dentro del curso sean obligatorias  $vl es la vista de leccion
		{


			$ConsultActUser = $this->ConsultActUser($id_u,$actividad);
			if ($ConsultActUser == 0 ) {
				return 0; /// quiere decir que no a hecho la actividad
			}else
			{
					foreach ($ConsultActUser as $ca) 
					{
						$puntuacion = $ca["puntuacion"];
					}

					/// la puntucacion debe ser igual a 5 para poder ser valida

					if ($vl == "definición-y-asignación") 
					{
						if ($puntuacion == 5 ) 
						{
							?> <script> window.location("../");</script> <?php 				
						}
					}
			}
			
		}


		public function ConsultActUser($id_user,$id_actividad)
		{
			/// esta funcion verifica si un user ha terminado una actividadad de forma completa
			include("../config_landing/conexion.php");
			 $consulta = mysqli_query($conn, "SELECT * FROM actividades_realizadas where quien_la_hizo = '$id_user' AND actividad = '$id_actividad' " );
			 $encontrado = 0;
			 foreach ($consulta as $c) {
			 	$encontrado = $encontrado + 1;
			 }

			 if ($encontrado == 0) {
			 	return 0;
			 }else{
			 	return $consulta;
			 }
		}
	}
 ?>