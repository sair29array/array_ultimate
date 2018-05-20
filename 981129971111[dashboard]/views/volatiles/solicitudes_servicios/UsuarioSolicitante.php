<?php 
if (isset($_POST["ok_data_user"])) 
{

    $nombres = $_POST["nombre"];
    $apellidos = $_POST["apellidos"];
    $cedula = $_POST["cedula"];
    $ubicacion = $_POST["ubicacion"];
    $empresa = $_POST["empresa"];
    $nit = $_POST["nit"];
    $Celular = $_POST["celular"];


    $update = $sair->ActualizarDatosDelUser($u_["id"],$s_["id_solicitud"],$cedula,$nombres,$apellidos,$ubicacion,$empresa,$nit,$Celular);


    /////////////////// aviso
 
    
    /*switch ($upd) 
    {
        case 'erall': /// ok
            
        case 1: /// ok
            $aviso = "<p style='color: green;' > Se actualizaron los datos del usuario </p>"  ; 
        case 2: /// cedula ya existe
            $aviso = "<p style='color: red;' > La cedula ingresada ya tiene titular </p>";

        case 3: /// nit ya existe
            $aviso = "<p style='color: red;' > El nit de la empresa ingresada ya tiene titular </p>"  ; 
        case 4: /// celular ya existe
            $aviso = "<p style='color: red;' > El celular ingresado ya tiene titular </p>"  ; 

        break;
    }*/


}




 ?>

            <div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Solicitante: <?php echo $u_["nombres"]." ".$u_["apellidos"]; ?> / Datos personales</h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php 
                            if (isset($_GET["updaller"])) {
                                echo "<p style='color: red;' > Cédula, Nit y celular ingresados, ya tienen titular. </p>";
                            }else if (isset($_GET["updccer"])) {
                                echo "<p style='color: red;' > La cédula ingresada ya tiene titular </p>";
                            }else if (isset($_GET["updcer"])) {
                                echo "<p style='color: red;' > El celular ingresado ya tiene titular </p>";
                            }else if (isset($_GET["updner"])) {
                                echo "<p style='color: red;' > El nit de la empresa ingresada ya tiene titular </p>";
                            }else if (isset($_GET["upd"])) {
                                echo "<p style='color: green;' > Los datos del usuario fueron guardados correctamente </p>";
                            }
                            ?>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive" >
                                <table class="table table-striped table-bordered table-hover table-responsive"  >
                                    <thead>
                                        <tr>
                                            <th>CC</th>
                                            <th>Nombre (s)</th>
                                            <th>Apellidos</th>
                                            <th>Departamento/ciudad</th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	<form method="POST" action="">
	                                       <tr>
	                                       	<td>
	                                       	<input  required="true"  type="number" name="cedula" value="<?php echo $u_["cedula"]; ?>">
	                                       </td>
	                                       <td><input  required="true"  type="text" name="nombre" value="<?php echo $u_["nombres"]; ?>"></td>
	                                       <td><input required="true"  type="text" name="apellidos" value="<?php echo $u_["apellidos"]; ?>"></td>
	                                       <td><input  required="true" type="text" name="ubicacion" value="<?php echo $u_["departamento_ciudad"]; ?>"></td>
	                                       
	                                      
	                                       </tr>
                                   
                                    </tbody>
                                </table>


                                 <table class="table table-striped table-bordered table-hover table-responsive"  >
                                    <thead>
                                        <tr>
                                            
                                            <th>Empresa</th>
                                            <th>Nit</th>
                                            <th>Email</th>
                                            <th>Celular</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
	                                       <tr>
	                                       	
	                                       <td><input type="text" name="empresa" value="<?php echo $u_["empresa"]; ?>"></td>
	                                       <td><input type="number" name="nit" value="<?php echo $u_["nit_empresa"]; ?>"></td>
	                                       <td><input type="text" disabled="true" name="email" value="<?php echo $u_["email"]; ?>"></td>
	                                       <td><input  required="true" type="number" name="celular" value="<?php echo $u_["celular"]; ?>"></td> 
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
                                    		<td> <button type="submit" name="ok_data_user" class="btn btn-primary btn-lg btn-block">ACEPTAR Y GUARDAR DATOS</button></td>
                                    	</tr>
                                    </tbody>
                                	
                                </table>
                                </form>
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

