<?php 
$Solicitudes=$sair->GetSolicitudesServiciosContratosUser();


 ?>

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Solicitudes de contratación de servicios</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover table-responsive"  id="dataTables-example">
                                    <thead>
                                        <tr>
                                        	<th></th>
                                            <th>ID DEL USUSARIO</th>
                                            <th>NOMBRE COMPLETO</th>
                                            <th>CONTACTO</th>
                                            <th>SERVICIO SOLICITADO</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        foreach ($Solicitudes as $s) {
                                            $user = $sair->mostrar_Un_User_en_particular($s["id_usuario"]);
                                            foreach ($user as  $u) {}

                                            ?>
                                             <tr class="odd gradeX">
                                             <td><a href="./?:=All-Solcitud&s=<?php  echo  $s['id_solicitud']; ?>&u=<?php echo $u['id']; ?>">Responder y activar</a></td>
                                            <td><?php echo strtoupper($s["id_usuario"]); ?></td>
                                            <td><?php  echo strtoupper($u["nombres"]." ".$u["apellidos"]); ?></td>

                                            <td><?php  echo strtoupper($u["celular"]); ?></td>
                                            <td><?php echo strtoupper($s["servicio"]) ; ?></td>
                                           
                                            </tr>       
                                                   
                                            <?php 
                                        }
                                         ?>
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

