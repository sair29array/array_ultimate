
<!--Section: Team v.2-->
<section id="v_cuenta" class="section team-section pb-3 ">
    <div  v-if="ver_herramientas" class="row text-center">

         <!--pre>{{$data}}</pre-->

<!--Grid column-->
        

        <!--Grid column-->
        <div class="col-md-3 mb-r blue-text">

           <a v-on:click="ver(2)">
           	 <div class="avatar">
                <img src="img/icons/herramientasUser/folder.png"  alt="Second sample avatar image">
            </div>
            <h4 class="mt-2">Tus datos personales</h4>
            
           </a>

        </div>
        <!--Grid column-->

        <div class="col-md-3 mb-r blue-text">
            <a  v-on:click="ver(1)" >
                <div class="avatar">
                <img src="img/icons/herramientasUser/dashboard.png"  alt="First sample avatar image">
            </div>
            <h4 class="mt-2">Servicios Contratados</h4>
            </a>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <!--div class="col-md-3 mb-r blue-text">
        	<a v-on:click="ver(3)">
        		<div class="avatar">
                <img src="img/icons/herramientasUser/points.png" c alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Puntos y descuentos</h4>
        	</a>
        </div-->
        <!--Grid column-->
        <!--Grid column-->
        <!--div class="col-md-3 mb-r blue-text">
        	<a v-on:click="ver(4)">
        		   <div class="avatar">
                <img src="img/icons/herramientasUser/clerk.png" c alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Sugerencias para ti</h4>
        	</a>
        </div-->
        <!--Grid column-->
        <!--Grid column-->
        <div class="col-md-3 mb-r blue-text">
        	<a v-on:click="ver(5)">
        		   <div class="avatar">
                <img src="img/icons/herramientasUser/bill.png" c alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Facturación</h4>
        	</a>
        </div>
        <!--Grid column-->
        
        <!--Grid column-->
        <div class="col-md-3 mb-r">
        		<a href="./?:=MiCuenta&session=destroy">
        			 <div class="avatar">
                <img src="img/icons/herramientasUser/close.png" c alt="Third sample avatar image">
            </div>
            <h4 class="mt-2">Cerrar sesión </h4>

        		</a>
        </div>
        <!--Grid column-->


        
    </div>

    <!-- AL PRESIONAR UNO DE LOS BOTONES O HERRMIENTAS S ETOMA UNA DECISIÓN -->
    <div  v-if="!ver_herramientas" class="row text-center">
        <!--pre>{{$data}}</pre-->
        <div v-if="tu_actividad" class="col-12 ">
            <?php include("VistasHerramientas/actividad_user.php"); ?>
        </div>
        <div v-if="datos_personales" class="col-12">
            <?php include("VistasHerramientas/Datos_personales_user.php"); ?>
        </div>
        <div v-if="puntos_yDescuentos" class="col-12 ">
            <?php include("VistasHerramientas/PuntosDescuentos.php"); ?>
        </div>
        <div v-if="facturacion" class="col-12 col-md-12 ">
            <?php include("VistasHerramientas/faturacion_user.php"); ?>
        </div>

    </div>
    <!-- fIN DE LA DECISIÓN -->
</section>
<!--Section: Team v.2-->

<script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>
<script src="config/control_de_vistas_herramientas_del_user.js"></script>

