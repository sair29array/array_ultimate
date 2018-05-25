<?php  
$user_ = $user->GetDatosUser($_SESSION["login_user"]); 
foreach ($user_ as $u) {
	$id_user_ = $u["id"];
}

$punt = $act -> GetPuntuacionPara($id_user_ , 2); // sabremos si ya el user tiene puntuación en esta actividad
$p = "";
if ($punt !== 0) 
{
	foreach ($punt as $p) {}
}
		
?>
<script >
	var id_user_ = <?php echo $id_user_; ?>
</script>

<!-- Card -->
<div class="card">

  
  <!-- Card content -->
  <div id="actiidad2" class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a>Actividad 2: Pon en práctica lo que aprendiste hasta ahora.</a></h4>
    <!-- Text -->
     <div v-if="!pbc">
	     	<div class="col-12">
	    	<div class="row">
	    		<div style="float: left;" class="col-md-3">
	    			<img style="width: 50%;" class="img img-responsive" src="img/orale.png">
	    		</div>
	    		<div style="float: right;" class="col-md-9 p-4">
	    		<?php 
              if ($p!=="") 
              {
                ?>
                  <h4>Es hora de ver qué tanto has aprendido hasta este momento. <br> Tu puntuación anterior fue de: <?php echo "(".$p["puntuacion"]. " de 5)"; ?></h4>
                <?php 
              }
           ?>
	    		</div>
	    		
	    	</div>
	    </div>

	    <div  v-if="!watchpreguntas" class="col-12">
	    	
	    	<p @click= "ver_pregunta(0)"  class="blue-text" style="cursor: pointer;">Ver rúbrica</p >
	    	<p @click= "ver_pregunta(1)"  class="blue-text" style="cursor: pointer;">Empezar</p >

	    </div>
    </div>


    <div v-if="pbc">
	     <div class="col-12">
	    	<div class="row">
	    		<div v-if="pbc == 5"> 
	    			<div style="float: right;" class="col-md-3">
	    			<img style="width: 50%;" class="img img-responsive" src="img/muy_bien.png">
	    			</div>
		    		<div style="float: left;" class="col-md-9 p-4">
		    			<h4>¡Excelente! Ahora puedes ir a la siguiente lección</h4>
		    		</div>
	    		</div>

	    		<div v-if="pbc < 5"> 
	    			<div style="float: right;" class="col-md-3">
	    			<img style="width: 50%;" class="img img-responsive" src="img/fallo.png">
	    			</div>
		    		<div style="float: left;" class="col-md-9 p-4">
		    			<h4>¡Vaya! no contestaste de la mejor manera({{pbc}} de 5) debes intentar nuevamente hasta lograrlo   </h4>  <a href="../in/actividad-2">Volver a intentar</a>
		    		</div>
	    		</div>
	    	</div>
	    </div>
    </div>


    <!-- Button -->
    <!--pre>{{$data}}</pre-->

   <div v-if="!pbc">
   	 	 <div v-if="ver_rubrica">
    	
    		<?php include("rubrica_actividad_2.php"); ?>
    	
    </div>

    <div class="col-12">
    	<div class="row">
    		<div class="col-md-1">
    			
    		</div>
    		<div class="col-md-11">
    			<div v-if="p1">
    	<h5>1. Asigna un valor a cada variable</h5>
      <br>
      <p><b>Definir</b> año como <b>Entero</b></p>
      <p><b>Definir</b> nombre como <b>Cadena</b></p>
      <p><b>Definir</b> vocal como <b>Caracter</b></p>
      <p><b>Definir</b> promedio <b>como Real</b></p>

      
      <table>
        <th> <h3>año <- </h3></th>
        <th><input v-model="pr1"   type="text" >  </th>
        <th> <h3>nombre <- </h3></th>
        <th><input v-model="pr2"   type="text" >  </th>
      </table>
      <table>
        <th> <h3>vocal <- </h3></th>
        <th><input v-model="pr3"   type="text" >   </th>
        <th> <h3>promedio <- </h3></th>
        <th><input v-model="pr4"   type="text" >   </th>
      </table>
    
     
		

		<div v-if="pr1 != '' ">
			<div v-if="pr2 != '' ">
          <div v-if="pr3 != '' ">
            <div v-if="pr4 != '' ">
              <button style="float: right;" @click="ver_pregunta(2)" class="btn btn-primary">Siguiente</button>
            </div>
          </div>   
      </div>
		</div>
    </div>





    <div v-if="p2">
      <h5>2. Realiza un algoritmo que permita leer un dato en una variable y luego muestrala en pantalla.</h5>
      <br>
      
     <h6 onclick="window_open_pseint()"  style="cursor: pointer;" class="blue-text">Ejecuta Pseint online para realizar este ejercicio</h6>
    

    <div v-if="pr1 != '' ">
      <div v-if="pr2 != '' ">
          <div v-if="pr3 != '' ">
            <div v-if="pr4 != '' ">
              <button style="float: right;" @click="ver_pregunta(2)" class="btn btn-primary">Siguiente</button>
            </div>
          </div>   
      </div>
    </div>
    </div>





   
    		</div>
    	</div>
    </div>

   </div>



    
  </div>
