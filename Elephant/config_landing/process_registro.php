<?php
//error_reporting(0);
require_once("conexion.php");

$action = 'read';

if (isset($_POST['action']))
{

	$action = $_POST['action'];
}


if ($action == 'read')
{

     $e = $_POST["email"];
	 $p = $_POST["pass"];
	 $n = $_POST["nombre_completo"];

	 //$sair = new funcione

	 //$sair->validar_usuario($l,$p);
	// $sair->prueba();
  if ($e !== "" && $p !== "" && $n !=="") 
  {
        $respuesta = mysqli_query($conn, "SELECT count(*) FROM usuarios where email = '$e'   ");
	 if( $fila = mysqli_fetch_row($respuesta) )
	 {
	  $valor = $fila[0];

	 }

	  if ($valor == 0)  /// quiere deir que se puede registrar al user
	  {
	  	$consulta = mysqli_query($conn, "INSERT INTO usuarios (nombre_completo,email,pass)  VALUES ('$n', '$e','$p')");
	  	
	  	$res['resul'] = 11;
	  	$res["resultt"]=$e;
	  }else{
	  	$res['resul'] = 00; // / ya existe el correo 
	  }
	 

  }elseif ($e == "" || $p == "" || $n == "") 
  {
  	$res['resul']=22; // 22 quiere decir que existen campos vacios ////
  }     
        

  	 

	
}
 





header('Content-Type: application/json');
echo json_encode($res);
die();


?>