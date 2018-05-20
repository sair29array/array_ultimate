<?php  ?>
<form method="POST" action=""> 
<div class="row justify-content-center text-center mb-2 margen-superior">
                <div class="col-12 col-md-9 mt-4  wow zoomIn" data-wow-delay="0.4s">
                    <h2 class="mt-5 mb-0 ">
                        <span class="banner-title">Diseño Gráfico Corporativo</span>
                    </h2>
                    
                    
                </div>

             
<?php if (!isset($_POST['continuar_'])  && !isset($_GET["solicitud"]) && !isset($_GET["solicitud-enviada"])){  ?>
                <div class="col-12 col-md-3 mt-4  wow zoomIn" data-wow-delay="0.4s">
                    <h3 class="mt-5 mb-0"></h3>
                    <?php 

                    if (!isset($_SESSION["user_log"])) {
                      ?>
                         <button  type="submit" name="continuar_" class="btn boton-c btn-md mb-5">Continuar <i class="fa fa-caret-right"></i></button>
                        <?php 
                    }else if ($user_["dealta"] == 1) {
                        ?>
                         <button  type="submit" name="continuar_" class="btn boton-c btn-md mb-5">Continuar <i class="fa fa-caret-right"></i></button>
                        <?php 
                      }else{
                        ?>
                          <a class="btn boton-c btn-md mb-5" href="./?:=serviceResp8/8800/22/s-act_n8ll">
                            Continuar <i class="fa fa-caret-right"></i>
                          </a>
                        <?php 
                      }
                     ?>
                </div>
 <?php }else{
 	      if (isset($_SESSION["user_log"])  && !isset($_GET["solicitud-enviada"])){ 
 	      $email = $user_['email'];
 			$datos_user = $sair->verificarSiLosDatosEstanCompletos($email);// verifica si los datos del user se encuentran completos
    	   if ($datos_user !== 0 ) { /// si los datos estan completos 
 	      	if ($user_["empresa"] != "") {

 	?>
 				<div class="col-12 col-md-3 mt-4 wow zoomIn" data-wow-delay="0.4s">
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuarsi" class="btn boton-c btn-md mb-5">Si <i class="fa fa-caret-right"></i></button>
                      <button  type="submit" name="continuarno" class="btn boton-c btn-md mb-5">No <i class="fa fa-caret-right"></i></button>
                </div>
 	<?php 
 			}else
 			{
 				?>
 				<div class="col-12 col-md-3 mt-4  wow zoomIn" data-wow-delay="0.4s">
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuar_2" class="btn boton-c btn-md mb-5">Continuar <i class="fa fa-caret-right"></i></button>

                </div>
 				<?php 
 			}

 		   }else //// si los datos no estan completos -- si hace falta algo
 		   	{
 		   		?>
 				<div class="col-12 col-md-3  wow zoomIn" data-wow-delay="0.4s">
                    <h3 class="mt-5 mb-0"></h3>
                     <button  type="submit" name="continuar_contrato_llenar_form" class="btn boton-c btn-md mb-5">Continuar <i class="fa fa-caret-right"></i></button>

                </div>
 				<?php 

 		   	}
 		}
 }


  ?>
</div>

<div class="row  align-items-center wow zoomIn" data-wow-delay="0.4s">
				<?php if (!isset($_POST['continuar_']) && !isset($_GET["solicitud"]) && !isset($_GET["solicitud-enviada"])){  ?>
                    <!--Grid column-->
                    <div class="col-md-12 col-lg-12 text-center mb-2">
                        <p class="mb-0 ">
                            <span class="title-rds">Nos gusta trabajar contigo para que tu empresa sea más productiva. Vamos a crear la imagen de tu empresa ya mismo.</span> <p class="blue-text">Selecciona lo que necesitas y luego da un clic en continuar.</p>
                            </>
                    </div>
                 <?php } ?>
                </div>