<?php 
///PROCESOS DE INICIALZACIÓN DEL USER
session_start();
include("config/process.php");
$sair = new process();

if (isset($_SESSION['user_log'])) 
{

    $user = $_SESSION['user_log']; // email del user
    // consulta de datos del user:
   $consult_duser =  $sair->consulta_datos_user_log($user);
   foreach ($consult_duser as $user_ ) 
   {
        $id_user = $user_["id"];
        
       $name_user = $user_['nombres'];
       $apellidos_user = $user_['apellidos'];   
   }
}
//////////////Mensaje de bienvenida - cuando el user inicia sesión //////////////
/////////////////////////////////////
// TITULO  Y DESCRIPCIÓN POR PÁGINA////
$title ="Array | Expertos en TIC";

$description = "Array - Expertos en TIC | Somos una empresa colombiana cuyo objetivo principal es trabajar con TIC's (Tecnologias de la Información y las Comunicaciones) desarrollando mejores herramientas que facilitan el trabajo diario de cualquier empresa. | CEO - Sair Sánchez - Array";

$keywords = "Tecnologías de la Información y las Comunicaciones, creación de comerciales para mi empresa, diseño de paginas web , Sair Sánchez - array, Bienvenido a array";
switch (@$_GET[":"]) 
{
    case "iniciar-sesion":
       $title ="Array | Iniciar sesión";
       $description = "Inicia sesión en array y mira tu actividad, contrata servicios y compra productos exclusivos de array | Expertos en TIC";
       $keywords = "array, array iniciar sesión, array login, Sair Sánchez - array, empresas que ofrezcan servicios de tecnología"; 
        break;
    case "crear-cuenta":
       $title ="Array | Crear cuenta";
       $description  = "Registrate y tendras grandes privilegios, mejores servicios y una mejor atención. Podrás contratar nuestros servicios y comprar nuestros productos y software exclusivo.";
       $keywords = "crear cuenta array, registrarme array, array registro, array Sign up, Tecnologías de la Información y las Comunicaciones";
        break;
    case "usuarios":
       $title ="Array | iniciar sesión o crear cuenta ";
       $description = "";
       $keywords = "";
        break;
    case "servicios-array":
       $title ="Array | Servicios ";
       $description = "Te ofrecemos calidad y cumplimiento en cada uno de nuestros servicios. En array diseñamos y desarrollamos sistemas informáticos en el nuevo paradigma de la WEB 2.0. Brindamos servicios como: Soporte tecnico de computadoras y redes locales, Creamos comerciales para radio y tv. Contamos con un excelente grupo de diseñadores gráficos que estan dispuestos a entregarle a nuestros clientes una buena imagen visual para sus empresas.";
       $keywords = "cuñas para radio, comerciales para empresa,Tecnologías de la Información y las Comunicaciones,servicios array, soluciones informáticas, nuestros servicios,¿Cuánto cuesta la creación de una página web?, diseño gráfico para empresas ";
        break;
    case "quienes-somos":
       $title ="Array | Quienes somos ";
       $description = "Somos una empresa colombiana cuyo objetivo principal es trabajar con TICs (Tecnologias de la Información y las Comunicaciones) desarrollando mejores herramientas que facilitan el trabajo diario de cualquier empresa.";
       $keywords = "Empresa array, array colombia, que es un array, empresas tecnológicas en colombia";
        break;
    case "productos-array":
       $title ="Array | Productos ";
       $description = "En array ponemos nuestros productos a tu disposición, para que lleves contigo Equipos de computo y muebles para tu empresa.
 Sofware exclusivo de ArrayDev.
 Repuestos y accesorios para computadoras";
       $keywords = "Repuestos y accesorios para computadoras, Software para empresa, venta de Computadoras y accesorios";
        break;
    case "Portafolio-array":
       $title ="Array | Portafolio de proyectos ";
       $description = "En array nos da gusto poder presentarte nuestro portafolio de proyectos exitosos, mediante el cual ponemos a tu disposición nuestra experiencia.";
       $keywords = "templates para páginas web, array paginas, proyectos finalizados array, trabajos de array";
        break;
   
    case "MiCuenta":
       $title = $name_user." ".$apellidos_user." | Array";
       $description = "Mira tu actividad con nosotros, descarga tus facturas, descarga software exclusivo de arrayDev";
       $keywords = "Iniciar sesión array, mi cuenta en array, array facturas, descargar factura, cuanto debo en array";
        break;
 
}

