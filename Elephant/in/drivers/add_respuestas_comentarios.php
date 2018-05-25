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

     $respuesta = $_POST["respuesta"];
	 $id_user = $_POST["id_user"];
	 $id_comentario = $_POST["reply_"];


        $do = mysqli_query($conn, "INSERT INTO respuestas_a_comentarios (id_comentario,id_user,respuesta)  VALUES ('$id_comentario', '$id_user','$respuesta')");
	
        

  	 
	  	$res['resultt']=1;
	  	//$res["leccion"]=$id_leccion;
	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>