
           <?php 
            $ContActivos = $sair->Get_Actividad_Contratos_Activos_User($_GET["user"]);
            
            ?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            SERVICIOS CONTRATADOS POR EL USUARIO EN ARRAY
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-responsive"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Fecha de movimiento</th>
                                            <th>Descripción</th>
                                            <th>Valor total</th>
                                            <th>Plazo</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($ContActivos as $ContActivo) { 
                                         $fact_empresa = "SI";
                                        if ($ContActivo["facturacion_a_empresa"] == 0) 
                                        {
                                            $fact_empresa = "NO";
                                        }

                                        $cp  =  $ContActivo["cuota_plazo"];
                                        $cuota_plazo=$cp;
                                        if ($cp==0) {
                                            $cuota_plazo="Pago decontado";
                                        }

                                        ?>
                                        <tr> 
                                        <td><?php echo $ContActivo["fecha_activacion"]; ?></td>
                                        <td><?php echo $ContActivo["servicio"]." Plan-".$ContActivo["id_plan_escojido"]. " Fact.Empresa: ". $fact_empresa;  ?></td>
                                        <td><?php echo $ContActivo["total_cobrar"]; ?></td>
                                        <td><?php echo $cuota_plazo; ?></td>
                                    <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                           
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>