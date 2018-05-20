<?php 
	
	class process
	{

      /////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama   

		public function ConfirmPassword($pass,$passConfirm)
		{
			// esta funcion sirve para saber si las dos contraseñas que ingreso el 
			//nuevo user concuerdan
			$error = 0; // Esta variable cuenta el numero de errores al momento de registrar un nuevo usuario


			// SABER SI LAS CONTRASEÑAS COINCIDEN:
			if ($pass != $passConfirm) 
			{
				$error = $error + 1;
			}
			

			return $error;
		}


/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


		public function ConfirmEmail($email) // con esta funcion veridfico si el email de un posible nuevo user está o no en uso
		{
			//VERIFICAR SI EL CORREO QUE SE INGRESÓ ESTÁ O NO ESTÁ EN LA DB:
			$error = 0;
			$datos = $this->GetDatosUsuariosRegistrados();
			foreach ($datos as $datos_users) 
			{
				$e = $datos_users['email'];
				if ($e == $email) 
				{
					$error = $error + 1;
				}
			}
			return $error;
		}



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 



		public function CrearCuentaParaNuevoUsuario($nombres,$apellidos,$email,$pass)
		{
			include("conexion.php");
		$consulta = mysqli_query($conn, "INSERT INTO usuarios (nombres,apellidos,email,pass)  VALUES ('$nombres', '$apellidos','$email','$pass')");
		/////////////////ENVIAR LINK DE ACTIVACIÓN DE CUENTA /////////////

                $username = $nombres. " " . $apellidos;
                $link_activacion_dealta = "https://www.array.com.co/?activate&981129()//array_user-act=".$email;
                $destino = $email;
                $titulo = "Activa tu cuenta de array para empezar a trabajar";
                
                $contenido = '<html>'.
                '<head><title>Te damos la bienvenida a ARRAY | abre el siguiente enlace para activar tu cuenta.</title></head>'.
                '<body><h3> Te damos la bienvenida a ARRAY | abre el siguiente enlace para activar tu cuenta.</h3> <br>'.
                '<body><h3> Usuario: '.$username.'</h3> <br>'.
                '<body><h3>'.$link_activacion_dealta.'</h3>'.
                
                '<hr>'.
                'Array | Expertos en TIC | www.array.com.co'.
                '</body>'.
                '</html>';
                $cabeceras = 'MIME-Version: 1.0' . "\r\n";
                $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $cabeceras .= 'From: ARRAY <contacto@array.com.co>';
                mail($destino,$titulo,$contenido,$cabeceras);
		 
		return $consulta;
		}




/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


		public function ActuaizarDatosUser($id_user,$nombres,$apellidos,$cedula, $ubicacion,$nit_empresa,$empresa,$email,$celular)
		{
			include("conexion.php");


			$consult = mysqli_query($conn, "SELECT * FROM usuarios Where id = '$id_user' ");
        	foreach ($consult as $u) 
        	{
 				$emailActual = $u['email'];
                $cedula_actual = $u["cedula"];
        	}

            ////// será que la cedula que viene del formulario es igual a otra que pertenece a otra persona ????? de ser así no se puede actualizar
            $pase_cedula = true;
             if ($cedula_actual !== $cedula) //// si la cedula del usuario actual no es igual a la que intentan actualizar
             {
                 $users = $this->GetDatosUsuariosRegistrados() ;
                 $user_concedula_igual = 0; 
                 foreach ($users as $u) 
                 {
                     if ($u["cedula"] == $cedula) 
                     {
                         $user_concedula_igual = $user_concedula_igual + 1;
                     }
                 }
                 if ($user_concedula_igual > 0) /// si es mayor que cero quiere decir que encontro a otro user cn esa cedula
                 {
                     $pase_cedula = false;
                 }
             }

          	//$emailActual = $user_["email"];

          	if ($emailActual == $email)  /// si el correo que viene desde el formulario de actualizacion es igual al que tiene el user actualmente quiere decir que el correo es el mismo y que no quiere actualizarlo por ende
          	{
          		    if ($pase_cedula == true) 
                    {
                        $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  cedula = '$cedula', departamento_ciudad = '$ubicacion', empresa = '$empresa' , nit_empresa = '$nit_empresa' , celular = '$celular'  WHERE id = '$id_user' ");
                    }else
                    {
                        $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' , departamento_ciudad = '$ubicacion', empresa = '$empresa' , nit_empresa = '$nit_empresa' , celular = '$celular'  WHERE id = '$id_user' ");
                    }
 
		     		if ($pase_cedula == true) {
                        ?>
                    <script type="text/javascript">
                        window.location="./?:=MiCuenta&n=u>"; /// significa que no intento modificar el email 
                    </script>
                    <?php 
                    }else
                    {
                        ?>
                        <script type="text/javascript">
                        window.location="./?:=MiCuenta&n=u>&erc"; /// significa que no intento modificar el email 
                        </script>
                        <?php 
                    }
		            
		     		return $consult;
          	}
          	else

          	{ 

				 if ($this-> ConfirmEmail($email) == 0) 
				 {
				 	 if ($pase_cedula == true) 
                     {
                        $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  cedula = '$cedula', departamento_ciudad = '$ubicacion', empresa = '$empresa' , nit_empresa = '$nit_empresa' , email = '$email', celular = '$celular'  WHERE id = '$id_user' ");
                     }else
                     {
                        $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  departamento_ciudad = '$ubicacion', empresa = '$empresa' , nit_empresa = '$nit_empresa' , email = '$email', celular = '$celular'  WHERE id = '$id_user' ");
                     }
	            
			     		$_SESSION['user_log'] = $email;
			     		
                        if ($pase_cedula == true) {
                             ?>
                        <script type="text/javascript">
                            window.location="./?:=MiCuenta&n=u:"; // Significa que el email fue modificado exitosamente
                        </script>
                        <?php 
                        }else
                        {
                            ?>
                             <script type="text/javascript">
                            window.location="./?:=MiCuenta&n=u:&erc"; // Significa que el email fue modificado exitosamente
                            </script>
                            <?php 
                        }
			           
			     		return $consult;
				 }else{

				 	if ($pase_cedula == true) 
                    {
                        $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  cedula = '$cedula', departamento_ciudad = '$ubicacion', empresa = '$empresa' , nit_empresa = '$nit_empresa' , celular = '$celular'  WHERE id = '$id_user' ");
                
                    }else
                    {
                        $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  departamento_ciudad = '$ubicacion', empresa = '$empresa' , nit_empresa = '$nit_empresa' , celular = '$celular'  WHERE id = '$id_user' ");
                
                    }
			     		
			     		if ($pase_cedula == true) {
                            ?>
                        <script type="text/javascript">
                            window.location="./?:=MiCuenta&n=u!"; /// u: significa que el email que intentó actulaizar el user ya se encuentra em uso 
                        </script>
                        <?php 
                        }else
                        {
                            ?>
                            <script type="text/javascript">
                            window.location="./?:=MiCuenta&n=u!&erc"; /// u: significa que el email que intentó actulaizar el user ya se encuentra em uso y la cedula tambien 
                            </script>
                            <?php 
                        }
			            
			     		return $consult;
				 }


			}				 
               
     		
		}












/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




        public function EnviarEmailActivacionCuenta($email,$nombres,$apellidos)
        {
            $username = $nombres. " " . $apellidos;
                $link_activacion_dealta = "https://www.array.com.co/?activate&981129()//array_user-act=".$email;
                $destino = $email;
                $titulo = "Activa tu cuenta de array para empezar a trabajar";
                
                $contenido = '<html>'.
                '<head><title>Te damos la bienvenida a ARRAY | abre el siguiente enlace para activar tu cuenta.</title></head>'.
                '<body><h3> Te damos la bienvenida a ARRAY | abre el siguiente enlace para activar tu cuenta.</h3> <br>'.
                '<body><h3> Usuario: '.$username.'</h3> <br>'.
                '<body><h3>'.$link_activacion_dealta.'</h3>'.
                
                '<hr>'.
                'Array | Expertos en TIC | www.array.com.co'.
                '</body>'.
                '</html>';
                $cabeceras = 'MIME-Version: 1.0' . "\r\n";
                $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $cabeceras .= 'From: ARRAY <contacto@array.com.co>';
                mail($destino,$titulo,$contenido,$cabeceras);
        }









/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 





        public function ActivarDardeAltaAuser($email)
        {
            include("conexion.php");
          
                $consult = mysqli_query($conn, "UPDATE usuarios SET dealta = 1  WHERE email = '$email' ");
            
            ?>
            <script type="text/javascript">
                window.location="./?:=MiCuenta";
            </script>
            <?php 
            return $consult;
        }



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




		public function GetDatosUsuariosRegistrados() // sacamos todos los datos que se encuentran registrados y asociados a nuestros usuarios
     	{
        include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
     	}






/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 



        public function consulta_datos_user_log($user) // es para saber los datos del usuario 
        // que acaba de iniciar session en la plataforma
        {
            include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios Where email = '$user' ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
        }






/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




        public function CerrarSesion()
        {
            session_destroy();
            ?><script>window.location="./"</script><?php 
            
        }



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


/////////////////////////////////////////////////////////////////////
        /////// Si al user se le olvida la pass /////////////
        public function RecordarPassUser_enviarPorCorreo($email)
        {
             $consult = $this-> consulta_datos_user_log($email);
            
            foreach ($consult as $user) 
            {
                $pass =  $user["pass"];
                $username = $user["nombres"]. " " . $user["apellidos"];
                $destino = $email;
                $titulo = "ARRAY | RECORDATORIO DE CONTRASEÑA ";
                
                $contenido = '<html>'.
                '<head><title>Te recordamos la contraseña de array</title></head>'.
                '<body><h5>'.$username.'</h5>'.
                'Tu contraseña es: ' .$pass.' '.
                '<hr>'.
                'Array | Expertos en TIC | www.array.com.co'.
                '</body>'.
                '</html>';
                $cabeceras = 'MIME-Version: 1.0' . "\r\n";
                $cabeceras .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                $cabeceras .= 'From: ARRAY <contacto@array.com.co>';
                mail($destino,$titulo,$contenido,$cabeceras);
            }

        }
     	
     	

/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 
     	

     	public function verificarSiLosDatosEstanCompletos($email) //verifica si los datos del user se encuentran completos
     	{
     		include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM usuarios Where email = '$email' ");
        	foreach ($consult as $user_) 
        	{
        		$nombres  = $user_['nombres'];
 				$Apellids = $user_['apellidos'];
 				$cedula = $user_['cedula'];
 				$email = $user_['email'];
 				$pass = $user_['pass'];
 				$celular = $user_['celular'];
 				$nombre_empresa = $user_['empresa'];
 				$nit_empresa = $user_['nit_empresa'];
 				$depar_ciudad = $user_['departamento_ciudad'];
        	}
        	if ($nombres !== "" && $Apellids !== "" && $celular !== ""  && $depar_ciudad !== "" ) 
        		{
        		 return 1;
        		}else{
        			return 0;
        		}
     	}



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


        // ESTA funxion es ppara poder contratar servicio de diseño web PlanBASICO -- despues viene otro proceso 
     	public function ActualizarDatosParaSolicitudDelServicioDiseñoWebPlanBasico($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan,$ActualizarCedula)
     	{
     		include("conexion.php");
          
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
            
     		
     		
            ?>
            <script type="text/javascript">
                window.location="./?servicios=Diseño_De_Paginas_web&solicitud=plan-básico&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
     		return $consult;
     		
     	}


/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


        // registrar empresa desde el plan basico del servicio de DISEÑO WEB 
        public function add_empresa_to_user_pb_dw($ne,$nie,$id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "UPDATE usuarios SET empresa = '$ne', nit_empresa = '$nie'  WHERE id = '$id_user' ");
            return $consult;
        }


