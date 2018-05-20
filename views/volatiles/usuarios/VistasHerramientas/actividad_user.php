<?php  
$actividad = $sair -> verificar_actividad_user($user_["id"]);
?>
        <div class="row text-center">
            <div class="col-12  col-md-6 col-lg-8 align-self-center">
                <h3 class="h3-responsive text-uppercase">Consulta general - Servicios contratados en Array</h3>                
            </div>
            <div class="col-12 col-md-6 col-lg-4 align-self-center mt-2 mb-4">
                <a @click = "ver_herramientas = true" class="badge btn red text-white">Volver </a>
            </div>
        </div>


	
		<!--Table-->
<table class="table table-responsive-md mt-2">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th><strong>Fecha de activación </strong></th>
            <th><strong>Descripción del servicio</strong></th>
            <th><strong>Facturación a empresa</strong></th>
            <th><strong>Valor</strong></th>
            <th><strong>Cuotas</strong></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
        <?php 
            if ($actividad == 1) 
            {
                $contratos = $sair-> Get_actividad_user($user_["id"]);
               ?>
               
                <?php 
                foreach ($contratos as $contrato) 
                {
                    if ($contrato["facturacion_a_empresa"]== 0) {
                        $f = "NO";
                    }else{$f = "SI";}
                    if ($contrato["cuota_plazo"]==0) {
                        $cuo  = "Pagó de contado";
                    }else{$cuo = $contrato["cuota_plazo"]; }
                    ?>
                    <tr>
                     <td><?php  echo $contrato["fecha_activacion"]; ?></td>
                    <td><?php echo $contrato["servicio"]."/". $contrato["nombre_plan"] ?></td>
                    <td><?php echo $f; ?></td>
                    <td><?php echo "$".  number_format($contrato["total_cobrar"]) ; ?></td>
                    <td><?php echo $contrato["cuota_plazo"]; ?></td>
                    </tr>
                    <?php 
                } 
                ?>
               

               
               <?php 
            }else{
                 ?>
               <tr>
                    <th scope="row">No</th>
                    <td>No</td>
                    <td>No</td>
                    <td>No</td>
                    <td>No</td>
                    
               </tr>
               <?php 
            }
         ?>
        
        
        
    </tbody>
    <!--Table body-->

</table>
<!--Table-->






<?php 

include("Publicidad.php");
 ?>