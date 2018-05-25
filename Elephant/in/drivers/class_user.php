<?php 
 
	class user
	{
		public function GetDatosUser($email)
		{
			include("../config_landing/conexion.php");
			 $consulta = mysqli_query($conn, "SELECT * FROM usuarios where email = '$email'  ");
			 return $consulta;
		}

		public function GetDatosUserId($id)
		{
			include("../config_landing/conexion.php");
			 $consulta = mysqli_query($conn, "SELECT * FROM usuarios where id = '$id'  ");
			 return $consulta;
		}



		public function UpdateDataUser($id,$n,$c,$p)
		{
			include("../config_landing/conexion.php");

			$respuesta = mysqli_query($conn, "SELECT count(*) FROM usuarios where email = '$c'  and id != '$id' ");
			 if( $fila = mysqli_fetch_row($respuesta) )
			 {
			  $Err = $fila[0];

			 }

			if ($Err == 0) {
				$consult = mysqli_query($conn, "UPDATE usuarios SET email = '$c', nombre_completo = '$n' ,  pass = '$p' WHERE id = '$id' ");
			    $_SESSION["login_user"] = $c;
			    ?> <script>location.href= "../in/Perfil"; </script> <?php
			    return $consult;
			}else
			{
				?> <script>location.href= "../in/PerfilErr"; </script> <?php
			}

		}



	}
 ?>