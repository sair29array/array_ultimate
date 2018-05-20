<?php 
	if (!isset($_GET["datos"])) 
	{
		if (!isset($_GET["reg_empresa"])) {

?> 
<section class="section-caracteristicas">
            <div class="container">
                <div class="row">
                    
                </div>
                <div class="row justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.4s">
                    <!-- <div class="col-12 col-sm-5 text-center mb-5">
                        <img class="img img-fluid" src="img/banner-2.jpg" alt="">
                    </div> -->
                   <!--Card-->
        		
   				<!--Card-->
    					<!--Carousel Wrapper-->
<div id="carousel-example-1z" class=" col-12 col-md-6  mr-0 carousel slide carousel-fade" data-ride="carousel">
    <!--Indicators-->
    <ol class="carousel-indicators">
        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->
    <!--Slides-->
    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active">
            <img style="max-height: 100%; max-width: 100%;" class="img-fluid" src="img/Soportetecnico/2.jpg" alt="First slide">
        </div>
        <div class="carousel-item ">
            <img style="max-height: 100%; max-width: 100%;" class="img-fluid" src="img/Soportetecnico/3.jpg" alt="First slide">
        </div>
        <div class="carousel-item ">
            <img style="max-height: 100%; max-width: 100%;" class="img-fluid" src="img/Soportetecnico/1.jpg" alt="First slide">
        </div>       
    </div>
    <!--/.Slides-->
    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
				
			
				<div class="col-12 col-md-6 mt-1  mr-0">
					<p class="font-weight-bold">Plan de Soporte Técnico Integral.</p>
					<p class="text-justify">Expertos en el sostenimiento de toda su infraestructura de red, datos,
                     computadores y periféricos. Mantenimientos preventivos y correctivos incluidos, 
                     visitas periódicas programadas para Prevención y Predicción de daños, reparación de 
                     computadores a domicilio.</p>
                     <p>Además del mantenimiento normal periódico que se le 
                     hace a los computadores, estaremos pendientes de que todo funcione 
                     bien. Y si falla, ahí estaremos.</p>
					<div class="card">
                    
                    </div>
                    <div class="btn btn-md btn-info text-left d-none d-sm-none d-md-block">
                        <strong>Le brindamos precios flexibles, solicite el servicio y espere nuestra llamada.</strong> 
                    </div>
                    <div class="btn btn-md btn-info text-center d-block d-sm-block d-md-none">
                        Precios flexibles. 
                    </div>
				</div>

                </div>
            </div>
        </section>

      <br>  


<?php 	
		} // sierre de - si no existe : reg_empresa
		else{
				if (isset($_SESSION["user_log"])) 
  			{
  				include("formulario_reg_empresa.php");
  			}else{
  				include("NoHasIniciadoSesion.php");
  			}
		}	
	}else{
		
		if (isset($_SESSION["user_log"])) 
  			{
  				include("formulario_de_datos_del_user.php");
  			}else{
  				include("NoHasIniciadoSesion.php");
  			}

	}
 ?>