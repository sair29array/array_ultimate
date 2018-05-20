
<?php 
	$puntos_descuentos = $sair->GetPuntosDescuentos($user_["id"]);
	$puntos = 0;
	foreach ($puntos_descuentos as $p) 
	{
		$puntos = $puntos + $p["puntos"];
	}
 ?>
<div class="row text-center">
    <div class="col-12  col-md-6 col-lg-8 align-self-center">
        <h3 class="h3-responsive">Consulta general Puntos y descuentos</h3>                    
    </div>
    <div class="col-12 col-md-6 col-lg-4 align-self-center mt-2 mb-4">
        <span class="bloque badge amber btn darken-2">Puntos: <?php echo $puntos; ?></span><a @click = "ver_herramientas = true" class="bloque badge btn red text-white">Volver</a>
    </div>
</div>


	
		<!--Table-->
<table class="table table-responsive-md">

    <!--Table head-->
    <thead class="blue-grey lighten-4">
        <tr>
            <th></th>
            <th class="font-weight-bold">Descuento</th>
            <th class="font-weight-bold">Aplica a</th>
            <th class="font-weight-bold">Motivo</th>
            <th class="font-weight-bold">Fin del descuento</th>
            <th></th>
        </tr>
    </thead>
    <!--Table head-->

    <!--Table body-->
    <tbody>
    	
              

               	<?php 
    			foreach ($puntos_descuentos as $pd) 
    			{

    				?>
    				<tr>
                    <td></td>
    				<td><?php echo $pd["descuento"]."%"; ?></td>
                    <td><?php echo $pd["aplica"]; ?></td>
                    <td><?php echo $pd["motivo"]; ?></td>
                    <td><?php echo $pd["fecha_fin_descuento"]; ?></td>
                    <td></td>
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
