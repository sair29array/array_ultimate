<?php 
////////controladores / drivers ///////;
require_once("drivers/class_user.php");
require_once("drivers/class_comentarios.php");
require_once("drivers/class_control_de_vistas_lecciones.php");
require_once("drivers/class_actividades.php");
 $user = new user();
 $super_coment= new driv_comentario();
 $driver_leccion_view = new driver_leccion_prev_next();  // controla 
 //( leccion anterior y leccion siguiente  )
 $act = new actividades();
 ///////

session_start();
	if (!isset($_SESSION["login_user"])) 
	{
		//header("location: ./");
        ?> <script>window.location="../";</script> <?php 
	}
        if(isset($_GET["ds"]))
        {
            session_destroy();
            ?> <script>window.location="../";</script> <?php 
        }

        

 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Elephant | <?php echo $_SESSION["login_user"]; ?></title>
    <link rel="shortcut icon" href="../img/elephant.png">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.min.css" rel="stylesheet">
    <link href="css/preload.css" rel="stylesheet">
</head>

<body class="grey lighten-3">


<div id="contenedor">
        <div id="cargar"></div>
</div>
    <!--Main Navigation-->
    <header>
        <?php 
        require_once("views/fijas/header/nav.php");
        if (!isset($_GET["Watch"])) {
            require_once("views/fijas/header/menu.php");
        }else{
            require_once("views/fijas/header/menu_de_temas.php");
        }

        ?>
    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="pt-5 mx-lg-5">
        <div class="container-fluid mt-5">
            <?php 
               if (!isset($_GET["Et_id"]) && !isset($_GET["Watch"])) {
                    require_once("views/volatiles/temario.php");
               }elseif (@$_GET["Et_id"]=="Temario") {
                   require_once("views/volatiles/temario.php");
               }elseif (@$_GET["Et_id"]=="Perfil") {
                   require_once("views/volatiles/perfil_user.php");
               }elseif (@$_GET["Et_id"]=="PerfilErr") {
                   require_once("views/volatiles/perfil_user.php");
               }elseif (@$_GET["Watch"]=="Bienvenida") {
                   require_once("views/volatiles/Watch/Bienvenida.php");
               }elseif (@$_GET["Watch"]=="1iall") {
                   require_once("views/volatiles/Watch/introduccion_a_la_logica.php");
               }elseif (@$_GET["Watch"]=="que-es-pseint") {
                   require_once("views/volatiles/Watch/que_es_pseint.php");
               }elseif (@$_GET["Watch"]=="variables-y-tipos-de-datos") {
                   require_once("views/volatiles/Watch/variables-y-tipos-de-datos.php");
               }elseif (@$_GET["Watch"]=="acciones-secuenciales") {
                   require_once("views/volatiles/Watch/acciones-secuenciales.php");
               }elseif (@$_GET["Watch"]=="actividad-1") {
                   require_once("views/volatiles/Watch/actividades/actividad-1.php");
               }elseif (@$_GET["Watch"]=="definición-y-asignación") {
                   require_once("views/volatiles/Watch/definicion-y-asignacion.php");
               }elseif (@$_GET["Watch"]=="lectura-y-escritura") {
                   require_once("views/volatiles/Watch/lectura-y-escritura.php");
               }elseif (@$_GET["Watch"]=="expresiones") {
                   require_once("views/volatiles/Watch/expresiones.php");
               }elseif (@$_GET["Watch"]=="tipos-de-operadores") {
                   require_once("views/volatiles/Watch/tipos-de-operadores.php");
               }elseif (@$_GET["Watch"]=="expresiones-anidadas") {
                   require_once("views/volatiles/Watch/expresiones-anidadas.php");
               }elseif (@$_GET["Watch"]=="actividad-2") {
                   require_once("views/volatiles/Watch/actividades/actividad-2.php");
               }elseif (@$_GET["Watch"]=="proposiciones-lógicas") {
                   require_once("views/volatiles/Watch/proposiciones-logicas.php");
               }elseif (@$_GET["Watch"]=="estructuras-básicas-de-control") {
                   require_once("views/volatiles/Watch/estructuras-basicas-de-control.php");
               }elseif (@$_GET["Watch"]=="Condicionales") {
                   require_once("views/volatiles/Watch/Condicionales.php");
               }elseif (@$_GET["Watch"]=="bucle-mientras-y-repetir") {
                   require_once("views/volatiles/Watch/bucle-mientras-y-repetir.php");
               }elseif (@$_GET["Watch"]=="bucle-for") {
                   require_once("views/volatiles/Watch/bucle-for.php");
               }elseif (@$_GET["Watch"]=="Actividad-3") {
                   require_once("views/volatiles/Watch/actividades/Actividad-3.php");
               }elseif (@$_GET["Watch"]=="subprocesos-o-subprogramas") {
                   require_once("views/volatiles/Watch/subprocesos-o-subprogramas.php");
               }elseif (@$_GET["Watch"]=="funciones") {
                   require_once("views/volatiles/Watch/funciones.php");
               }elseif (@$_GET["Watch"]=="Arreglos-y-cadenas") {
                   require_once("views/volatiles/Watch/Arreglos-y-cadenas.php");
               }elseif (@$_GET["Watch"]=="Arreglos-unidimensionales") {
                   require_once("views/volatiles/Watch/Arreglos-unidimensionales.php");
               }elseif (@$_GET["Watch"]=="Arreglos-multidimensionales") {
                   require_once("views/volatiles/Watch/Arreglos-multidimensionales.php");
               }elseif (@$_GET["Watch"]=="Búsqueda-secuencial-de-arreglos") {
                   require_once("views/volatiles/Watch/Búsqueda-secuencial-de-arreglos.php");
               }elseif (@$_GET["Watch"]=="Algoritmos-de-ordenación") {
                   require_once("views/volatiles/Watch/Algoritmos-de-ordenación.php");
               }elseif (@$_GET["Watch"]=="Ordenación-por-selección-y-por-inserción") {
                   require_once("views/volatiles/Watch/Ordenación-por-selección-y-por-inserción.php");
               }elseif (@$_GET["Watch"]=="Ordenación-por-burbuja") {
                   require_once("views/volatiles/Watch/Ordenación-por-burbuja.php");
               }elseif (@$_GET["Watch"]=="Ordenación-por-burbuja-bidireccional") {
                   require_once("views/volatiles/Watch/Ordenación-por-burbuja-bidireccional.php");
               }elseif (@$_GET["Watch"]=="Proyecto-final") {
                   require_once("views/volatiles/Watch/Proyecto-final.php");
               }elseif (@$_GET["Watch"]=="Programación-de-juego-piedra-papel-o-tijeras") {
                   require_once("views/volatiles/Watch/Programación-de-juego-piedra-papel-o-tijeras.php");
               }elseif (@$_GET["Watch"]=="fin-unidad-1") {
                   require_once("views/volatiles/Watch/fin-unidad-1.php");
               }elseif (@$_GET["Watch"]=="Que-es-php") {
                   require_once("views/volatiles/Watch/que-es-php.php");
               }elseif (@$_GET["Watch"]=="Configuración-del-entorno-php") {
                   require_once("views/volatiles/Watch/Configuración-del-entorno-php.php");
               }elseif (@$_GET["Watch"]=="Hola-mundo") {
                   require_once("views/volatiles/Watch/Hola-mundo.php");
               }elseif (@$_GET["Watch"]=="Variables-y-tipos-de-variables") {
                   require_once("views/volatiles/Watch/Variables-y-tipos-de-variables.php");
               }elseif (@$_GET["Watch"]=="Constantes") {
                   require_once("views/volatiles/Watch/Constantes.php");
               }elseif (@$_GET["Watch"]=="Conversión-de-tipos") {
                   require_once("views/volatiles/Watch/Conversión-de-tipos.php");
               }elseif (@$_GET["Watch"]=="Concatenación-e-interpolación") {
                   require_once("views/volatiles/Watch/Concatenación-e-interpolación.php");
               }elseif (@$_GET["Watch"]=="Operadores-de-comparación") {
                   require_once("views/volatiles/Watch/Operadores-de-comparación.php");
               }elseif (@$_GET["Watch"]=="Operadores-aritmeticos") {
                   require_once("views/volatiles/Watch/Operadores-aritmeticos.php");
               }elseif (@$_GET["Watch"]=="Operadores-de-asiganación") {
                   require_once("views/volatiles/Watch/Operadores-de-asiganación.php");
               }elseif (@$_GET["Watch"]=="Operadores-lógicos-php") {
                   require_once("views/volatiles/Watch/Operadores-lógicos-php.php");
               }elseif (@$_GET["Watch"]=="Condicionales-php") {
                   require_once("views/volatiles/Watch/Condicionales-php.php");
               }elseif (@$_GET["Watch"]=="Sentencia-switch") {
                   require_once("views/volatiles/Watch/Sentencia-switch.php");
               }elseif (@$_GET["Watch"]=="Bucle-while-y-do-while") {
                   require_once("views/volatiles/Watch/Bucle-while-y-do-while.php");
               }elseif (@$_GET["Watch"]=="Bucle-for-php") {
                   require_once("views/volatiles/Watch/Bucle-for-php.php");
               }elseif (@$_GET["Watch"]=="Foreach") {
                   require_once("views/volatiles/Watch/Foreach.php");
               }elseif (@$_GET["Watch"]=="Array-indexado-y-asociativo") {
                   require_once("views/volatiles/Watch/Array-indexado-y-asociativo.php");
               }elseif (@$_GET["Watch"]=="Array-Multidimensional") {
                   require_once("views/volatiles/Watch/Array-Multidimensional.php");
               }elseif (@$_GET["Watch"]=="Funciones-php") {
                   require_once("views/volatiles/Watch/Funciones-php.php");
               }elseif (@$_GET["Watch"]=="Argumentos-de-funciones") {
                   require_once("views/volatiles/Watch/Argumentos-de-funciones.php");
               }elseif (@$_GET["Watch"]=="Return") {
                   require_once("views/volatiles/Watch/Return.php");
               }elseif (@$_GET["Watch"]=="Funciones-variables-y-anonimas") {
                   require_once("views/volatiles/Watch/Funciones-variables-y-anonimas.php");

              }elseif (@$_GET["Watch"]=="Introducción-a-la-POO") {
                   require_once("views/volatiles/Watch/Introducción-a-la-POO.php");
              }elseif (@$_GET["Watch"]=="Clases-y-objetos") {
                   require_once("views/volatiles/Watch/Clases-y-objetos.php");
              }elseif (@$_GET["Watch"]=="Instancias") {
                   require_once("views/volatiles/Watch/Instancias.php");
              }elseif (@$_GET["Watch"]=="Herencia") {
                   require_once("views/volatiles/Watch/Herencia.php");
              }elseif (@$_GET["Watch"]=="Cookie-y-Session") {
                   require_once("views/volatiles/Watch/Cookie-y-Session.php");
              }elseif (@$_GET["Watch"]=="Session") {
                   require_once("views/volatiles/Watch/Session.php");
              }elseif (@$_GET["Watch"]=="Cookie") {
                   require_once("views/volatiles/Watch/Cookie.php");
              }elseif (@$_GET["Watch"]=="Namespace") {
                   require_once("views/volatiles/Watch/Namespace.php");
              }elseif (@$_GET["Watch"]=="Clases-anonimas") {
                   require_once("views/volatiles/Watch/Clases-anonimas.php");
              }elseif (@$_GET["Watch"]=="CSPRNG-y-función-intdiv") {
                   require_once("views/volatiles/Watch/CSPRNG-y-función-intdiv.php");
              }elseif (@$_GET["Watch"]=="Serialize-y-unserialize") {
                   require_once("views/volatiles/Watch/Serialize-y-unserialize.php");
              }elseif (@$_GET["Watch"]=="Diferencia-entre-las-apps-web-y-las-páginas-web") {
                   require_once("views/volatiles/Watch/Diferencia-entre-las-apps-web-y-las-páginas-web.php");
              }elseif (@$_GET["Watch"]=="MVC-y-comienzo-de-proyecto") {
                   require_once("views/volatiles/Watch/MVC-y-comienzo-de-proyecto.php");
              }elseif (@$_GET["Watch"]=="Creando-un-login") {
                   require_once("views/volatiles/Watch/Creando-un-login.php");
              }elseif (@$_GET["Watch"]=="Registro-de-usuarios") {
                   require_once("views/volatiles/Watch/Registro-de-usuarios.php");
              }elseif (@$_GET["Watch"]=="Recuperando-credenciales") {
                   require_once("views/volatiles/Watch/Recuperando-credenciales.php");
              }elseif (@$_GET["Watch"]=="Categorías-de-foros") {
                   require_once("views/volatiles/Watch/Categorías-de-foros.php");
              }elseif (@$_GET["Watch"]=="Creación-de-foros") {
                   require_once("views/volatiles/Watch/Creación-de-foros.php");
              }elseif (@$_GET["Watch"]=="URLs-Amigables") {
                   require_once("views/volatiles/Watch/URLs-Amigables.php");
              }








             ?>
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
   

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

    <script type="text/javascript">
        // abrir psint virtual
         function window_open_pseint()
            {
            miVentana = window.open( "https://www.rollapp.com/launch/pseint", "nombrePop-Up", "width=380,height=500, top=85,left=50");
            }
           function window_open_php()
            {
            miVentana = window.open( "http://www.runphponline.com/", "nombrePop-Up", "width=720,height=480, top=85,left=50");
            }
    </script>

</body>

</html>