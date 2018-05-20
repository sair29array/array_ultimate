<form method="POST" action="">
<div class="row justify-content-center text-center  margen-superior">
                <div <?php if (isset($_GET["datos"]) && !isset($_SESSION["user_log"])) {
                	?> class="col-12 col-md-12" <?php 
                }else { ?> class="col-12 col-md-9" <?php  } ?> >
                    <h2 class="mt-5 mb-0 wow zoomIn" data-wow-delay="0.4s">
                        <span class="mantenimiento__title">Mantenimiento y soporte técnico</span>
                    </h2>
                   
                </div>
                <?php 
                	if (!isset($_GET["solicitud-enviada"])) { 
                	?>
                <div  class="col-12 col-md-3 mt-5 mb-0 wow zoomIn" data-wow-delay="0.4s">
                <?php }  ?>


                	<?php if (!isset($_GET["datos"]) ) 
                	{ // form de datos del user
                		if (!isset($_GET["reg_empresa"]) ) {
                		?> 
                	
                	   <?php 

                    if (!isset($_SESSION["user_log"])) {
                         ?> <a href="./?servicios=MantSoporteTécnico&datos">
                        <button type="button" name="solicitar_servicio" class="btn boton-c btn-md mb-5">
                        Solicitar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    </a> <?php 
                    }
                    else if ($user_["dealta"]==1) {
                        ?> <a href="./?servicios=MantSoporteTécnico&datos">
                        <button type="button" name="solicitar_servicio" class="btn boton-c btn-md mb-5">
                        Solicitar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    </a> <?php 
                    }else
                    {
                        ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll">
                        <button type="button" name="solicitar_servicio" class="btn boton-c btn-md mb-5">
                        Solicitar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    </a> <?php 
                    }

                     ?>

                    <?php }else{ // si el usuario llegó a el form de empresa
                    	    if (isset($_SESSION["user_log"]))
                    	    { 
                    		   if (!isset($_GET["solicitud-enviada"])) 
                    		   {
                    			if ($user_["empresa"] !== "") 
                    			{ // si existe una empresa
                    				?>
                    				<button type="submit" name="continuarsi" class="btn boton-c btn-md mb-5">
                       		 		Si
                            		<i class="fa fa-caret-right"></i>
                    				</button>
                    				<button type="submit" name="continuarno" class="btn boton-c btn-md mb-5">
                       		 		No
                            		<i class="fa fa-caret-right"></i>
                    				</button>
                    				<?php 
                    			}else{ 
                    			?>
                    			
                        		<button type="submit" name="reg_empresa" class="btn boton-c btn-md mb-5">
                       		 	Continuar
                            	<i class="fa fa-caret-right"></i>
                    			</button>
                    			
                    			<?php 
                    		    }
                    		  }
                    		 }
                    		}

                     }else{
                    	if (isset($_SESSION["user_log"])){ 
                    	?>
                    	
                        <button type="submit" name="actualizadatos" class="btn boton-c btn-md mb-5">
                        Continuar
                            <i class="fa fa-caret-right"></i>
                    </button>
                    
                    	<?php 
                      }
                    }  ?>

                </div>
</div>


<?php if (isset($_GET["datos"])) 
{ 
	if (isset($_SESSION["user_log"])) {
	
	$email = $user_['email'];
        $datos_user = $sair->verificarSiLosDatosEstanCompletos($email);// verifica si los datos del user se encuentran completos

		if ($datos_user == 0) {
			?><p class="banner-txt text-center">Debes completar los datos que hacen falta para continuar con la solicitud. </p> <?php 
		}else
		{
			?><p class="banner-txt text-center">Anteriormente actualizaste tus datos, sino deseas actualizar tu información, solo da un clic en continuar. </p> <?php
		}


	}
}
if (isset($_SESSION["user_log"])){ 
if (isset($_GET["reg_empresa"]) && !isset($_GET["solicitud-enviada"])) 
{
	if ($user_["empresa"] == "") 
		{
			?><p class="banner-txt text-center">¿El servicio que estás a punto de solicitar es para tu empresa? ¡Es el momento de registrarla! </p> <?php
		}else{
			?><p class="banner-txt text-center">¿El servicio que estás a punto de solicitar es para tu empresa?</p> <?php
		}
}
}
 ?>
<hr class="mt-0">
                    
               