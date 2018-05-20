<?php 
	
 class main
 {

 	public function IssetAccesAdmin()
 	{
 		include("conexion.php");
 		//// Conesta funcion veridicamos si en la fecha actual ya el admin ingresó al panel
 		$fechaActual = date("d-m-Y");
 		 $respuesta = mysqli_query($conn, "SELECT count(*) FROM acceso_admin_controller where fecha = '$fechaActual' ");
			 if( $fila = mysqli_fetch_row($respuesta) )
			 {
			  $valor = $fila[0];

			 }
        	return $valor;
 	}

 	public function RegistroAccesoUserAdMIN($user_admin)		
 	{
 		// esta función registra el aacceso de un user admi a la plataforma de administración:
 		$fecha_acceso = date("d-m-Y");
 		$hora_acceso = date("H-i-s-a");
 		include("conexion.php");
 		$consulta = mysqli_query($conn, "INSERT INTO acceso_admin_controller (fecha,hora,user_admin)  VALUES ('$fecha_acceso', '$hora_acceso','$user_admin')");
 	}
 	
	public  function IssetFactsToday()
	{
		/////// esta funcion define si hay en la fecha actual (hoy) hay que crear facturas
		// si si entonces pasamos a  Creacion_facturas_para_hoy()

		include("conexion.php");

			//// 1. consulta_contratos_activos y no cancelados osea que aun estan pagando////
			$cca = mysqli_query($conn, "SELECT * FROM contratos_servicios_users where contrato_activo = 1 AND activo_y_cancelado = 0 ");

			//// 2. verificamos las fechas de pago unico (de contado) y los contratos que tienen dia de pago que son pago dividido en cuotas, para saber si esos días son iguales al dia de hoy ... si la fecha coincide con la de hoy entonces tenemos que hacer la factura
			$f = 0; /// x son el numeros de contratos que tienen la fecha exacta a la de hoy! (que coinciden)
			foreach ($cca as $c) 
			{
				if ($c["fecha_unica_pago"] == "")  // si el pago no es de contado 
				{
					// entonces es a cuotas
					if ($c["dia_defacturacion"] == date("d")) // si el dia de facturación es iagual al de la fecha actual, entonces:
					{
						$f = $f + 1 ; // sumamos una factura
					}
				}
				else // sino, osea si el pago si es decontado y tiene una fecha unica de pago:
				{
					// preguntamos lo siguiente:  // año            mes            dia
					if ($c["fecha_unica_pago"] == date("Y")."-".date("m")."-".date("d"))
					// si la fecha unica de pago es igual a la fecha actual entonces: 
					{
						$f = $f + 1 ; // sumamos una factura
					}
				}
			}
			 
		return $f; // retornamos $f para indicar cuantas facturas se deben hacer
	} 	





 	public  function Creacion_facturas_servicios_para_hoy()
 	{

 		if ($this->IssetFactsToday() != 0) 
 		{
 			include("conexion.php");

			//// 1. consulta_contratos_activos y no cancelados osea que aun estan pagando////
			$cca = mysqli_query($conn, "SELECT * FROM contratos_servicios_users where contrato_activo = 1 AND activo_y_cancelado = 0 ");

			foreach ($cca as $c) 
			{
				if ($c["fecha_unica_pago"] == "")  // si el pago no es de contado 
				{
					// entonces es a cuotas
					if ($c["dia_defacturacion"] == date("d")) // si el dia de facturación es iagual al de la fecha actual, entonces:
					{
						$id_co = $c["id_solicitud"];  //// id del contrato al que se le va a generar la factura
						$id_user = $c["id_usuario"]; /// usuario titular del servicio
						///// numero total de facturas actualmente:
						$facturas_actuales = $this->NumeroDeFacturasDeUnServicio($id_co);
						//// entonces el numero para una factura nueva es: 
						$numero_factura = $facturas_actuales  +  1;
						$tipo_f = "Pago a crédito";
						$valor_ = $c["valor_por_cuota"];
						$plazo = 15; /// plazo para pagar una factura a credito 15 dias depues de la facturación
						$fecha_limite = $this->CalculadorDeFechasLimites($c["dia_defacturacion"], $plazo);


						$consulta = mysqli_query($conn, "INSERT INTO user_recibos_de_pago_servicios (id_contrato_activo,id_user,numero_factura,tipo_factura,valor,fecha_limite_de_pago)  VALUES ('$id_co', '$id_user','$numero_factura','$tipo_f','$valor_','$fecha_limite')");
					}
				}
				else // sino, osea si el pago si es decontado y tiene una fecha unica de pago:
				{
					// preguntamos lo siguiente:  // año            mes            dia
					if ($c["fecha_unica_pago"] == date("Y")."-".date("m")."-".date("d"))
					// si la fecha unica de pago es igual a la fecha actual entonces: 
					{
						$id_co = $c["id_solicitud"];  //// id del contrato al que se le va a generar la factura
						$id_user = $c["id_usuario"]; /// usuario titular del servicio
						///// numero total de facturas actualmente:
						$facturas_actuales = $this->NumeroDeFacturasDeUnServicio($id_co);
						//// entonces el numero para una factura nueva es: 
						$numero_factura = $facturas_actuales  +  1;
						$tipo_f = "Pago de contado";
						$valor_ = $c["total_cobrar"];
						$plazo = $c["fecha_unica_pago"]; /// plazo para pagar una factura a credito 2  dias depues de la facturación
						$fecha_limite = $plazo;


						$consulta = mysqli_query($conn, "INSERT INTO user_recibos_de_pago_servicios (id_contrato_activo,id_user,numero_factura,tipo_factura,valor,fecha_limite_de_pago)  VALUES ('$id_co', '$id_user','$numero_factura','$tipo_f','$valor_','$fecha_limite')");
					}
				}
			}
			 

 		}
 		///  crear en la fecha actual facturas o recibos pendientes de servicxios contratados por users
 	}



 	public  function CalculadorDeFechasLimites($dia_defacturacion, $plazo)
 	{
 		///// calcular la fecha limite de pago para una factura de pago a creditto 

 		//// paso 1: Calcular el mes actual  o la fecha actual:
 		 $fecha =  date("d")."-".date("m")."-".date("Y");
 	 ////  saber cuantos dias tiene el mes :
			$timestamp = strtotime( $fecha );
			$diasdelmes = date( "t", $timestamp );
		// echo "para la fecha " . $fecha. " el mes tiene " . $diasdelmes. " días";


		////// calculamos la fecha limite : 

		// para eso debemos sumar el dia de facturación más los 15 dias de plazo:
		 // a este resultado le llamaré $xd
			$xd  = $dia_defacturacion + $plazo ;

			/// ahora vamos a ver si ese resultado es mayor que el numero de dias que tiene el mes

			if ($diasdelmes == 30 )  /// si el mes tiee 30 dias 
			{
				if ($xd  > 30 ) // si $xd es mayor que 30 se pasa .. entocnes:  
				{
					$dia_fecha_limite = $xd - 30; /// dia de la fecha limite
					$mes_actual = date("m"); //// mes actual
					$mes_limite =  strtotime ( '+1 month' ); /// si el mes es 5 entonces sera 6:
					$mes_limite = date ( 'm' , $mes_limite );
					if (date("m") != 12)  // Esto es por si el mes es diciembre
					// en un dado caso de que los 15 dias de plazo se extiendan al otro año tendremos que colocarlo tambien
					{
						$anio_limite = date("Y");
					}else {
						$anio_limite = strtotime ( '+1 year' ) ;
						$anio_limite = date ( 'Y' , $anio_limite );
					}
					/// esto es lo que retornamos:
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;

				}else if ($xd <= 30) {
					$dia_fecha_limite = $xd; ///  esto sucederia cuando el dia de facturaión + el plazo no sobre pasa el numero total de dias que tiene el mes por lo tanto se asume que no se sale del mes sino que queda ahi mismo
					// ejemplo : dia facturacion = 10 + plazo 15 dias = (25)
					// entonces el dia 25 del mismo mes es la fecha limite
					$mes_limite = date ("m"); /// quedaria siendo el mismo mes actual
					$anio_limite = date("Y"); //// año actual
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;
				}
			}
			else if ($diasdelmes == 31) /// si el mes tiee 31 dias
			{
				if ($xd  > 31 ) // si $xd es mayor que 30 se pasa .. entocnes:  
				{
					$dia_fecha_limite = $xd - 31; /// dia de la fecha limite
					$mes_actual = date("m"); //// mes actual
					$mes_limite =  strtotime ( '+1 month' ); /// si el mes es 5 entonces sera 6:
					$mes_limite = date ( 'm' , $mes_limite );
					if (date("m") != 12)  // Esto es por si el mes es diciembre
					// en un dado caso de que los 15 dias de plazo se extiendan al otro año tendremos que colocarlo tambien
					{
						$anio_limite = date("Y");
					}else {
						$anio_limite = strtotime ( '+1 year' ) ;
						$anio_limite = date ( 'Y' , $anio_limite );
					}
					/// esto es lo que retornamos:
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;

				}else if ($xd <= 31) {
					$dia_fecha_limite = $xd; ///  esto sucederia cuando el dia de facturaión + el plazo no sobre pasa el numero total de dias que tiene el mes por lo tanto se asume que no se sale del mes sino que queda ahi mismo
					// ejemplo : dia facturacion = 10 + plazo 15 dias = (25)
					// entonces el dia 25 del mismo mes es la fecha limite
					$mes_limite = date ("m"); /// quedaria siendo el mismo mes actual
					$anio_limite = date("Y"); //// año actual
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;
				}
			}else if ($diasdelmes == 28) 
			{
				if ($xd  > 28 ) // si $xd es mayor que 30 se pasa .. entocnes:  
				{
					$dia_fecha_limite = $xd - 28; /// dia de la fecha limite
					$mes_actual = date("m"); //// mes actual
					$mes_limite =  strtotime ( '+1 month' ); /// si el mes es 5 entonces sera 6:
					$mes_limite = date ( 'm' , $mes_limite );
					if (date("m") != 12)  // Esto es por si el mes es diciembre
					// en un dado caso de que los 15 dias de plazo se extiendan al otro año tendremos que colocarlo tambien
					{
						$anio_limite = date("Y");
					}else {
						$anio_limite = strtotime ( '+1 year' ) ;
						$anio_limite = date ( 'Y' , $anio_limite );
					}
					/// esto es lo que retornamos:
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;

				}else if ($xd <= 28) {
					$dia_fecha_limite = $xd; ///  esto sucederia cuando el dia de facturaión + el plazo no sobre pasa el numero total de dias que tiene el mes por lo tanto se asume que no se sale del mes sino que queda ahi mismo
					// ejemplo : dia facturacion = 10 + plazo 15 dias = (25)
					// entonces el dia 25 del mismo mes es la fecha limite
					$mes_limite = date ("m"); /// quedaria siendo el mismo mes actual
					$anio_limite = date("Y"); //// año actual
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;
				}
			}else if($diasdelmes == 29)
			{
				if ($xd  > 29 ) // si $xd es mayor que 30 se pasa .. entocnes:  
				{
					$dia_fecha_limite = $xd - 29; /// dia de la fecha limite
					$mes_actual = date("m"); //// mes actual
					$mes_limite =  strtotime ( '+1 month' ); /// si el mes es 5 entonces sera 6:
					$mes_limite = date ( 'm' , $mes_limite );
					if (date("m") != 12)  // Esto es por si el mes es diciembre
					// en un dado caso de que los 15 dias de plazo se extiendan al otro año tendremos que colocarlo tambien
					{
						$anio_limite = date("Y");
					}else {
						$anio_limite = strtotime ( '+1 year' ) ;
						$anio_limite = date ( 'Y' , $anio_limite );
					}
					/// esto es lo que retornamos:
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;

				}else if ($xd <= 29) {
					$dia_fecha_limite = $xd; ///  esto sucederia cuando el dia de facturaión + el plazo no sobre pasa el numero total de dias que tiene el mes por lo tanto se asume que no se sale del mes sino que queda ahi mismo
					// ejemplo : dia facturacion = 10 + plazo 15 dias = (25)
					// entonces el dia 25 del mismo mes es la fecha limite
					$mes_limite = date ("m"); /// quedaria siendo el mismo mes actual
					$anio_limite = date("Y"); //// año actual
					$fecha_limite_ = $dia_fecha_limite . "-".$mes_limite."-".$anio_limite;
				}
			}
		return $fecha_limite_;
 	}





 	public function NumeroDeFacturasDeUnServicio($id_contrato)
 	{
 		include("conexion.php");
 		//// es ta función permite saber cuantas facturas se le han generado a un servici contratado por un user //// de esta manera sabremos que numero de factura colocarle a cada factura nueva 

 		$cca = mysqli_query($conn, "SELECT * FROM user_recibos_de_pago_servicios where id_contrato_activo =  '$id_contrato' ");
 		$total = 0;
 		foreach ($cca as $f ) 
 		{
 		 $total = $total + 1;
 		}

 		return $total;
 	}





 	public function ConfirmacionProcess()
 	{
 		//// Esta función determina si hay o no procesos que realizar
 		
 		if ($this->IssetAccesAdmin()== 0) // si esta funcion retorna cero quiere decir que es primer vez que el user admin intenta acceder a la pltaforma y que po ende se debe cuestionar si hay controladores que cargar
 		{
 			$p = 0; /// cantidad de procesos 
 			///         controller 1
 			if ($this->IssetFactsToday() != 0) 
		 		{
		 			$p = $p +1;
		 			return $p;
		 		}else {  return 0; }
 		}else {  return 0; }

 		

 	}

 	



 }


 ?>