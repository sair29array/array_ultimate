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

     $id_comentario = $_POST["id_comentario_delete"];
	 

     	$do = mysqli_query($conn, "DELETE  FROM  respuestas_a_comentarios  WHERE id_comentario = '$id_comentario' ");
    

        $doo = mysqli_query($conn, "DELETE  FROM  comentarios  WHERE id_comentario = '$id_comentario' ");
	
        

  	 
	  	$res['resultt']=1;
	  	//$res["leccion"]=$id_leccion;
	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>