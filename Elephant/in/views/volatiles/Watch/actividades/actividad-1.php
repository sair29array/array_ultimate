<?php  
$user_ = $user->GetDatosUser($_SESSION["login_user"]); 
foreach ($user_ as $u) {
	$id_user_ = $u["id"];
}

$punt = $act -> GetPuntuacionPara($id_user_ , 1); // sabremos si ya el user tiene puntuación en esta actividad

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
  <div id="app" class="card-body">

    <!-- Title -->
    <h4 class="card-title"><a>Actividad 1: Conceptos básicos para la introducción a la lógica</a></h4>
    <!-- Text -->
     <div v-if="!pbc">
	     	<div class="col-12">
	    	<div class="row">
	    		<div style="float: left;" class="col-md-3">
	    			<img style="width: 50%;" class="img img-responsive" src="img/orale.png">
	    		</div>
	    		<div style="float: right;" class="col-md-9 p-4">
	    			<h4>Es hora de ver qué tanto has aprendido hasta este momento. <br> Tu puntuación anterior fue de: <?php echo "(".$p["puntuacion"]. " de 5)"; ?></h4>
	    		</div>
	    		
	    	</div>
	    </div>

	    <div  v-if="!watchpreguntas" class="col-12">
	    	<h5>Solo son unas cuantas preguntas que debes resolver para pasar a la siguiente lección</h5>
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
		    			<h4>¡Vaya! no contestaste de la mejor manera({{pbc}} de 5) debes intentar nuevamente hasta lograrlo   </h4>  <a href="../in/actividad-1">Volver a intentar</a>
		    		</div>
	    		</div>
	    	</div>
	    </div>
    </div>


    <!-- Button -->
    <!--pre>{{$data}}</pre-->

   <div v-if="!pbc">
   	 	 <div v-if="ver_rubrica">
    	
    		<?php include("rubrica_actividad_1.php"); ?>
    	
    </div>

    <div class="col-12">
    	<div class="row">
    		<div class="col-md-1">
    			
    		</div>
    		<div class="col-md-11">
    			<div v-if="p1">
    	<h5>1. ¿Los algoritmos son?</h5>

    	<div class="">
		    <input @click="responder_pregunta_1(1)" class="form-check-input" name="pregunta1"  type="radio" id="radio100">
    		<label class="form-check-label" for="radio100">Conjunto ordenado de operaciones sistemáticas que permite hacer un cálculo y hacer que las computadoras resuelvan problemas.</label>

		</div>
		<div class="">
    		<input @click="responder_pregunta_1(2)" class="form-check-input" name="pregunta1" type="radio" id="radio2">
    		<label class="form-check-label" for="radio2">Conjunto ordenado de operaciones sistemáticas que permite hacer un cálculo y hallar la solución de un tipo de problemas.</label>

    		
		</div>
		<div class="">

    		<input @click="responder_pregunta_1(3)" class="form-check-input" name="pregunta1" type="radio" id="radio3">
    		<label class="form-check-label" for="radio3">Conjunto ordenado de operaciones y procesos que sirven para realizar tareas y ejercicios.</label>
		</div>

		<div v-if="opcion_tomada_p1">
			<button style="float: right;" @click="ver_pregunta(2)" class="btn btn-primary">Siguiente</button>
		</div>
    </div>




    <div v-if="p2">
    	<h5>2. ¿Cuál es la relación entre Hardware, Software, dato, Información, Algoritmo, Programa y lenguaje de programación?</h5>

    	<div>
		    <input  @click="responder_pregunta_2(1)" class="form-check-input" name="pregun"  type="radio" id="radio10">
    		<label class="form-check-label" for="radio10">A través del lenguaje de programación se pueden establecer tareas o algoritmos que un ordenador pueda interpretar y ejecutar, para luego resolver problemas teniendo como respuesta un comportamiento físico o lógico.</label>

		</div>

		<div>
    		<input @click="responder_pregunta_2(2)" class="form-check-input" name="pregun" type="radio" id="radio22">
    		
    		<label class="form-check-label" for="radio22">A través del ordenador se pueden establecer tareas usando la programación, la información, datos, el hardware y el software para crear herramientas que sirvan para satisfacer necesidades.</label>
		</div>

		<div>

    		<input @click="responder_pregunta_2(3)" class="form-check-input" name="pregun" type="radio" id="radio33">
    		<label class="form-check-label" for="radio33">La relación más válida entre estos conceptos, es que usandolos de forma correcta podemos crear herramientas que satisfagan necesidades.</label>
		</div>

		<div v-if="opcion_tomada_p2">
			<button style="float: right;"  @click="ver_pregunta(3)" class="btn btn-primary ">Siguiente</button>
		</div>
		<div >
			<button style="float: left;"  @click="ver_pregunta(1)" class="btn btn-primary ">Anterior</button>
		</div>
    </div>





    <div v-if="p3">
    	<h5>3. Pseint es una herramienta que es es utilizada para aprender los fundamentos de la programación, porque...</h5>

    	<div>
    		<table>
    			<th><input   @click="responder_pregunta_3(1)" style="margin-bottom: 6;" class="form-check-input" name="preg"  type="radio" id="radio"></th>
    			<th><label class="form-check-label" for="radio">Es un lenguaje de programación muy fácil de usar debido a que está en español, y es capaz de ejecutar programas que resuelven problemas.</label></th>
    		</table><br>

		</div>

		<div>
    		<table>
    			<th><input  @click="responder_pregunta_3(2)" style="margin-bottom: 6;" class=" form-check-input" name="preg" type="radio" id="radii"></th>
    			<th><label class="form-check-label" for="radii">Es un software que interpreta el Pseudocódigo, el cual es el lenguaje que adquirimos para aprender a programar en nuestra lengua materna y permite ejecutarlo como un lenguaje de programación; además sus herramientas de apoyo son muy simples de usar.</label>
				</th>
    		</table><br>
		</div>

		<div>
			<table>
				
					<th><input  @click="responder_pregunta_3(3)" style="margin-bottom: 6;" class=" form-check-input"  name="preg" type="radio" id="radi"></th>
					<th><label class="form-check-label" for="radi">Es un software que interpreta el Pseudocódigo para crear programas utilizando un lenguaje de programación, como lo es la lengua materna.</label></th>
				
			</table><br>
		</div>

		<div v-if="opcion_tomada_p3">
			<button style="float: right;"  @click="ver_pregunta(4)" class="btn btn-primary ">Siguiente</button>
		</div>
		<div >
			<button style="float: left;"  @click="ver_pregunta(2)" class="btn btn-primary ">Anterior</button>
		</div>
    </div>



     <div v-if="p4">
    	<h5>4. Las variables representan datos...</h5>

    	<div>
		    <input  @click="responder_pregunta_4(1)" class="form-check-input" name="pregun"  type="radio" id="radio10">
    		<label class="form-check-label" for="radio10">Númericos y texto que conforman la información para crear algoritmos.</label>

		</div>

		<div>
    		<input @click="responder_pregunta_4(2)" class="form-check-input" name="pregun" type="radio" id="radio22">
    		
    		<label class="form-check-label" for="radio22">Entero, naturales, decimales y texto que conforman la información para crear algoritmos.</label>
		</div>

		<div>

    		<input @click="responder_pregunta_4(3)" class="form-check-input" name="pregun" type="radio" id="radio33">
    		<label class="form-check-label" for="radio33">Númericos y texto que pueden ser de entrada o de salida.</label>
		</div>

		<div v-if="opcion_tomada_p4">
			<button style="float: right;"  @click="ver_pregunta(5)" class="btn btn-primary ">Siguiente</button>
		</div>
		<div >
			<button style="float: left;"  @click="ver_pregunta(3)" class="btn btn-primary ">Anterior</button>
		</div>
    </div>



    <div v-if="p5">
    	<div>5. Pasos para hacer un puré de papas: <br><br>
    			1. Buscar los utensilios <br>
    			2. Lavar las papas <br>
    			3. llenar una olla con agua <br>
    			4. <div class="blue-text" v-if="rP5 == 1">Colocar las papas dentro de la olla</div>
    			<div class="blue-text" v-if="rP5 == 2">Quitarle la concha a las papas</div><div class="blue-text" v-if="rP5 == 3">Colocar las papas dentro de la olla</div> <br>
    			5. <div class="blue-text" v-if="rP5 == 1">Encender la estufa</div>
    			<div class="blue-text" v-if="rP5 == 2">Encender la estufa</div><div class="blue-text" v-if="rP5 == 3">Encender la estufa</div> <br>
    			6. Colocar la olla en la estufa <br>
    			7. Esperar a que hiervan <br>
    			8. Retirar las papas <br>
    			9. Quitar la concha de las papas <br>
    			10. Triturar las papas <br>
    			11. Agregar queso, mantequilla y leche <br>
    			12. <div class="blue-text" v-if="rP5 == 1">Colocar la olla en la cocina</div>
    			<div class="blue-text" v-if="rP5 == 2">Mezclar</div><div class="blue-text" v-if="rP5 == 3">Mezclar</div> <br>
    			13. Agregar sal al gusto <br>
    			14. Servir  <br>

    			¿Cuáles son los tres pasos que hacen falta (4,5,12)?
    	</div>

    	<div>
    		<table>
    			<th><input   @click="responder_pregunta_5(1)" style="margin-bottom: 6;" class="form-check-input" name="preg"  type="radio" id="radio"></th>
    			<th><label class="form-check-label" for="radio">4.Colocar las papas dentro de la olla. 5. Encender la estufa 12. Colocar la olla en la cocina</label></th>
    		</table><br>

		</div>

		<div>
    		<table>
    			<th><input  @click="responder_pregunta_5(2)" style="margin-bottom: 6;" class=" form-check-input" name="preg" type="radio" id="radii"></th>
    			<th><label class="form-check-label" for="radii">4.quitarle la concha a las papas. 5. Encender la estufa 12. Mezclar</label>
				</th>
    		</table><br>
		</div>

		<div>
			<table>
				
					<th><input  @click="responder_pregunta_5(3)" style="margin-bottom: 6;" class=" form-check-input"  name="preg" type="radio" id="radi"></th>
					<th><label class="form-check-label" for="radi">4.Colocar las papas dentro de la olla. 5. Encender la estufa 12. Mezclar</label></th>
				
			</table><br>
		</div>

		


		<div v-if="opcion_tomada_p5">
			<button style="float: right;"  @click="finalizar()" class="btn btn-primary ">Siguiente</button>
		</div>
		<div >
			<button style="float: left;"  @click="ver_pregunta(4)" class="btn btn-primary ">Anterior</button>
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
  el: '#app',
  data: {
    message: '',
    ver_rubrica: false,
    watchpreguntas: false,
    /////PREGUNTA 1 ////
    p1: false,
    opcion_tomada_p1: false,
    pr1: false, // pregunta 1 respuesta 1
    pr2: false,  // pregunta 1 respuesta 2
    pr3: false,  // pregunta 1 respuesta 3
    rP1: "",  /// ES LA RESPUESTA FINAL DE LA PREGUNTA 1

    //// PREGUNTA 2 ////
    p2: false,
     opcion_tomada_p2: false,
    p2r1: false, // pregunta 2 respuesta 1
    p2r2: false,  // pregunta 2 respuesta 2
    p2r3: false,  // pregunta 2 respuesta 3
    rP2: "",  /// ES LA RESPUESTA FINAL DE LA PREGUNTA 2

     //// PREGUNTA 3 ////
    p3: false,
     opcion_tomada_p3: false,
    p3r1: false, // pregunta 2 respuesta 1
    p3r2: false,  // pregunta 2 respuesta 2
    p3r3: false,  // pregunta 2 respuesta 3
    rP3: "",  /// ES LA RESPUESTA FINAL DE LA PREGUNTA 2


    //// PREGUNTA 4 ////
    p4: false,
     opcion_tomada_p4: false,
    p4r1: false, // pregunta 4 respuesta 1
    p4r2: false,  // pregunta 4 respuesta 2
    p4r3: false,  // pregunta 4 respuesta 3
    rP4: "",  /// ES LA RESPUESTA FINAL DE LA PREGUNTA 4


     //// PREGUNTA 5 ////
    p5: false,
     opcion_tomada_p5: false,
    p5r1: false, // pregunta 5 respuesta 1
    p5r2: false,  // pregunta 5 respuesta 2
    p5r3: false,  // pregunta 5 respuesta 3
    rP5: false,  /// ES LA RESPUESTA FINAL DE LA PREGUNTA 5


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


