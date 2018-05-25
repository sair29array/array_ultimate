<?php 

	class driv_comentario
	{
			public function GetComentarios($leccion)
			{
				include("../config_landing/conexion.php");
			 $consulta = mysqli_query($conn, "SELECT * FROM comentarios where id_leccion = '$leccion' ORDER BY id_comentario DESC " );
			 return $consulta;
			}

			public function GetRespuestas($id_comentario)
			{
				include("../config_landing/conexion.php");
			 $consulta = mysqli_query($conn, "SELECT * FROM respuestas_a_comentarios where id_comentario = '$id_comentario' ORDER BY id_respuesta ASC " );
			 return $consulta;
			}
	}


 ?>