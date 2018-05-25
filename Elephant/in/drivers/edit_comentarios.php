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

     $comentario = $_POST["comentario_edit"];
	 $id_comentario = $_POST["Editar_Comentario_"];
	 


        $do = mysqli_query($conn, "UPDATE comentarios SET comentario = '$comentario' WHERE id_comentario = '$id_comentario' ");
	
        

  	 
	  	$res['resultt']=1;
	  	
	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>