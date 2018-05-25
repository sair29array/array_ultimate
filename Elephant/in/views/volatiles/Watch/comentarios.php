<script type="text/javascript">
	// estas variables deben existir para que  no se altere
	var new_com = "" ; // esta variable indica si un comentario esta siendo editado
	// es decir contiene el nuevo comentario
	var new_res = "";
	// esta hace lo mismo solo que con las respuestas
</script>

<?php 
 $comentarioss = $super_coment -> GetComentarios($_GET["Watch"]);
 //// sacamos los comentarios que han añadido a  esta leccion

 $n = 0 ; /// numero de comentarios 
 foreach ($comentarioss as $c ) {
 	$n = $n +  1;
 }

 ?>


<div class="col-12">
	<div class="row">
		<div class="col-md-12">
		   <h5> <b> <?php echo $n ; ?> comentarios</b></h5>
		</div>
	</div>
</div>
<br>
<?php 
    foreach ($comentarioss as $c ) 
    {
    	 $usuario = $user->GetDatosUserId($c["id_user"]);
    	 foreach ($usuario as $usuario_ ) {}
    	 $Respuestas = $super_coment -> GetRespuestas($c["id_comentario"]);
 		?> 
 			<br>

 			<div  class="col-12 ">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-1">
                		 <h1><i class="fa fa-comments grey-text"></i></h1>
              			</div>
              			<div class="col-md-11">
			                <h5 class="h5-responsive" style="color: #636C83;"><i class="fa fa-user-circle"></i><?php echo " ". $usuario_["nombre_completo"]; 
			                	if ($usuario_["id"] == $uu["id"]) {
			                		?>  
			                			<div style="float: right;">
			                				&nbsp;<i  @click = "reply(<?php echo $c['id_comentario']; ?>) " style="cursor: pointer; "  class="fa fa-reply"></i>
			                				&nbsp;<i @click = "Editar_Comentario(<?php echo $c['id_comentario']; ?>) " style="cursor: pointer; "  class="fa fa-pencil"></i>
			                				&nbsp;<i  @click = "eliminar_comentario(<?php echo $c['id_comentario']; ?>) " style="cursor: pointer; "  class="fa fa-times"></i>
			                			</div>
			                		 <?php 
			                	}else{
			                		?>  

			                			<div style="float: right;">
			                				&nbsp;<i style="cursor: pointer; " @click = "reply(<?php echo $c['id_comentario']; ?>) "  class="fa fa-reply"></i>
			                			</div>
			                		 <?php 
			                	}
			                ?></h5>
			                
			                	<div v-if="Editar_Comentario_ != <?php echo $c["id_comentario"]; ?>" >
			                		<p style="color: #37414a;"><?php echo $c["comentario"] ; ?></p>
			                	</div>

			                	<div v-if="Editar_Comentario_ == <?php echo $c["id_comentario"]; ?>" >
			                		
			                		<textarea v-if= "!lo_que_se_quiere_editar_esta_vacio" id="new_com"  class="form-control rounded-0" rows="3"><?php echo $c["comentario"];  ?></textarea>

			                		<textarea v-if= "lo_que_se_quiere_editar_esta_vacio" id="new_com"  class="form-control rounded-0 border border-danger" rows="3"><?php echo $c["comentario"];  ?></textarea>

			                		<button onclick="capturar_comentario_nuevo();" @click="Edit_coment()" class="btn btn-primary" >Guardar comentario</button>
			                		
			                	</div>

			                	<script > 
//			                			var new_com = "";
			                			function capturar_comentario_nuevo()
			                			{
			                			   new_com = document.getElementById('new_com').value;
			                			}
			                	</script>
              			</div>


              			<?php 
              				include("muestra_respuestas.php");
              			 ?>


              			<!-- caja de respuestas:  -->
              			<div v-if="reply_ == <?php echo $c['id_comentario']; ?> " class="col-12"> 
				            <div class="row">
				            	<div class="col-md-1">
				                
				              </div>
				              <div class="col-md-1">
				                
				              </div>
				              <div class="col-md-10">
				                <h5 class="h5-responsive" style="color: #636C83;"><i class="fa fa-user-circle"></i> <?php echo " ". $uu["nombre_completo"]; ?></h5>
				                <h5><span style="width: 100%;" v-if="vacio_r" class="badge red">{{messager}}</span></h5>
				                <textarea v-model="respuesta" @click="vacio_r=false" class="form-control rounded-0" id="exampleFormControlTextarea2" rows="2"></textarea>
				              </div>
				            </div>
				             <button @click="responder()" class="btn btn-primary float-right" type="submit">Responder</button>
				         </div>



					</div>
				</div>
				
			</div>
			<br>
 		<?php 
 	}
 ?>