switch (@$_GET["servicios"]) 
{
    case 'Diseño_De_Paginas_web':
        $title ="Array | Diseño de páginas web";
        break;
    case 'radio_online_streaming_hd':
        $title ="Array | Radio online y streaming HD";
        break;
    case 'Sofware-Multipropósito':
        $title ="Array | Software Multipropósito";
        break;
    case 'DiseñoGráficoCorporativo':
        $title ="Array | Diseño Gráfico Multipropósito";
        break;
    case 'ProdComerciales':
        $title ="Array | Producción de comerciales para radio, tv e internet";
        break;
    case 'MantSoporteTécnico':
        $title ="Array | Mantenimiento y soporte técnico para empresas";
        break;
    
}


/////////////////////////////////////////

 ?>
<!DOCTYPE html>
<html lang="es" class="full-height" prefix="og: http://ogp.me/ns#">

<head>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="691814b4-a7c8-44d9-8986-8c39ff2ebf52";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no">
    <meta name="description" content="<?php echo $description; ?>">
    <meta name="keywords" content="<?php echo $keywords;  ?>">
    <meta name="author" content="Sair Sánchez - Array - array.com.co">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="theme-color" content="#ff3a5f">
    <!-- tags Google -->
    
    <!-- og tags principales -->
    <?php 
    if (!isset($_GET[':']) ) {
        include("views/volatiles/og-tags/principal.php");
    } else if ($_GET[":"]=="servicios-array"){
        include("views/volatiles/og-tags/servicios.php");
    }else if ($_GET[":"]=="productos-array"){
        include("views/volatiles/og-tags/productos.php");
    }else if ($_GET[":"]=="quienes-somos"){
        include("views/volatiles/og-tags/quienes-somos.php");
    }
    ?>
    <!-- titulo de la pagina-->
    <title><?php echo $title; ?></title>
    <!-- icono de la pagina -->
    <link rel="shortcut icon" href="img/ISOTIPOv2.png">
    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- fuentes -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- estilos propios -->
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" type="text/css" href="css/boton_google.css">
    <!-- Estilos de slider vertical de texto -->
    <link rel='stylesheet' href='css/slick.min.css'>
    <link rel='stylesheet' href='css/slick-theme.min.css'>
      <!-- estilos galeria -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="css/galeria.css">
</head>

