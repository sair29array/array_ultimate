<?php 
     $d_p_w = $sair->GetInfoServicio("diseno_paginas_web");
     
     $r_o_s_h = $sair->GetInfoServicio("radio_online_streaming_hd");
     

     $S_m_p = $sair->GetInfoServicio("software_multiproposito");
      

     $D_g_c = $sair->GetInfoServicio("diseno_grafico_corporativo");
     

     $p_c_r_t = $sair->GetInfoServicio("producion_comerciales_r_t_i");
      

    $fe_r_av = $sair->GetInfoServicio("foto_estudio_y_realizacion_aud_visual");
     

     $man_y_s = $sair->GetInfoServicio("mantenimiento_y_soporte");
     

  ?>

<!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Notas y Precios por planes y servicios:
                        </div>
                        <!-- .panel-heading -->
                        <div class="panel-body">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Diseño & desarrollo de páginas web</a>
                                        </h4>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                               <tr>
                                                <th>Id plan</th>
                                                <th>Plan</th>
                                                <th>Precio</th>
                                                <th>Cotización o credito</th>
                                                <th>Cuota inicial</th>
                                               </tr>
                                               <?php 
                                               foreach ($d_p_w as $dpw) // info - diseño de paginas web
                                               { 
                                               if ($dpw["cotizacion"]==0) {$cotdpw = "NO";}else{$cotdpw = "SI";} 
                                                    ?>
                                                    <tr>
                                                   <td><?php echo $dpw["id_planes"]; ?></td>
                                                   <td><?php echo $dpw["planes"]; ?></td>
                                                   <td><?php echo "$". number_format($dpw["precio"]) ; ?></td>
                                                   <td><?php echo $cotdpw; ?></td>
                                                   <td><?php echo "$". number_format($dpw["cuota_inicial"]) ; ?></td>
                                                    </tr>
                                                    <?php 
                                               } 
                                                ?>
                                              


                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Radio Online Streaming HD</a>
                                        </h4>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                               <tr>
                                                <th>Id plan</th>
                                                <th>Plan</th>
                                                <th>Precio</th>
                                                <th>Cotización o credito</th>
                                                <th>Cuota inicial</th>
                                               </tr>
                                               <?php 
                                              foreach ($r_o_s_h as $rosh) 
                                               { 
                                               if ($rosh["cotizacion"]==0) {$cotdpw = "NO";}else{$cotdpw = "SI";} 
                                                    ?>
                                                    <tr>
                                                   <td><?php echo $rosh["id_planes"]; ?></td>
                                                   <td><?php echo $rosh["planes"]; ?></td>
                                                   <td><?php echo "$". number_format($rosh["precio"]);  ?></td>
                                                   <td><?php echo $cotdpw; ?></td>
                                                   <td><?php echo "$". number_format($rosh["cuota_inicial"]);  ?></td>
                                                    </tr>
                                                    <?php 
                                               } 
                                                ?>
                                              


                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Software Multipropósito</a>
                                        </h4>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <table class="table table-responsive">
                                               <tr>
                                                <th>Id plan</th>
                                                <th>Plan</th>
                                                <th>Precio</th>
                                                <th>Cotización o credito</th>
                                                <th>Cuota inicial</th>
                                               </tr>
                                               <?php 
                                               foreach ($S_m_p as $smp) 
                                               { 
                                               if ($smp["cotizacion"]==0) {$cotdpw = "NO";}else{$cotdpw = "SI";} 
                                                    ?>
                                                    <tr>
                                                   <td><?php echo $smp["id_planes"]; ?></td>
                                                   <td><?php echo $smp["planes"]; ?></td>
                                                   <td><?php echo "$". number_format($smp["precio"]) ; ?></td>
                                                   <td><?php echo $cotdpw; ?></td>
                                                   <td><?php echo "$". number_format($smp["cuota_inicial"]) ; ?></td>
                                                    </tr>
                                                    <?php 
                                               } 
                                                ?>
                                              


                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Diseño Gráfico corporativo</a>
                                        </h4>
                                    </div>
                                    <div id="collapse4" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <table class="table table-responsive">
                                               <tr>
                                                <th>Id plan</th>
                                                <th>Plan</th>
                                                <th>Precio</th>
                                                <th>Cotización o credito</th>
                                                <th>Cuota inicial</th>
                                               </tr>
                                               <?php 
                                               foreach ($D_g_c as $dgc)
                                               { 
                                               if ($dgc["cotizacion"]==0) {$cotdpw = "NO";}else{$cotdpw = "SI";} 
                                                    ?>
                                                    <tr>
                                                   <td><?php echo $dgc["id_planes"]; ?></td>
                                                   <td><?php echo $dgc["planes"]; ?></td>
                                                   <td><?php echo "$". number_format($dgc["precio"]) ; ?></td>
                                                   <td><?php echo $cotdpw; ?></td>
                                                   <td><?php echo "$". number_format($dgc["cuota_inicial"]) ; ?></td>
                                                    </tr>
                                                    <?php 
                                               } 
                                                ?>
                                              


                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Producción de comerciales para radio, TV e internet</a>
                                        </h4>
                                    </div>
                                    <div id="collapse5" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                               <tr>
                                                <th>Id plan</th>
                                                <th>Plan</th>
                                                <th>Precio</th>
                                                <th>Cotización o credito</th>
                                                <th>Cuota inicial</th>
                                               </tr>
                                               <?php 
                                               foreach ($p_c_r_t as $pcrt)
                                               { 
                                               if ($pcrt["cotizacion"]==0) {$cotdpw = "NO";}else{$cotdpw = "SI";} 
                                                    ?>
                                                    <tr>
                                                   <td><?php echo $pcrt["id_planes"]; ?></td>
                                                   <td><?php echo $pcrt["planes"]; ?></td>
                                                   <td><?php echo "$". number_format($pcrt["precio"]) ; ?></td>
                                                   <td><?php echo $cotdpw; ?></td>
                                                   <td><?php echo "$". number_format($pcrt["cuota_inicial"]) ; ?></td>
                                                    </tr>
                                                    <?php 
                                               } 
                                                ?>
                                              


                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Foto estudio y realización audiovisual</a>
                                        </h4>
                                    </div>
                                    <div id="collapse6" class="panel-collapse collapse">
                                        <div class="panel-body">
                                            <table class="table table-responsive">
                                               <tr>
                                                <th>Id plan</th>
                                                <th>Plan</th>
                                                <th>Precio</th>
                                                <th>Cotización o credito</th>
                                                <th>Cuota inicial</th>
                                               </tr>
                                               <?php 
                                               foreach ($fe_r_av as $ferav)
                                               { 
                                               if ($ferav["cotizacion"]==0) {$cotdpw = "NO";}else{$cotdpw = "SI";} 
                                                    ?>
                                                    <tr>
                                                   <td><?php echo $ferav["id_planes"]; ?></td>
                                                   <td><?php echo $ferav["planes"]; ?></td>
                                                   <td><?php echo "$". number_format($ferav["precio"]) ; ?></td>
                                                   <td><?php echo $cotdpw; ?></td>
                                                   <td><?php echo "$". number_format($ferav["cuota_inicial"]) ; ?></td>
                                                    </tr>
                                                    <?php 
                                               } 
                                                ?>
                                              


                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Mantenimiento y soporte</a>
                                        </h4>
                                    </div>
                                    <div id="collapse7" class="panel-collapse collapse">
                                        <div class="panel-body">
                                           <table class="table table-responsive">
                                               <tr>
                                                <th>Id plan</th>
                                                <th>Plan</th>
                                                <th>Precio</th>
                                                <th>Cotización o credito</th>
                                                <th>Cuota inicial</th>
                                               </tr>
                                               <?php 
                                               foreach ($man_y_s as $mays)
                                               { 
                                               if ($mays["cotizacion"]==0) {$cotdpw = "NO";}else{$cotdpw = "SI";} 
                                                    ?>
                                                    <tr>
                                                   <td><?php echo $mays["id_planes"]; ?></td>
                                                   <td><?php echo $mays["planes"]; ?></td>
                                                   <td><?php echo "$". number_format($mays["precio"]) ; ?></td>
                                                   <td><?php echo $cotdpw; ?></td>
                                                   <td><?php echo "$". number_format($mays["cuota_inicial"]) ; ?></td>
                                                    </tr>
                                                    <?php 
                                               } 
                                                ?>
                                              


                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- .panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->