<section class="micuenta">
        <div class="container mt-5 margen-superior text-center">
        <div class="row justify-center">
            <div class="col-12 text-center margen-superior">
                    <div class="mt-5   wow fadeInDown" data-wow-delay="0.4s">
                    <h3 class="text-center blue-text">
                        <?php 
                            if ($name_user!=="" && $apellidos_user !== "") {
                                    echo $name_user." ".$apellidos_user; 
                                }else{
                                    echo $user_["email"]. " // Debes actualizar tus datos personales";
                                }
                        ?>
                        </h3>
                    </div> 
            </div>
        </div>
        <div class="row justify-content-center">
        <div  id="notificaciones">
                <div v-if="notificaciones" class="col-12">
                <div class="col-12 col-sm-12 mt-5   wow zoomIn" data-wow-delay="0.4s">

                   <?php 
                   $actividad_empresa_user = $sair->verificar_actividad_user_Empresa($user_["id"]); 
                   if ($actividad_empresa_user == 1 && isset($_GET["n"])) 
                   {
                    $mensajeNoPuedeModificarEmpresa = "<p style = 'color: red;'><i class='fa fa-bullseye'></i>  Actualmente tú y tu empresa tienen facturación con Array, por tal motivo tu número de cédula y los datos de tu empresa no puede ser modificados.</p>";
                   }
                   if (isset($_GET["erc"])) {
                     $notificacion_error_al_actualizar_cedula = "<i class='fa fa-bullseye'></i> No se logró actualizar tu número de cédula, debido a que ya hay otra persona identificada con el mismo.";
                   }
                   if (isset($_GET["*"])) 
                   {
                     $notificacion_cambio_pass = "<i class='fa fa-bullseye'></i> Actualizaste tu contraseña!.";
                   }
                    
                         if (@$_GET["n"]=="u>") {
                             $mensajeUpdateDta = "<p style = 'color: blue;' > <i class='fa fa-bullseye'></i> !Tus datos han sido actualizados! </p>";
                            }else if (@$_GET["n"]=="u:") {
                            $mensajeUpdateDta = "<p style = 'color: blue;' ><i class='fa fa-bullseye'></i>  !Tus datos han sido actualizados!</p>";
                            }else if (@$_GET["n"]=="u!") {
                            $mensajeUpdateDta = "<p style = 'color: red;' ><i class='fa fa-bullseye'></i> !El correo que intentas actualizar ya está en uso!</p>";
                          }
                    ?>
                    <!-- Card -->
                    <div class="card">

                      <!-- Card image -->
                      <div class="view overlay">
                       
                        <a href="#!">
                          <div class="mask rgba-white-slight"></div>
                        </a>
                      </div>

                      <!-- Card content -->
                      <?php 

                        if ($user_["dealta"] == 1) {
                          ?>
                          <div class="card-body">

                        <!-- Title -->
                        <h4 class="card-title">   Notificaciones <i style="cursor: pointer;" @click = "notificaciones = false"  class=" fa fa-times"></i></h4>
                        <!-- Text -->
                        <p class="card-text"><i class="fa fa-bullseye"></i> Observa la actividad que llevas con Array en este espacio.</p>

                        <p class="card-text"><?php echo @$mensajeNoPuedeModificarEmpresa; ?></p>

                        <p class="card-text"> <?php echo @$mensajeUpdateDta ; ?></p>
                        <p class="card-text"> <?php echo @$notificacion_cambio_pass; ?></p>

                        <!-- Button -->
                        

                      </div>
                          <?php 
                        }
                       ?>

                    </div>
                    <!-- Card -->
                    
                </div>
                   
            </div>
            </div>

        </div>
</section>
<script src="https://unpkg.com/vue"></script>
<script>
    var app = new Vue({
  el: '#notificaciones',
  data: {
    notificaciones: true
  },
  methods:
  {
    Mostrar()
    {
        app.notificaciones = true;
    }
  }
})
</script>


<div class="container  margen-superior">
    <div class="col-12">
        <div class=" wow zoomIn" data-wow-delay="0.4s">
            



            <?php if ($user_["dealta"]==0) {
               include("herramientasUser-CuentaSinActivar.php");
            }else{
               include("herramientasUser-CuentaActivada.php"); 
            } ?>



        </div>
    </div>
</div>
        

</div>

 <?php 
        if (isset($_GET['session'])) {
            $sair->CerrarSesion();
        }
     ?>