/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 



        public function registrar_solicitud_contrato($id_user,$servicio,$id_plan,$facturacion_empresa)
        {
            include("conexion.php");
            $consulta = mysqli_query($conn, "INSERT INTO contratos_servicios_users (id_usuario,servicio,id_plan_escojido,facturacion_a_empresa)  VALUES ('$id_user', '$servicio','$id_plan','$facturacion_empresa')");
            return $consulta;
        }


        public function GetContratoEnParticular($id_contrato_o_solicitud) /// esta funcion devuelve la info de un contrato activo al user mediante el ID del mismo contrato 
        {
          include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users WHERE id_solicitud = '$id_contrato_o_solicitud'  ");
            return $consult;
        }

/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 



        public function SendEmailSolicitudServicios($id_user,$servicio,$nombres_completos,$cedula,$empresa)
        {
            $destino = "contacto@array.com.co , arraycolombia@gmail.com";

            $titulo = "Nueva Solicitud De Servicio";
            $contenido = $titulo. " - Usuario: [id:". $id_user."] ".$nombres_completos. " / CC ".$cedula." / Empresa: ". $empresa. " / Servicio Solicidato: ". $servicio;

            mail($destino,$titulo,$contenido);

        }

/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


      
     

        // ESTA funxion es ppara poder contratar servicio de diseño web PlanMedium-- despues viene otro proceso 

        public function ActualizarDatosParaSolicitudDelServicioDiseñoWebPlanMedium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan,$ActualizarCedula)
        {
            include("conexion.php");
           
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
            
            
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=Diseño_De_Paginas_web&solicitud=plan-medium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




        // registrar empresa desde el plan medium del servicio de DISEÑO WEB 
        public function add_empresa_to_user_pm_dw($ne,$nie,$id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "UPDATE usuarios SET empresa = '$ne', nit_empresa = '$nie'  WHERE id = '$id_user' ");
            return $consult;
        }



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


        public function ActualizarDatosParaSolicitudDelServicioDiseñoWebPlanPremium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan,$ActualizarCedula)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
            
            
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=Diseño_De_Paginas_web&solicitud=plan-premium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 



         // registrar empresa desde el plan premiumm del servicio de DISEÑO WEB 
        public function add_empresa_to_user_pp_dw($ne,$nie,$id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "UPDATE usuarios SET empresa = '$ne', nit_empresa = '$nie'  WHERE id = '$id_user' ");
            return $consult;
        }



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 





        ///// conocer las caracteriristicas de los planes de los servicios
        public function GetInfoPlanes($servicio)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM $servicio ");
            return $consult;
        }

        ///// conocer las caracteristicas de un plan en particular de un servicio 
        public function GetInfoPlan($servicio,$plan)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM $servicio WHERE id_planes = $plan ");
            return $consult;
        }



