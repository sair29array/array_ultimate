<?php 
$id_user = $_GET["user"];
$u = $sair-> mostrar_Un_User_en_particular($id_user);
foreach ($u as $user) {}

?>
 			<div class="row">
                <div class="col-lg-12">
                    <h4 class="page-header">Usuarios Array / Usuario: <?php echo $user["nombres"]. " ". $user["apellidos"];  ?></h4>
                </div>
                <!-- /.col-lg-12 -->
            </div>
<?php 


///////// 

	
    include("detalles_de_un_user_en_particular/ServiciosContratados.php");
    //include("detalles_de_un_user_en_particular/ProductosComprados.php");
	include("detalles_de_un_user_en_particular/PuntosYDescuentos.php");
	include("detalles_de_un_user_en_particular/RecibosPendientes.php");
	include("detalles_de_un_user_en_particular/HistorialDePago.php");
	include("detalles_de_un_user_en_particular/DatosPersonales.php");






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

