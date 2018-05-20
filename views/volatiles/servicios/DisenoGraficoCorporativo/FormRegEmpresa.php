<?php 
$email = $user_['email'];
 $datos_user = $sair->verificarSiLosDatosEstanCompletos($email);// verifica si los datos del user se encuentran completos
    if ($datos_user !== 0 ) {

if (!isset($_GET['solicitud-enviada'])) 

{
	$nombre_empresa = $user_["empresa"];
	$nit_empresa = $user_["nit_empresa"];

		
	?> 
<div class="row py-3 align-items-center wow zoomIn" data-wow-delay="0.4s">
				
              <?php if ($nombre_empresa !=""  ) {  ?>
                    <div class="col-md-12 col-lg-12 text-center  mt-0">
                        <p class="mb-0 ">
                            <span class="title-rds"><h3>¿El servicio que estás a punto de solicitar es para tu empresa?</h3></span> </p>
                    </div>
             <?php  }else{
             	?>
             	 <div class="col-md-12 col-lg-12 text-center  mt-0">
                        <p class="mb-0 ">
                            <span class="title-rds"><h3>¿El servicio que estás a punto de solicitar es para tu empresa? ¡Es el momento de registrarla!</h3></span> </p>
                    </div>
             	<?php 
             }

              ?> 
</div>
 <div class="container">
    	<div class="row">
    		
    		<div class="col-12 col-md-6 mt-3 mb-5 wow fadeInLeft" data-wow-delay="0.4s">
	    		<!-- tarjeta-->
            <div class="card" >
                <div class="card-header">
                    <p class="h4 text-center">Nombre de tu empresa</p>
                  
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-users prefix grey-text"></i>
                            <input  name="nombre_empresa" type="text" id="materialFormCardNameEx" class="form-control" value="<?php echo $nombre_empresa; ?>">
                           
                        </div>

                    <!-- Material form register -->

                </div>
                <!-- Card body -->
            </div>
            <!-- Card -->
    		</div>
    		






    		<div class="col-12 col-md-6 mt-3 mb-5 wow fadeInRight" data-wow-delay="0.4s">
			<!-- tarjeta-->
            <div class="card" >
                <div class="card-header">
                    <p class="h4 text-center">Nit de la empresa</p>
                   
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                    
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-ellipsis-h prefix grey-text"></i>
                            <input  name="nit_empresa" value="<?php echo $nit_empresa; ?>"   type="number" id="materialFormCardNameEx"  class="form-control">
                            </label>
                        </div>
                    <!-- Material form register -->
                </div>  
                <!-- Card body -->
            </div>
            <!-- Card -->                        
    		</div>
    	</div>
    	</div>



   
    	
 </div>
   
 </form> <!-- El formulario termina aqui y empieza en tituloplanbasico.php -->

 <?php 
 	if (isset($_POST["continuarsi"])) {
 		$id_user = $user_["id"];
 		$ne = $_POST["nombre_empresa"];
 		$nie = $_POST["nit_empresa"];
 		
 		

		$id_planes = $_GET["solicitud"]; // aqui vienen los números o id's de los planes



 		 // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
 		$facturacion_empresa = 1;
        $servicio = "diseño_grafico_corporativo";
        //$fecha = date("d")." de ". date("m"). " de 20". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////

 		$sair->registrar_solicitud_contrato($id_user,$servicio,$id_planes,$facturacion_empresa);

 		?> <script type="text/javascript">window.location="./?servicios=DiseñoGráficoCorporativo&solicitud-enviada"</script> <?php 


 	}


// si esto pasa es por que ya el user tiene una empresa registrada :
 	///////////////////////////////////////////
 	if (isset($_POST["continuarno"])) 
 	{
        $id_user = $user_["id"];
 		$ne = $_POST["nombre_empresa"];
 		$nie = $_POST["nit_empresa"];
 		
 		

		$id_planes = $_GET["solicitud"]; // aqui vienen los números o id's de los planes



 		 // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
 		$facturacion_empresa = 0;
        $servicio = "diseño_grafico_corporativo";
        //$fecha = date("d")." de ". date("m"). " de 20". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////

 		$sair->registrar_solicitud_contrato($id_user,$servicio,$id_planes,$facturacion_empresa);

 		?> <script type="text/javascript">window.location="./?servicios=DiseñoGráficoCorporativo&solicitud-enviada"</script> <?php 


 	}

 	if (isset($_POST["continuar_2"])) 
 	{
       	$id_user = $user_["id"];
 		$ne = $_POST["nombre_empresa"];
 		$nie = $_POST["nit_empresa"];
 		
 		if ($ne == "" && $nie == "")  
 		{
 			$facturacion_empresa = 0;
 		}else{
 			$sair->add_empresa_to_user_pp_dw($ne,$nie,$id_user);
 			$facturacion_empresa = 1;
 		}
 		

		$id_planes = $_GET["solicitud"]; // aqui vienen los números o id's de los planes



 		 // ENVIAR SOLICITUD AL CORREO contacto@array.com.co
 		
        $servicio = "diseño_grafico_corporativo";
        //$fecha = date("d")." de ". date("m"). " de 20". date("y"); 
        $id_user = $user_["id"];
        $nombres_completos = $user_["nombres"] . " " .$user_["apellidos"];
        $cedula = $user_["cedula"];
        $empresa = $user_["nit_empresa"]." - ". $user_["empresa"];
        $sair->SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa);

        ///////////////////////

 		$sair->registrar_solicitud_contrato($id_user,$servicio,$id_planes,$facturacion_empresa);

 		?> <script type="text/javascript">window.location="./?servicios=DiseñoGráficoCorporativo&solicitud-enviada"</script> <?php 
 	}


 	

} else 
	{
		include("solicitud-enviada.php");
	}
}else /////// si no estan los datos completos/////////////////////////////
{
	// esto viene del index y de la DB
 	$nombres  = strtoupper($user_['nombres']);
 	$Apellids = strtoupper($user_['apellidos']);
 	$cedula = $user_['cedula'];
 	$email = $user_['email'];
 	$pass = $user_['pass'];
 	$celular = $user_['celular'];
 	$servicio = "Plan Básico Diseño & desarrollo De páginas web";
 	$nombre_empresa = strtoupper($user_['empresa']);
 	$nit_empresa = $user_['nit_empresa'];
 	$depar_ciudad = strtoupper($user_['departamento_ciudad']);

	?>
<form action="" method="POST">
	<div class="container">
    	<div class="row">
    		
    		<div class="col-12 col-md-6 mt-3 mb-5 wow fadeInLeft" data-wow-delay="0.4s">
	    		<!-- tarjeta-->
            <div class="card" >
               
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input required="required" name="nombres" type="text" id="materialFormCardNameEx" class="form-control" value="<?php echo $nombres; ?>">
                            <label for="materialFormCardNameEx" class="font-weight-light">Nombres</label>
                        </div>

                         <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input required="required" name="apellidos" type="text" id="materialFormCardNameEx" class="form-control" value="<?php echo $Apellids; ?>" >
                            <label for="materialFormCardNameEx" class="font-weight-light">Apellidos</label>
                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text disabled"></i>
                            <input disabled="true"  required="required" name="correo"  value="<?php echo $email; ?>" type="email" id="materialFormCardEmailEx" class="form-control">
                            <label for="materialFormCardEmailEx" class="font-weight-light">Correo</label>
                        </div>

                       

                     

                       
                    <!-- Material form register -->

                </div>
                 
                <!-- Card body -->

            </div>
            <!-- Card -->
    		</div>
    		






    		<div class="col-12 col-md-6 mt-3 mb-5 wow fadeInRight" data-wow-delay="0.4s">
			<!-- tarjeta-->
            <div class="card" >
                
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                    
                        <!-- Material input text -->
                        <!--div class="md-form">
                            <i class="fa fa-address-card prefix grey-text"></i>
                            <input <?php //if ($cedula !== "" ) {
                            	?> disabled = "true"<?php // $ActualizarCedula = 0; // No se actualiza cc
                           // }else{$ActualizarCedula = 1;} ?> required="required" name="cedula" value="<?php // echo $cedula; ?>"   type="number" id="materialFormCardNameEx"  class="form-control">
                            <label for="materialFormCardNameEx" class="font-weight-light">Número de cédula</label>
                        </div-->

                         <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-phone prefix grey-text"></i>
                            <input name="celular" value="<?php echo $celular; ?>" required="required"  type="number" id="materialFormCardNameEx" class="form-control">
                            <label  for="materialFormCardNameEx" class="font-weight-light">Número de contacto</label>
                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                            <i class="fa fa-map-marker prefix grey-text"></i>
                            <input required="required"  name="ubicacion" value="<?php echo $depar_ciudad; ?>"  type="text" placeholder="Ej: Montería - Córdoba" id="materialFormCardEmailEx" class="form-control"  >
                            <label for="materialFormCardEmailEx" class="font-weight-light">Departamento y ciudad</label>
                        </div>

                        

                        
                    
                    <!-- Material form register -->

                </div>
                
                <!-- Card body -->

            </div>
            <!-- Card -->
                         
    		</div>
    	</div>
    	</div>



   
    	
 </div>
   
 </form> <!-- El formulario termina aqui y empieza en tituloplanbasico.php -->

 <?php 
 	if (isset($_POST["continuar_contrato_llenar_form"])) 
 	{

 		$nombres = $_POST["nombres"];
 		$apellidos = $_POST["apellidos"];
 		//$email = $_POST["email"];
 		$cedula = "";
 		$celular = $_POST["celular"];
 		$ubicacion = $_POST["ubicacion"];
 		$id_user = $user_["id"];
 		$plan = $_GET["solicitud"];


 		$sair->ActualizarDatosParaSolicitudDelServicioDisenoGraficoCorporativo($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,"diseno_grafico_corporativo",$plan);
 	}
}



  ?>