<body class="barra-x-hidden">
   

    <!--loader page -->
    <div id="contenedor">
        <div id="cargar"></div>
    </div>
    <!-- fin loader page -->
    <!--Boton de ir arriba-->
    <i class="ir-arriba fa fa-arrow-up fa-2x"></i>
    <!--Fin Boton ir arriba-->
    <header>
        <?php 
        	// vistas fijas - navbar
        	include("views/fijas/navbar.php");

            if (!isset($_GET[':'])  && !isset($_GET["servicios"])) 
            {
        	 /// vistas volatil - slider
            include("views/volatiles/principal/slider.php");
            }
         ?>
    <main class="barra-x-hidden barra-y-hidden">
       <?php 
        if (!isset($_GET[':']) && !isset($_GET["servicios"])) 
        {

            //vistas pagina principal - volatiles
            include("views/volatiles/principal/SomosTic.php");
            include("views/volatiles/principal/herramientas.php");
            include("views/volatiles/principal/metodologia.php");
            include("views/volatiles/principal/RedesSociales.php");
        }else if (@$_GET[":"]=="servicios-array") {
            include("views/volatiles/servicios.php");
        }else if (@$_GET[":"]=="productos-array") {
            include("views/volatiles/productos.php");
        }else if (@$_GET[":"]=="Portafolio-array") {
            include("views/volatiles/nosotros/portafolio/portafolio.php");
        }else if (@$_GET[":"]=="iniciar-sesion") {
            include("views/volatiles/usuarios/iniciar-sesion.php");
        }else if (@$_GET[":"]=="crear-cuenta") {
            include("views/volatiles/usuarios/crear-cuenta.php");
        }else if (@$_GET[":"]=="quienes-somos") {
            include("views/volatiles/nosotros/quienes-somos.php");
        }else if (@$_GET[":"]=="MiCuenta") {
            include("views/volatiles/usuarios/miCuenta.php");
        }else if (@$_GET[":"]=="Politicas-de-Privacidad") {
            include("views/volatiles/nosotros/politicas.php");
        }else if (@$_GET[":"]=="serviceResp8/8800/22/s-act_n8ll") {
            ?><script>location.href="./?:=MiCuenta"</script> <?php 
        }

        // para las vistas de los servicios
        if (!isset($_GET["servicios"])) {
        }else if ($_GET['servicios']=="Diseño_De_Paginas_web") {
        include("views/volatiles/servicios/DisenoPaginasWeb/dipg.php");
        }else if ($_GET['servicios']=="radio_online_streaming_hd") {
        include("views/volatiles/servicios/RadioOnlineStreamingHd/RadioOnlineIndex.php");
        }else if ($_GET['servicios']=="Sofware-Multipropósito") {
        include("views/volatiles/servicios/SoftwareMultiproposito/softwareMultipropositoIndex.php");
        }else if ($_GET['servicios']=="DiseñoGráficoCorporativo") {
        include("views/volatiles/servicios/DisenoGraficoCorporativo/DisenoGraficocIndex.php");
        }else if ($_GET['servicios']=="ProdComerciales") {
        include("views/volatiles/servicios/ProdComerciales/PcomercialesIndex.php");
        }else if ($_GET['servicios']=="MantSoporteTécnico") {
        include("views/volatiles/servicios/SoporteTecnico/ManSuportIndex.php");
        }

        ?>    
    </main>
    <?php 
            // vistas fija - pagina fija
    include("views/fijas/footer.php");

     ?>
    <!-- JQuery-->
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap dropdown -->
    <script type="text/javascript" src="js/popper.min.js"></script>
    <!-- Bootstrap  JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- MDB  JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <script>new WOW().init();</script>
    <!--Script Loader Page -->
    <script type="text/javascript">
        window.onload = function () {
            var contenedor = document.getElementById('contenedor');
        }
        contenedor.style.visibility = 'hidden';
        contenedor.style.opacity = '0';
    </script>
    <!-- FIN Script Loader Page -->
    <!-- ir arriba -->
    <script>
        $(document).ready(function () {
            $('.ir-arriba').click(function () {
                $('body, html').animate({
                    scrollTop: '0px'
                }, 800);
            });

            $(window).scroll(function () {
                if ($(this).scrollTop() > 0) {
                    $('.ir-arriba').slideDown(600);
                } else {
                    $('.ir-arriba').slideUp(600);
                }
            });

            /*hacia abajo*/
            $('.ir-abajo').click(function () {
                $('body, html').animate({
                    scrollTop: '1000px'
                }, 1000);
            });

        });
    </script>
    <!-- script galeria -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
    <script>
        baguetteBox.run('.tz-gallery');
    </script>
    <!-- script slider de texto vertical -->
    <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.5.9/slick.min.js'></script>
    <script type="text/javascript">
        $('.slider').slick({ 
            vertical: true,
            autoplay: true,
            autoplaySpeed: 3500,
            speed: 500
        });
    </script>       
</body>

</html>

<?php 
    /////////////////////////////////////////////////////////////////////////
////////////////ACTIVACIÓN O DAR DE ALTA A USERS///////////////////////
///////////////////////////////////////////////////////////////////////////////
if (isset($_GET["activate"])) 
{
    $email = $_GET["981129()//array_user-act"];
    $sair->ActivarDardeAltaAuser($email);
}
?>