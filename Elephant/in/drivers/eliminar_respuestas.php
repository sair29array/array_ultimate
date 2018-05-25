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

     $id_respuesta_delete = $_POST["id_respuesta_delete"];
	 

     	$do = mysqli_query($conn, "DELETE  FROM  respuestas_a_comentarios  WHERE id_respuesta = '$id_respuesta_delete' ");
    

        
  	 
	  	$res['resultt']=1;
	  	//$res["leccion"]=$id_leccion;
	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>