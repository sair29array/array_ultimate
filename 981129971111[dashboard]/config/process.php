<?php 
	
	class process 
	{
		
		public function peticion_de_acceso_admin($user,$pass)
		{
			include("conexion.php");

		 $respuesta = mysqli_query($conn, "SELECT count(*) FROM admin_user where email = '$user'  and pass = '$pass' ");
			 if( $fila = mysqli_fetch_row($respuesta) )
			 {
			  $valor = $fila[0];

			 }


        	return $valor;
		}



		public function Get_info_admin($email_user)
		{
			include("conexion.php");
			$consult = mysqli_query($conn, "SELECT * FROM admin_user where  email = '$email_user' ");
			return mysqli_fetch_all($consult, MYSQLI_ASSOC);

		}





		public function logout()
		{
			session_destroy();
			header('Location: ../981129971111[dashboard]');
		}






		public function mostrar_usuarios_array()
		{
		include("conexion.php");
        $consult = mysqli_query($conn, "SELECT * FROM usuarios ORDER BY id ASC ");
        return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}



		public function mostrar_Un_User_en_particular($id)
		{
				include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM usuarios Where id = '$id' ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}




		public function GetActividadOContratosVigentes()
		{
			$v = 1; /// contrato vigente
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users Where  contrato_activo = '$v' ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
        	
		}

		public function GetSolicitudesServiciosContratosUser()
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users WHERE contrato_activo = 0 ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}




		public function Get_Actividad_Contratos_Activos_User($_id_user)
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users where id_usuario = '$_id_user' AND  contrato_activo = 1 ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}


		public function get_notas($id_admin, $date_actual)
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM notas_o_tareas_admin Where id_admin = '$id_admin' AND fecha = '$date_actual' ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}

		public function GuardAnota($fecha,$nota)
		{
			?> <script type="text/javascript">alert("dd");</script> <?php 
		}

		public function Get_solicitud_en_particular($id)
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM contratos_servicios_users Where id_solicitud = '$id'  ");
        	 return mysqli_fetch_all($consult, MYSQLI_ASSOC);
		}


		//// esta funcion es para que el admin actualice los datos del user que acaba de mandar una solicitud de contrato de servicio
		public function ActualizarDatosDelUser($id,$s,$cedula,$nombres,$apellidos,$ubicacion,$empresa,$nit,$Celular)
		{
			$allusers =  $this->mostrar_usuarios_array();
			$cc_igual = 0;
			$Celular_igual = 0;
			$nit_igual = 0;
			foreach ($allusers as $user) 
			{
				if ($user["cedula"] == $cedula && $user["id"] != $id) {
					$cc_igual = $cc_igual +1 ;
					//esto se cumple solo si en la db existe una cedula igual a la que acabamos de ingresar y no es el mismo usuario sino que es de otro
				}
				if ($user["celular"] == $Celular && $user["id"] != $id) {
					$Celular_igual = $Celular_igual + 1 ;
				}

				if ($user["nit_empresa"] != ""  && $user["nit_empresa"] == $nit && $user["id"] != $id) {
					$nit_igual = $nit_igual + 1 ;
				}
			}

			if ($cc_igual == 0 && $nit_igual == 0 && $Celular_igual == 0) 
			{
				 include("conexion.php");
          
                $consult = mysqli_query($conn, "UPDATE usuarios SET nombres = '$nombres', apellidos = '$apellidos' ,  cedula = '$cedula', departamento_ciudad = '$ubicacion', empresa = '$empresa' , nit_empresa = '$nit' , celular = '$Celular'  WHERE id = '$id' ");
            
		            ?>
		            <script type="text/javascript">
		                window.location="./?:=All-Solcitud&s=<?php echo $s; ?>&u=<?php echo $id; ?>&upd";
		            </script>
		            <?php 
		            return 1;
			}elseif ($cc_igual != 0 && $nit_igual != 0 && $Celular_igual != 0) 
			{
					?>
		            <script type="text/javascript">
		                window.location="./?:=All-Solcitud&s=<?php echo $s; ?>&u=<?php echo $id; ?>&updaller";
		            </script>
		            <?php
			}else if ($cc_igual != 0 && $nit_igual == 0 && $Celular_igual == 0) {
				?>
		            <script type="text/javascript">
		                window.location="./?:=All-Solcitud&s=<?php echo $s; ?>&u=<?php echo $id; ?>&updccer";
		            </script>
		            <?php
			}elseif ($cc_igual == 0 && $nit_igual != 0 && $Celular_igual == 0) {
				?>
		            <script type="text/javascript">
		                window.location="./?:=All-Solcitud&s=<?php echo $s; ?>&u=<?php echo $id; ?>&updner";
		            </script>
		            <?php
			}else if ($cc_igual == 0 && $nit_igual == 0 && $Celular_igual != 0) {
				?>
		            <script type="text/javascript">
		                window.location="./?:=All-Solcitud&s=<?php echo $s; ?>&u=<?php echo $id; ?>&updcer";
		            </script>
		            <?php
			}
		}


		public function verificar_si_los_datos_para_activar_un_contrato_estan_completos($id_user)
		{
			$user = $this->mostrar_Un_User_en_particular($id_user);
			foreach ($user as $u) {}
				if ($u["nombres"] != "" && $u["apellidos"]!= "" && $u["cedula"]!= "" && $u["departamento_ciudad"]!= "" && $u["celular"] != "") 
				{
					return true;
				}else
				{
					return false;
				}
			
		}

		public function activar_solicitud_servicio_contrato($id_solicitud,$id_user,$fecha_activacion,$n,$c,$tc,$f,$np,  $vcu,$dfac,$ffn,$f_un_p)
		{
            // "q" es si es pago por cuota o pago de contado
			include("conexion.php");
			
          if($f_un_p == "")
          {
               $consult = mysqli_query($conn, "UPDATE contratos_servicios_users SET facturacion_a_empresa = '$f', total_cobrar = '$tc' ,  cuota_plazo = '$c', contrato_activo = 1 , fecha_activacion = '$fecha_activacion', tener_en_cuenta = '$n', nombre_plan = '$np', valor_por_cuota = '$vcu', dia_defacturacion = '$dfac' , fecha_finalizacion = '$ffn'   WHERE id_solicitud = '$id_solicitud' ");
          }else{
              $consult = mysqli_query($conn, "UPDATE contratos_servicios_users SET facturacion_a_empresa = '$f', total_cobrar = '$tc' ,  cuota_plazo = '$c', contrato_activo = 1 , fecha_activacion = '$fecha_activacion', tener_en_cuenta = '$n', nombre_plan = '$np', fecha_unica_pago = '$f_un_p'  WHERE id_solicitud = '$id_solicitud' ");
          }

                

                ?>
		            <script type="text/javascript">
		                window.location="./?:=All-Solcitud&s=<?php echo $id_solicitud; ?>&u=<?php echo $id_user; ?>&act!";
		            </script>
		            <?php
		          return $consult;
		}




		public function GetInfoServicio($servicio)
		{
			include("conexion.php");
        	$consult = mysqli_query($conn, "SELECT * FROM $servicio ");
        	 return $consult;
		}





	}

 ?>