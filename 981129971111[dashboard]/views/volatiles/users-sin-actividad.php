<?php 

 $actividades = $sair->GetActividadOContratosVigentes();
 $Usuarios = $sair->mostrar_usuarios_array();


 ?>

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Usuarios Array / Usuarios Registrados que no tienen actividad en Array</h4>
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
                                            <th>CC</th>
                                            <th>Nombre completo</th>
                                            <th>Departamento/ciudad</th>
                                            <th>Empresa</th>
                                            <th>Nit</th>
                                            <th>Email</th>
                                            <th>Celular</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php 
                                        	foreach ($Usuarios as $user) 
                                        	{
                                        		$id_user=$user["id"];
                                        		$activo = 0; /// si este valor deja de ser cero quiere decir que es un user activo y que no se debe mostrar aqui porque este es un espacio para no activos
                                        		foreach ($actividades as  $actividad) 
                                        		{
                                        			$id_user_a = $actividad["id_usuario"];

                                        			if ($id_user === $id_user_a) /////si el usuario no está en la tabla de contratos activoss entonces se muestra
                                        			{
                                        				///////////////
			                                        	$activo = $activo + 1;
                                        				//////////////
                                        			}

                                        		}
                                        		if ($activo == 0) 
                                        		{
                                        			//////////////////////////////
                                        			if ($user['cedula']=="") {$mcedula = "No";}else{$mcedula = $user['cedula']; }
			                                            $nombre_apellidos = $user['nombres']." ".$user['apellidos'];
			                                            if ($user['departamento_ciudad']=="") {$mdeciudad="No";}else{$mdeciudad=$user['departamento_ciudad'];}
			                                            if ($user['empresa']=="") {$mempresa = "No"; $mnit="No";}else{$mempresa=$user['empresa']; $mnit =$user['nit_empresa'];}
			                                            if ($user['celular']=="") {$mcelu = "No";}else{$mcelu =$user['celular'];}
			                                            ?>
			                                            <tr class="odd gradeX">
			                                            <td><?php  echo strtoupper($mcedula); ?></td>
			                                            <td><?php  echo strtoupper($nombre_apellidos) ; ?></td>
			                                            <td><?php  echo strtoupper($mdeciudad) ; ?></td>
			                                            <td class="center"><?php  echo strtoupper($mempresa) ; ?></td>
			                                            <td class="center"><?php echo strtoupper($mnit) ; ?></td>
			                                            <td class="center"><?php  echo strtoupper($user['email']) ; ?></td>
			                                            <td class="center"><?php  echo strtoupper($mcelu) ; ?></td>
			                                            </tr>
			                                            <?php
                                        			//////////////////////////////
                                        		}
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

