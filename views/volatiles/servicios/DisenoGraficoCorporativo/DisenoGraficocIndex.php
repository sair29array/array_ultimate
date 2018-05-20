<?php  ?>


    <!-- servicios -->
    <section class="diseño-web">
        <div class="container">

            <?php if (!isset($_GET['solicitud'])) 
            { // si no se ha solicitado  ningun plan .. entonces se muestran los planes y el titulo principal del servicio
            	if (!isset($_GET["solicitud-enviada"])) 
            	{
                include("TituloPrincipal.php");
                include("Planes.php");
                }
            }else  {
            	include("TituloPrincipal.php");
                include("FormRegEmpresa.php");
           }
           if (isset($_GET["solicitud-enviada"])) {
           	include("TituloPrincipal.php");
           	include("solicitud-enviada.php");
           }

             ?>
            
        </div>
    </section>
