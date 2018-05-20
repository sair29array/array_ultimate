<?php
//error_reporting(0);
require_once("conexion.php");
require_once("process.php");
$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

     $newpass = $_POST["newpass"];
     $id_user = $_POST["id_user"];


     

     $consult = mysqli_query($conn, "UPDATE usuarios SET pass = '$newpass'  WHERE id = '$id_user' ");

	 $res['resul']= 1;

  
        

  	

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>