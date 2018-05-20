<?php
//error_reporting(0);
$conn = new mysqli("localhost","root","","array");


$action = 'read';

if (isset($_POST['action']))
{

    $action = $_POST['action'];
}


if ($action == 'read')
{

     @$n = $_POST["Nota"];
     @$f = $_POST["fecha"];
     @$id_admin = $_POST["id_ad"];

     //$sair = new funcione

     //$sair->validar_usuario($l,$p);
    // $sair->prueba();
  if ($n !== "" && $f !== "") 
  {
        $consulta = mysqli_query($conn, "INSERT INTO notas_o_tareas_admin (id_admin,fecha,nota_o_tarea)  VALUES ('$id_admin', '$f','$n')");
     
     $res['resul']=1;

  }elseif ($n == "" || $f == "") 
  {
    $res['resul']=0; // 2 quiere decir que existen campos vacios ////
  }elseif ($n != "" || $f == "") {
    $res['resul']=2; /// el campo de la nota está vacio
  }  elseif ($n == "" || $f != "") {
    $res['resul']=3;// el compo de la fecha está vacio
  }  
      
        

     

    
}
 





    header('Content-Type: application/json');
echo json_encode($res);
die();




?>      