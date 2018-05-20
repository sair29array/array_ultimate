<?php 

   
$Usuario = $sair->mostrar_Un_User_en_particular($_GET["u"]);
foreach ($Usuario as $u_) {}
$Solicitud = $sair ->Get_solicitud_en_particular($_GET["s"]);
foreach ($Solicitud as $s_) {}

if ($s_["contrato_activo"]==0) {/// si no está activo aun el contrato
	include("UsuarioSolicitante.php");
    $aviso = "";
    if (isset($_POST["ok_activate"])) {
        //////CUotas////
        $vcu = $_POST["valor_por_cuota"];
        $dfac = $_POST["dia"];
        $ffn = $_POST["fin_facturacion"];
        //////CUotas////
        
        ////de contado///
        $f_un_p = $_POST["fecha_unica_pago"];
        ////de contado///
        
        $np = $_POST["nombre_del_plan"];
        $f = $_POST["facturacion_a_empresa"];
        $tc = $_POST["tcobrar"];
        $c = $_POST["Cuotas"];
        $n = $_POST["notas"];
        $fecha_activacion = date("d") ."-".date("m")."-". date("Y") ;
        $validacion_datos = $sair->verificar_si_los_datos_para_activar_un_contrato_estan_completos($u_["id"]);
        if ($validacion_datos == true) 
        {
            if($tc > 0)
            {
                if($vcu != "" && $dfac != "" && $ffn != "" && $f_un_p == "" ){
                    if($c >= 3)
                    {
                         $sair->activar_solicitud_servicio_contrato($s_["id_solicitud"],$u_["id"], $fecha_activacion,$n,$c,$tc,$f,$np,$vcu,$dfac,$ffn,"");
                    }else
                    {
                        $aviso = "<p style = 'color: red;'>¡Si el pago es dividido en cuotas, define las cuotas !</p>";
                    }
               
                }elseif( ($vcu == "" || $dfac == "" || $ffn == "" )&& $f_un_p != ""){
                    if($c < 3)
                    {
                        $sair->activar_solicitud_servicio_contrato($s_["id_solicitud"],$u_["id"], $fecha_activacion,$n,$c,$tc,$f,$np,"","","",$f_un_p);
                    }else
                    {
                        $aviso = "<p style = 'color: red;'>¡Si el pago es de contado no puedes definir un Número de cuotas !</p>";
                    }
                    
                    
                }else if( ($vcu == "" || $dfac == "" || $ffn == "") && $f_un_p == "")
                {
                     $aviso = "<p style = 'color: red;'>¡Define la opción de pago del usuario!</p>";
                }else if( ($vcu != "" || $dfac != "" || $ffn != "") && $f_un_p != "")
                {
                    $aviso = "<p style = 'color: red;'>¡Define la opción de pago del usuario (paga de contado o dividido en cuotas)!</p>";
                }
            }else{
                $aviso = "<p style = 'color: red;'>¡Define un valor a cobrar válido!</p>";
            }
            
        }else{
            $aviso = "<p style = 'color: red;'>¡completa los datos del usuario solicitante!</p>";
        }
    }


 ?>



            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Solicitud de servicio #AY<?php echo $_GET["s"]; ?></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Usuario solicitante:  <?php echo $u_["nombres"]." ".$u_["apellidos"]; ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-responsive"  >
                                    <thead>
                                        <tr>
                                            <th>Servicio</th>
                                            <th>ID Plan</th>
                                            <th>Facturación a Empresa</th>
                                            <th>Total cobrar</th>
                                            <th>Cuotas</th>
                                            
                                            
                                            
                                        </tr>
                                    </thead>
                                    <tbody>
                                      <form method="POST" action="">
                                      	<tr>
                                      		<td><?php echo $s_["servicio"]; ?></td>
                                      		<td><?php echo "id plan: ".$s_["id_plan_escojido"] .":"; ?> <input type="text" name="nombre_del_plan" required="true" placeholder="Nombre del plan"></td>
                                      		<td>
                                                <?php 
                                                    $fac = $s_["facturacion_a_empresa"];

                                                    if ($u_["empresa"] == "" || $u_["nit_empresa"]== "") {
                                                        ?>
                                                       <label>NO
                                                    <input name="facturacion_a_empresa" value="0" type="radio"
                                                        checked="checked" 
                                                       >
                                                </label>
                                                        <?php 
                                                    }else {
                                                        ?>
                                                        <table border="1">
                                                    <tr>
                                                        <td><label>SI
                                                    <input name="facturacion_a_empresa" value="1" type="radio" <?php if ($fac == 1) {
                                                       ?> checked="checked"  <?php 
                                                    } ?>    >
                                                </label></td>
                                                        <td><label>NO
                                                    <input name="facturacion_a_empresa" value="0" type="radio" <?php if ($fac == 0) {
                                                       ?> checked="checked"  <?php 
                                                    } ?>    >
                                                </label></td>
                                                    </tr>
                                                </table>
                                                        <?php 
                                                    }
                                                 ?>
                                                

                                            </td>

                                      		<td>$ <input type="number" min="0" name="tcobrar" value="<?php echo $s_["total_cobrar"]; ?>"></td>

                                      		<td><input type="number" min="0" max="12"  name="Cuotas" value="<?php echo $s_["cuota_plazo"]; ?>"></td>

                                      		
                                      		
                                      	</tr>
                                    
                                    </tbody>
                                </table>
                                
                                
                                
                                
                                 <table  class="table table-striped table-bordered table-hover table-responsive" > 
                                     
                                    <thead>
                                        <tr>
                                            <th></th>
                                            <th >Valor por cuota</th>
                                            <th>Día de facturación</th>
                                            <th>Fecha de Finalización</th>
                                            <th></th>
                                            <th>Fecha Unica de pago</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><p>Pago dividido en cuotas: </p></td>
                                            
                                                <td>
                                                <input  type= "number" min= "0" name= "valor_por_cuota"> <p>Valor del servicio entre el número de cuotas</p> 
                                                </td>
                                            
                                                <td>
                                                    <input  type= "number" min="1" max="30" placeholder="Día en que llega la factura al usuario" min= "0" name= "dia"> <p>¿Qué día quiere el usuario que le llegue su factura?</p> 
                                                </td>

                                                <td>
                                                    <input  type= "date"  name= "fin_facturacion"><p>Fecha en la que el usuario dará su ultima cuota</p> 
                                                </td>
                                            
                                            
                                            
                                            
                                            
                                            <div >
                                                <td>Solo si es pago de contado (sin cuotas):</td>
                                                <td><input  name="fecha_unica_pago" type="date">
                                                <p>A partir de hoy, maximo una semana para el pago </p>
                                                </td>
                                            </div>
                                           
                                        </tr>
                                    </tbody>
                                    
                                </table>

                                
                                
                                
                                 <table class="table table-striped table-bordered table-hover table-responsive" > 
                                    <thead>
                                        <tr>
                                            <th>Notas a tener en cuenta:</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> <textarea name="notas" class="btn-lg" rows="2" cols="102">

                                            </textarea></td>
                                        </tr>
                                    </tbody>
                                    
                                </table>
                                <table class="table table-striped table-bordered table-hover table-responsive" > 
                                    <thead>
                                        <tr>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                            <p><?php echo @$aviso; ?></p>
                                                <button type="submit" name="ok_activate" class="btn btn-primary btn-lg btn-block">ACTIVAR CONTRATO </button></td>
                                        </tr>
                                    </tbody>
                                      </form>
                                </table>
                            </div>
                            
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>



            <?php 
            	include("PreciosSegunPlanesPorServicios.php");
             ?>


    

    <!-- Core Scripts - Include with every page -->
    <script src="js/jquery-1.10.2.js"></script>
    
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>

  

    <!-- SB Admin Scripts - Include with every page -->
    <script src="js/sb-admin.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').dataTable();
    });
    </script>

<?php }else{
    ?>
    <!-- /.col-lg-4 -->
    <br>
                <div class="col-lg-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                             <h4 >Solicitud de servicio #AY<?php echo $_GET["s"]; ?> ACTIVADO</h4>
                        </div>
                        <div class="panel-body">
                            
                        </div>
                        <div class="panel-footer">
                                <a href="./?:=SolicitudesContratosUser">Ir a solicitudes de contratos - servicios </a>
                        </div>
                    </div>
                </div>
                <!-- /.col-lg-4 -->
    <?php 
} ?>





