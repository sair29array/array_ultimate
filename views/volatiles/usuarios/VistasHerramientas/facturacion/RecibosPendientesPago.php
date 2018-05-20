<?php 

       //$contratos_activos = $sair->GetAllContratosServiciosActivos();
       $facturas_servicios = $sair->GetRecibosDePagoPara($user_["id"]);

 ?>



<!--Table-->

	
	<table class="table table-responsive">
<div class="justify-content-center">

   	 <!--Table head-->
    <thead>
        <tr>
            <th class="font-weight">Servicio</th>
            <th class="font-weight">Tipo de factura</th>
            <th class="font-weight">Número de factura</th> <!-- ejemplo. 5 de 12 -->
            <th class="font-weight">Valor</th>
            <th class="font-weight">Pagar hasta</th>
            <th class="font-weight">Mora</th>
            <th class="font-weight"><i class="fa fa-chevron-down"></i></th>
        </tr>
    </thead>
  <!--Table head-->

    <!--Table body-->
    <tbody>
       
       <?php 
            foreach ($facturas_servicios as $fas) {
                $info_contrato = $sair-> GetContratoEnParticular($fas["id_contrato_activo"]);
                foreach ($info_contrato as $i_contrato) {
                    # code...
                }
                $servicio = $i_contrato["servicio"];
                $cuotas = $i_contrato["cuota_plazo"];
                ?>
                 <tr>
                    <td><?php echo $servicio; ?></td>
                    <td><?php echo $fas["tipo_factura"]; ?></td>
                    <td>
                        <?php 
                        if ($cuotas == 0 ) {
                           echo $fas["numero_factura"] . " de " . 1;
                        }else{
                            echo $fas["numero_factura"] . " de " . $cuotas; 
                        }
                        
                        ?>
                    </td>
                    <td><?php echo "$".number_format($fas["valor"]); ?></td>
                    <td><?php echo $fas["fecha_limite_de_pago"]; ?></td>
                    <td><?php echo $fas["dias_de_atraso_mora"]; ?></td>
                    <td><button class="btn btn-primary"><i class="fa fa-money"></i> Pagar ahora</button></td>
                </tr>
                <?php 
            }
        ?>
       
    </tbody>
    <!--Table body-->

</div>
</table>
<!--Table-->


























<table class="table table-responsive">
<div class="justify-content-center">

     <!--Table head-->
    <thead>
        <tr>
            <th class="font-weight">Producto</th>
            <th class="font-weight">Tipo de factura</th>
            <th class="font-weight">Número de factura</th> <!-- ejemplo. 5 de 12 -->
            <th class="font-weight">Valor</th>
            <th class="font-weight">Pagar hasta</th>
            <th class="font-weight">Mora</th>
            <th class="font-weight"><i class="fa fa-chevron-down"></i></th>
        </tr>
    </thead>
  <!--Table head-->

    <!--Table body-->
    <tbody>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
       
    </tbody>
    <!--Table body-->

</div>
</table>
<!--Table-->



