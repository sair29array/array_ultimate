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

     $comentario = $_POST["comentario"];
	 $id_user = $_POST["id_user"];
	 $id_leccion = $_POST["id_leccion"];


        $do = mysqli_query($conn, "INSERT INTO comentarios (comentario,id_leccion,id_user)  VALUES ('$comentario', '$id_leccion','$id_user')");
	
        

  	 
	  	$res['resultt']=1;
	  	$res["leccion"]=$id_leccion;
	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>