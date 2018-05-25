<?php
//error_reporting(0);
include("../../config_landing/conexion.php");

$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

     $actividad = $_POST["actividad"];
	 $quien = $_POST["quien"];
	 $pbc_ = $_POST["pbc_"];

// analizamos si ya antes habia hecho esa actividad:
	 	$respuesta = mysqli_query($conn, "SELECT count(*) FROM actividades_realizadas where quien_la_hizo = '$quien' and actividad = '$actividad'  ");
			 if( $fila = mysqli_fetch_row($respuesta) )
			 {
			  $r = $fila[0];
			 }
	// si es cero quiere decir que el user no habia hecho la actividad anteriormente
		if ($r == 0) 
		{ 
			// entonces guardamos la puntuaxion 
			 $do = mysqli_query($conn, "INSERT INTO actividades_realizadas (actividad,quien_la_hizo,puntuacion)  VALUES ('$actividad', '$quien','$pbc_')");
		}else{
		// si ya la habia realizado entonces actualizamos : 
			$consult = mysqli_query($conn, "UPDATE actividades_realizadas SET puntuacion = '$pbc_' WHERE quien_la_hizo = '$quien' ");
		}


		if ($pbc_ == 5) // si la puntuacion es 5 entonces
		{
			// consultamos su progreso
			 $consulta = mysqli_query($conn, "SELECT * FROM usuarios where id = '$quien'  ");
			 
			 foreach ($consulta as $user_) {
			 	$progress_ = $user_["progreso"];
			 }
			 $new_progress = $progress_ + 2; // 2%
			//  agregamos el 2% al progreso del user
			$do_= mysqli_query($conn, "UPDATE usuarios SET progreso = '$new_progress' WHERE id = '$quien' ");
		}
       
	
        

  	 
	  	$res['resultt']=1;
	  	$res["leccion"]=$id_leccion;
	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>