</div>


<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>
<!-- Card -->
<script type="text/javascript">
	var app = new Vue({
  el: '#actiidad2',
  data: {
    message: '',
    ver_rubrica: false,
    watchpreguntas: false,
    /////PREGUNTA 1 ////
    p1: false,
    ready_p1: false,
    pr1: "", // pregunta 1 respuesta 1
    pr2: "",  // pregunta 1 respuesta 2
    pr3: "",  // pregunta 1 respuesta 3
    pr4: "",  // pregunta 1 respuesta 4
    
    p2: false,
    p3: false,
    p4: false,
    p5: false,

    ////////////Final
    pbc: false //// preguntas bien contestadas

  },

  methods:
  {
  	ver_pregunta(p)
  	{
  		this.ver_rubrica = false;
  		
  		if (p == 1) 
  		{
  			this.opcion_tomada_p1 = false;
  			this.watchpreguntas = true;
  			this.p1 = true;
  			this.p2 = false;
  			this.p3 = false;
  			this.p4 = false;
  			this.p5 = false;
  		}else if (p == 2) 
  		{
  			this.opcion_tomada_p2 = false;
  			this.watchpreguntas = true;
  			this.p1 = false;
  			this.p2 = true;
  			this.p3 = false;
  			this.p4 = false;
  			this.p5 = false;
  		}else if (p == 3) 
  		{
  			this.opcion_tomada_p3 = false;
  			this.watchpreguntas = true;
  			this.p1 = false;
  			this.p2 = false;
  			this.p3 = true;
  			this.p4 = false;
  			this.p5 = false;
  		}else if (p == 4) 
  		{
  			this.opcion_tomada_p4 = false;
  			this.watchpreguntas = true;
  			this.p1 = false;
  			this.p2 = false;
  			this.p3 = false;
  			this.p4 = true;
  			this.p5 = false;
  		}else if (p == 5) 
  		{
  			this.opcion_tomada_p5 = false;
  			this.watchpreguntas = true;
  			this.p1 = false;
  			this.p2 = false;
  			this.p3 = false;
  			this.p4 = false;
  			this.p5 = true;

  		}else if (p == 0) 
  		{
  			this.p1 = false;
  			this.p2 = false;
  			this.ver_rubrica = true;
  		}
  	},
  	responder_pregunta_1(r)
  	{

  		if (r == 1  ) 
  		{
  			this.opcion_tomada_p1 = true;
  			this.pr1 = true;
  			this.pr2 = false;
  			this.pr3 = false;
  			this.rP1 = 1;
  		}else if (r == 2)
  		{
  			this.opcion_tomada_p1 = true;
  			this.pr1 = false;
  			this.pr2 = true;
  			this.pr3 = false;
  			this.rP1 = 2;
  		}else if (r == 3)
  		{
  			this.opcion_tomada_p1 = true;
  			this.pr1 = false;
  			this.pr2 = false;
  			this.pr3 = true;
  			this.rP1 = 3;
  		}
  	},
  	responder_pregunta_2(r)
  	{
  		if (r == 1  ) 
  		{
  			this.opcion_tomada_p2 = true;
  			this.p2r1 = true;
  			this.p2r2 = false;
  			this.p2r3 = false;
  			this.rP2 = 1;
  		}else if (r == 2)
  		{
  			this.opcion_tomada_p2 = true;
  			this.p2r1 = false;
  			this.p2r2 = true;
  			this.p2r3 = false;
  			this.rP2 = 2;
  		}else if (r == 3)
  		{
  			this.opcion_tomada_p2 = true;
  			this.p2r1 = false;
  			this.p2r2 = false;
  			this.p2r3 = true;
  			this.rP2 = 3;
  		}
  	},
  	responder_pregunta_3(r)
  	{
  		if (r == 1  ) 
  		{
  			this.opcion_tomada_p3 = true;
  			this.p3r1 = true;
  			this.p3r2 = false;
  			this.p3r3 = false;
  			this.rP3 = 1;
  		}else if (r == 2)
  		{
  			this.opcion_tomada_p3 = true;
  			this.p3r1 = false;
  			this.p3r2 = true;
  			this.p3r3 = false;
  			this.rP3 = 2;
  		}else if (r == 3)
  		{
  			this.opcion_tomada_p3 = true;
  			this.p3r1 = false;
  			this.p3r2 = false;
  			this.p3r3 = true;
  			this.rP3 = 3;
  		}
  	},
  	responder_pregunta_4(r)
  	{
  		if (r == 1  ) 
  		{
  			this.opcion_tomada_p4 = true;
  			this.p4r1 = true;
  			this.p4r2 = false;
  			this.p4r3 = false;
  			this.rP4 = 1;
  		}else if (r == 2)
  		{
  			this.opcion_tomada_p4 = true;
  			this.p4r1 = false;
  			this.p4r2 = true;
  			this.p4r3 = false;
  			this.rP4 = 2;
  		}else if (r == 3)
  		{
  			this.opcion_tomada_p4 = true;
  			this.p4r1 = false;
  			this.p4r2 = false;
  			this.p4r3 = true;
  			this.rP4 = 3;
  		}
  	},
  	responder_pregunta_5(r)
  	{
  		if (r == 1  ) 
  		{
  			this.opcion_tomada_p5 = true;
  			this.p5r1 = true;
  			this.p5r2 = false;
  			this.p5r3 = false;
  			this.rP5 = 1;
  		}else if (r == 2)
  		{
  			this.opcion_tomada_p5 = true;
  			this.p5r1 = false;
  			this.p5r2 = true;
  			this.p5r3 = false;
  			this.rP5 = 2;
  		}else if (r == 3)
  		{
  			this.opcion_tomada_p5 = true;
  			this.p5r1 = false;
  			this.p5r2 = false;
  			this.p5r3 = true;
  			this.rP5 = 3;
  		}
  	},
  	finalizar()
  	{
  		
  		var pbc_ = 0;
  		////////RESPUESTAS CORRECTAS //////////
  		var pr1_ = 2;
  		var pr2_ = 1;
  		var pr3_ = 2;
  		var pr4_ = 3;
  		var pr5_ = 3;
  		///////////////////////
  		if (
  			this.rP1 == pr1_ && 
  			this.rP2 == pr2_ && 
  			this.rP3 == pr3_ &&
  			this.rP4 == pr4_ &&
  			this.rP5 == pr5_ 
  		   ) 
  		{
  			this.pbc = 5;
  		} 
  		if (this.rP1 == pr1_ ) {pbc_ = pbc_ + 1; }
  		if (this.rP2 == pr2_) {pbc_ = pbc_ + 1; }
		if (this.rP3 == pr3_ ) {pbc_ = pbc_ + 1; }
		if (this.rP4 == pr4_ ) {pbc_ = pbc_ + 1; }
		if (this.rP5 == pr5_ ) {pbc_ = pbc_ + 1; }

		this.pbc = pbc_;

		/////guardamos el resultado en la base de datos 
		var actividad = 1;
		var quien = id_user_;

		 var formData = new FormData();
        formData.append('actividad', actividad);
        formData.append('quien', quien);
        formData.append('pbc_', this.pbc);

                axios.post("../in/drivers/add_puntuacion.php?action=read",formData)
                        .then(function(response) {
            
            console.log(response);
                datos = response.data;
                
        if (datos.resultt  == "1")
          {

           location.reload();
          }
        
                                
        })
        .catch(function (error) {
            console.log(error);
        });
         


  	}
  }
})
</script>


