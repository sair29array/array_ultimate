<?php 
	foreach ($Respuestas as $replyy) 
      {

      	$usu = $user->GetDatosUserId($replyy["id_user"]);
    	 foreach ($usu as $u_ ) {}
            ?>
              					<!-- Comentarios:  -->
      		<div v-if= "respuesta_escondida != <?php echo $replyy["id_respuesta"]; ?>"  class="col-12 mt-3"> 
				 <div class="row">
				  <div class="col-md-1"> </div>

				   <div class="col-md-1">
				   		
              			
				   </div>
				   <div class="col-md-10 border-left ">
				              <h5 class="h5-responsive" style="color: #636C83;"><i class="fa fa-user-circle"></i><?php echo " ". $u_["nombre_completo"]; 
			                	if ($replyy["id_user"] == $uu["id"]) {
			                		?>  
			                			<div style="float: right;">
			                				&nbsp;<i @click="Editar_respuesta(<?php echo $replyy["id_respuesta"]; ?>)"  style="cursor: pointer; "  class="fa fa-pencil"></i>
			                				&nbsp;<i @click ="eliminar_respuestas(<?php echo $replyy['id_respuesta']; ?>)" style="cursor: pointer; "  class="fa fa-times"></i>
			                			</div>
			                		 <?php 
			                	}
			                ?>
			           		</h5>
			           			<div v-if="edit_respuesta != <?php echo $replyy["id_respuesta"]; ?>" >
			                		<p style="color: #37414a;"><?php echo $replyy["respuesta"] ; ?></p>
			                	</div>
			                	<div v-if="edit_respuesta == <?php echo $replyy["id_respuesta"]; ?>">
			                		
			                		<textarea v-if="!lo_que_se_quiere_editar_esta_vacio" id="new_res"  class="form-control rounded-0" rows="2"><?php echo $replyy["respuesta"];  ?></textarea>
			                		<textarea v-if="lo_que_se_quiere_editar_esta_vacio" id="new_res"  class="form-control rounded-0 border border-danger" rows="2"><?php echo $replyy["respuesta"];  ?></textarea>
			                		<button onclick="capturar_respuesta_nueva();" @click="Editar_respuesta_()" class="btn btn-primary" >Guardar comentario</button>
			                		
			                	</div>

			                	<script > 
			                			 //var new_res = "";
			                			function capturar_respuesta_nueva()
			                			{
			                			   new_res = document.getElementById('new_res').value;
			                			}
			                	</script>
				   </div> 
				 </div>
		    </div>
            <?php 

      }
 ?>