<?php  
session_start();
 if (isset($_GET["user"])) {
 	$_SESSION["login_user"]=$_GET["user"];
 	header("location: in/index.php");
 }
 if (isset($_SESSION["login_user"])) {
   header("location: in/index.php");
 }

$description = "Aprender a crear páginas web dinámicas con PHP, el lenguaje de Programación Web más poderoso en la web | Elephant, created by ARRAY | EXPERTOS EN TIC - COLOMBIA";

$keywords = "Aprender php, Php Backend, diseño de paginas web , php Orientado a Objetos, Aprender php - Elephant ";
 
?>

<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
   <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords;  ?>">
<link rel="shortcut icon" href="img/elephant.png">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Elephant | Aprende Programación Backend PHP </title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.min.css" rel="stylesheet">
  <link href="css/preload.css" rel="stylesheet">
  <style type="text/css">
    @media (min-width: 800px) and (max-width: 850px) {
            .navbar:not(.top-nav-collapse) {
                background: #1C2331!important;
            }
        }
  </style>
</head>

<body >
	<div id="contenedor">
        <div id="cargar"></div>
    </div>

<?php 

  require_once("views/fijas/nav.php");
  require_once("views/volatiles/intro.php");

	
 ?>

 

  <!--Main layout-->
  <main >
    <div class="container">
    	<?php 
    		require_once("views/volatiles/que_es_php.php");
    		require_once("views/volatiles/por_que_aprender_php.php");

    		require_once("views/volatiles/temario.php");
    	 ?>
      

      
      

      
      

    </div>
  </main>
 
  <!--Main layout-->
</div>
  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">
    <hr class="my-4">

    <!-- Social icons -->
    <div class="pb-4">
      
      <a href="" >
        Términos de uso
      </a>
|
      <a href="" >
        Política de rivacidad
      </a>
    </div>
    <!-- Social icons -->
    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2018 Copyright:
      <a href="https://www.array.com.co" target="_blank"> Elephant | ARRAY EXTIC </a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();



  </script>

  <script type="text/javascript">
       window.onload = function () {
            var contenedor = document.getElementById('contenedor');
        }
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    </script>

  
</body>




</html>