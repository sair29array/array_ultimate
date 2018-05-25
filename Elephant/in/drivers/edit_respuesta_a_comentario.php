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

     $respuesta = $_POST["respuesta_edit"];
	 $id_respuesta = $_POST["edit_respuesta"];
	 


        $do = mysqli_query($conn, "UPDATE respuestas_a_comentarios SET respuesta = '$respuesta' WHERE id_respuesta = '$id_respuesta' ");
	
        

  	 
	  	$res['resultt']=1;
	  	
	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>