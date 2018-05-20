

<section  class="portafolio">

    
    <div id="app" class="container">

        <div class="row">

             <div class="col-12 mb-4 wow zoomIn mt-5 text-center" data-wow-delay="0.4s">
                    <h1 class="h1-responsive  m-0 text-uppercase title-portafolio  mt-3">Nuestros proyectos exitosos</h1>
                    <hr class="">
                    <p >En array nos da gusto poder presentarte nuestro portafolio de proyectos exitosos, mediante el cual ponemos a tu disposición nuestra experiencia.</p>
                </div>


            <div class="col-12 mb-4 wow zoomIn mt-5 text-center" data-wow-delay="0.4s">
                <!-- Nav tabs -->
<ul class="nav nav-tabs nav-justified">
  <div class="col-12 col-md-3">
    <li class="nav-item">
        
        <button  @click = "Recursos = true " class=" btn btn-primary nav-link"  data-toggle="tab"  v-on:click="Mostrar(1)"  role="tab">Desarrollo de recursos</button>
    </li>
</div>
<div class="col-12 col-md-3">
    <li class="nav-item">
        <button @click = "Edu = true" v-on:click="Mostrar(2)"  class=" btn btn-primary nav-link" data-toggle="tab"  role="tab">Proyectos educativos</button>
    </li>
</div>
<div class="col-12 col-md-3">
    <li class="nav-item">
        <button @click = "audiovisual = true" v-on:click="Mostrar(3)"  class=" btn btn-primary nav-link" data-toggle="tab"  role="tab">Medios audiovisuales</button>
    </li>
</div>
<div class="col-12 col-md-3">
    <li class="nav-item">
        <button @click = "Soporte = true" v-on:click="Mostrar(4)" class=" btn btn-primary nav-link" data-toggle="tab"  role="tab">Soporte técnico</button>
    </li>
</div>
    
</ul>

<!-- Tab panels -->
<div class="tab-content">
    <!--Panel 1-->
   
    <div v-if="Recursos" class="tab-pane fade in show active">
        <br>

        <?php include("DesarrolloWeb.php"); ?>
        
    </div>

    <!--/.Panel 1-->
    <!--Panel 2-->
    <div v-if="Edu" class="tab-pane fade in show active " >
        <br>
        <?php include("educ.php"); ?>
    </div>
    <!--/.Panel 2-->
    <!--Panel 3-->
    <div v-if="audiovisual" class="tab-pane fade in show active" >
        <br>
        <?php include("MedAudVisuales.php"); ?>
    </div>
    <!--/.Panel 3-->

     <!--Panel 4-->
    <div v-if="Soporte" class="tab-pane fade in show active" >
        <br>
        <?php include("MantSoporteTecRyC.php"); ?>
    </div>
    <!--/.Panel 4-->
</div>
            </div>
        </div>
        
    </div> 

</section>




<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

<script>
 var app = new Vue({
  el: '#app',
  data: {
    mostrar: '',
    Recursos: true,
    Edu: false,
    audiovisual: false,
    Soporte: false
  },


   methods: {

        Mostrar(que)
        {
            if (que == 1) {
                app.Edu = false;
                app.audiovisual = false;
                app.Soporte = false;
            }else if (que == 2) {
                 app.Recursos = false;
                app.audiovisual = false;
                app.Soporte = false;
            }else if (que == 3) {
                 app.Recursos = false;
                app.Edu = false;
                app.Soporte = false;
            }else if (que == 4){
                 app.Recursos = false;
                app.audiovisual = false;
                app.Edu = false;
            }
             
        }

   

    
    }

    
})
</script>