/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


// Actualiza los datos desde el servicio radio streaming hd - plan basico 
        public function ActualizarDatosParaSolicitudDelServicioradio_online_streaming_hd($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=radio_online_streaming_hd&solicitud=plan-básico&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }







/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 



// Actualiza los datos desde el servicio radio streaming hd - plan medium
        public function ActualizarDatosParaSolicitudDelServicioradio_online_streaming_hd_plan_medium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=radio_online_streaming_hd&solicitud=plan-medium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }






/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 





// Actualiza los datos desde el servicio radio streaming hd - plan Premium
        public function ActualizarDatosParaSolicitudDelServicioradio_online_streaming_hd_plan_premium($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=radio_online_streaming_hd&solicitud=plan-premium&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
        }








/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




    // Actualiza los datos desde el servicio Software Multipropósito - plan Escritorio 
        public function ActualizarDatosParaSolicitudDelServiciorSoftwareMultPlanEscritorio($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=Sofware-Multipropósito&solicitud=plan-escritorio&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }





/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




    // Actualiza los datos desde el servicio Software Multipropósito - plan Web - Medium
        public function ActualizarDatosParaSolicitudDelServiciorSoftwareMultPlanWeb($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=Sofware-Multipropósito&solicitud=plan-web&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }




/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 


        // Actualiza los datos desde el servicio Software Multipropósito - plan movlies - premium
        public function ActualizarDatosParaSolicitudDelServiciorSoftwareMultPlanMoviles($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=Sofware-Multipropósito&solicitud=plan-moviles&Reg-empresa";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }






/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 





        // Actualiza los datos desde el servicio DiseñoGrafico Corporativo - 
        public function ActualizarDatosParaSolicitudDelServicioDisenoGraficoCorporativo($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=DiseñoGráficoCorporativo&solicitud=<?php echo $plan; ?>";
            </script>
            <?php 

            // el servicio es el que viene popr arametro desde la agina del servicio que el user haya escogido ... al igual que el tipo de solicitud que viene siendo el plan
            return $consult;
            
        }




/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 





        // Actualiza los datos desde el servicio Soporte tecnico - 
        public function ActualizarDatosParaSolicitudDelServicioSoporteTecnico($id_user,$nombres,$apellidos,$cedula,$celular,$ubicacion,$servicio,$plan)
        {
            include("conexion.php");
            
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  celular = '$celular', departamento_ciudad = '$ubicacion'  WHERE id = '$id_user' ");
        
            
            ?>
            <script type="text/javascript">
                window.location="./?servicios=MantSoporteTécnico&reg_empresa";
            </script>
            <?php 

            return $consult;
            
        }








/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




        //////////Verificar si un user tiene actividad con array////////////
        public function verificar_actividad_user($id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users Where id_usuario = '$id_user' ");
            $n_act = 0;
            foreach ($consult as $act) 
            {
                if ($act["contrato_activo"] == 1) {$n_act = $n_act + 1;}
            }
            if ($n_act == 0) 
            {
                return 0;
            }else{return 1 ;}
        }



         public function verificar_actividad_user_Empresa($id_user)
         {
            include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users Where id_usuario = '$id_user' ");
            $n_act = 0;
            foreach ($consult as $act) 
            {
                if ($act["facturacion_a_empresa"] == 1 && $act["contrato_activo"]== 1) {$n_act = $n_act + 1;}
            }
            if ($n_act == 0) 
            {
                return 0;
            }else{return 1 ;}
         }
        




/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 



///////////////Get contratos o actividad con array ////////////

        public function Get_actividad_user($id_user)
        {
             include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users Where id_usuario = '$id_user' AND contrato_activo = 1 ORDER BY id_solicitud DESC");

             return $consult;

        }








/////Este codigo fué escrito por sair sanchez valderrama --- propiedad intelectual de sair sanchez valderrama //////// Código creado por sair sanchez valderrama 




        public function GetPuntosDescuentos($id_user)
        {
            include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM puntos_descuentos Where id_usuario = '$id_user' ");
             return $consult;
        }




        public function GetRecibosDePagoPara($id_user)
        {
          include("conexion.php");
            $consult = mysqli_query($conn, "SELECT * FROM user_recibos_de_pago_servicios Where id_user = '$id_user' AND factura_pagada = 0 "); /// si la factura pagada es iagual a 0 , quiere decir que no ha sido pagada la factura y que por ende debe mostrarse en la tabla de recibos pendientes de pago 

             return $consult;
        }



	}


 ?>