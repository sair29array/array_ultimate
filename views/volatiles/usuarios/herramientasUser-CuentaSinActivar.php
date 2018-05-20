<!--Card-->
<div class="card card-cascade wider reverse my-4">

   

    <!--Card content-->
    <div id="app" class="card-body text-center">
    	
			
		
        <!--Title-->
        <h2 class="card-title"><strong>Para contratar nuestros servicios y usar tus herramientas, debes activar tu cuenta.</strong></h2>
        <h5 class="indigo-text"><strong>
        	<?php if (!isset($_GET["r"])) {
        		?>Visita tu correo electrónico. Hemos enviado un e-mail de activación el día que te uniste a Array. <?php 
        	}else{
        		?>Visita tu correo electrónico. Hemos enviado un e-mail de activación nuevamente!<?php 
        	} ?>
        </strong></h5>

        <p  class="card-text"><a v-on:click="redirect"  v-if="!ReenviarEmailActivacion" @click = "ReenviarEmailActivacion = true " >Reenviar e-mail de activación</a>
        </p>
        <p v-if="ReenviarEmailActivacion"  class="card-text">Enviando e-mail de activación ... 
        </p>

       

    </div>
    <!--/.Card content-->

</div>
<!--/.Card-->
<style type="text/css">
    .CuentaNoActivada
    {
        opacity: 0.5;
    }
</style>




<!--Section: Team v.2-->
<section class="section team-section pb-3 CuentaNoActivada">
    <div class="row text-center">

         

<!--Grid column-->
        <div class="col-md-3 mb-r">
            <div class="avatar">
                <img src="img/icons/herramientasUser/dashboard.png" class="z-depth-1" alt="First sample avatar image">
            </div>
            <h4 class="mt-2">Tu actividad</h4>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-r">

            <div class="avatar">
                <img src="img/icons/herramientasUser/folder.png" class="z-depth-1" alt="Second sample avatar image">
            </div>
            <h4 class="mt-2">Tus datos personales</h4>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 mb-r">

            <div class="avatar">
                <img src="img/icons/herramientasUser/points.png" class="z-depth-1" alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Puntos y descuentos</h4>

            

        </div>
        <!--Grid column-->
         <!--Grid column-->
        <div class="col-md-3 mb-r">
        	<div class="avatar">
                <img src="img/icons/herramientasUser/clerk.png" class="z-depth-1" alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Sugerencias para ti</h4>
        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-3 mb-r">

            <div class="avatar">
                <img src="img/icons/herramientasUser/bill.png" class="z-depth-1" alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Facturación</h4>

            

        </div>
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-3 mb-r" style="opacity: 2.5 !important;">

            <a href="./?:=MiCuenta&session=destroy">
            	<div  class="avatar ">
                <img src="img/icons/herramientasUser/close.png" class="z-depth-1" alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Cerrar sesión </h4>
            </a>

            

        </div>
        <!--Grid column-->


        
    </div>
</section>
<!--Section: Team v.2-->



            
<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script>
 var app = new Vue({
  el: '#app',
  data: {
    ReenviarEmailActivacion: false
   
  },

  	methods: 
  	{
  		redirect()
  		{
  				setTimeout("location.href='./?:=MiCuenta&r';",3000);
  		}
  	}

    
})


</script>

<?php 
		if (isset($_GET["r"])) {
			//// enviar email de activación //////////
			$sair->EnviarEmailActivacionCuenta($user_["email"],$user_["nombres"],$user_["apellidos"]);
		}
 ?>