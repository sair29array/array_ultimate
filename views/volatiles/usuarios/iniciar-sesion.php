<?php 
if (isset($_SESSION['user_log'])) { ?> <script> window.location="./" ;</script> <?php  }
if ( isset($_GET['user'])) {
    $u = $_GET["user"];
    $_SESSION['user_log']=$u;
    
    ?><script>window.location="./" ; </script>
    <?php 
   
}
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
require_once("config/social_login/vendor/autoload.php");

////////////////////////GOOGLE///////////////////////////
//Step 1: Enter you google account credentials

$g_client = new Google_Client();

$g_client->setClientId("886385635344-j4aic13ehet2s0e7ab3jdlea05ifblag.apps.googleusercontent.com");
$g_client->setClientSecret("wCVWwmlhXpu48VjRf3FhOOJf");
$g_client->setRedirectUri("https://www.array.com.co/?:=iniciar-sesion");
$g_client->setScopes("email");

//Step 2 : Create the url
$auth_url = $g_client->createAuthUrl();
//echo "<a href='$auth_url'>Login Through Google </a>";

//Step 3 : Get the authorization  code
$code = isset($_GET['code']) ? $_GET['code'] : NULL;

//Step 4: Get access token
if($code !== "" && !isset($_GET["fb"])) {

    try {

        $token = $g_client->fetchAccessTokenWithAuthCode($code);
        $g_client->setAccessToken($token);

    }catch (Exception $e){
        //echo $e->getMessage();
    }




    try {
        $oAuth = new Google_Service_Oauth2($g_client);
        $pay_load = $oAuth->userinfo_v2_me->get();


    }catch (Exception $e) {
       // echo $e->getMessage();
    }

} else{
    $pay_load = null;
}

if(@$pay_load!== null)
{
  ///////¿Es un usuario nuevo o un usuario ya existente?//////////////
    $confirmEmail = $sair->ConfirmEmail($pay_load["email"]);
    if ($confirmEmail == 0) /// si en la DB no hay correos iguales a este
    {
      $nombres = $pay_load["givenName"];
      $apellidos = $pay_load["familyName"];
      $email = $pay_load["email"];
      $pass = $pay_load["email"]."array981129sa";
      $sair->CrearCuentaParaNuevoUsuario($nombres,$apellidos,$email,$pass);
      // creamos la sesión para este user
      $_SESSION["user_log"] =  $email;
      //redirect to home:
      ?><script>window.location="./?<?php echo "Hello! ".$pay_load["name"]; ?>" ; </script><?php 
    }else{
      // creamos la sesión para este user
      $_SESSION["user_log"] =  $pay_load["email"];
      //redirect to home:
      ?><script>window.location="./?<?php echo "Hello! ".$pay_load["name"]; ?>" ; </script><?php 
    }
}

////////////////////////////FINAL DE GOOGLE///////////////////////////

//////////////////////FACEBOOK//////////////////////////////////
require_once("config/social_login/app/clases/facebook_class.php");
$facebook = new Facebook\Facebook([
'app_id' => '293264547872236',
'app_secret'=> 'e5e5446bb9a4f686734396a0ec499e80',
'default_graph_version'=>'v2.6',
]);

$fbauth = new FacebookAuth($facebook);
$facebookUrl = $fbauth->getAuthUrl();
if (isset($_GET["code"]) && isset($_GET["fb"]) ) {
 $login = $fbauth->login();
 
    ?> <script>location.href="./?<?php echo $login; ?>";</script> <?php 

   
 
}


//////////////////////FINAL FACEBOOK//////////////////////////////


///////////////////////////////////SOSIAL LOGIN CONFIG////////////////////////////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////

 ?>
    <section class="iniciar-sesion">
      <div class="container">
      <div class="row justify-content-center wow fadeInUp " data-wow-delay="0.4s">
        <div class="col-12 col-sm-8 col-md-5 margen-superior">
          
          
          <div class="card mb-4" id="vlogin">
            
            <pre></pre>
        <div class="h5 black-text text-center">
          <h6 v-if="er"  class="mt-3" style="color: red;" >{{mostrar_mensajes_de_alerta_o_errores}}</span> <h6   style="color: green;" >{{cargando}}</span>
        </div>

          <div class="card-body">
              <!-- Material form register -->
              
                  <div class="md-form">
                      <div class="mt-auto mb-3 text-center">
                        <a  href="<?php echo $auth_url; ?>" role="button" class=" btn boton-google btn-md  waves-effect ">
                            <span class="title-btn-social"><i class="fab fa-google title-btn-social"></i> | Iniciar sesión con Google</span></a>
                        </div>
                  </div>
                  <div class="text-center">
                    <strong class="login-linea">o</strong>
                    <h5 class="mb-3 text-black">Inicia sesión con tu Email</h5>
                  </div>
                  <!-- Material input email -->
                  <div class="md-form ">
                      <!--i class="fa fa-envelope grey-text prefix"></i-->
                      <input v-model="login" @click = "er = false" type="email" id="materialFormCardEmailEx" class="form-control">
                      <label for="materialFormCardEmailEx" class="font-weight-light ">Correo</label>
                  </div>
                  <!-- Material input password -->
                  <div class="md-form">
                      <!--i class="fa fa-lock grey-text prefix"></i-->
                      <input v-model="password" @click = "er = false" type="password" id="materialFormCardPasswordEx" class="form-control">
                      <label for="materialFormCardPasswordEx" class="font-weight-light">Contraseña</label>
                      
                      
                  </div>
                  
                    <div class="text-center">
                      <button v-on:click="enviar"  class="btn boton-login btn-md waves-effect" type="submit"><h5 class="m-auto">Iniciar sesión <i class="fas fa-sign-out-alt"></i></h5></button>
                    </div>
                    <div class="text-center mt-2">
                        <a  class="blue-text" data-toggle="modal" data-target="#modal"><?php if (isset($_POST["recordar"])) {
                          ?> Hemos enviado tu contraseña a tu correo!<?php 
                        }else{ ?>¿Olvidate tu contraseña? <?php } ?></a>
                    </div>
               </div>
               <div class="text-center mb-3">
                 <h6 class="h6-responsive mb-0"><strong>¿No tienes una cuenta? </strong><a class="blue-text" href="./?:=crear-cuenta"> Registrate</a></h6>
               </div>
  
              
            </div>
        </div>
          
      </div>
      </div>
     </section>
     
  <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>

<script src="config/vue_login.js"></script>
  <!-- Central Modal Medium Info -->
  <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" id="recordador" role="document">
      <!--Content-->
      <div class="modal-content">
          <!--Header-->
          <div class="modal-header">
              <p class="heading lead"> <?php if (isset($_POST["recordar"])){  ?>Volver a enviar contraseña por correo <?php }else{ ?> ¿Has olvidado tu contraseña? <?php } ?></p>
  
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true" class="white-text">&times;</span>
              </button>
          </div>
  <form method="POST" action="">
          <!--Body-->
          <div class="modal-body">
              <div class="text-center">
                  <i class="fa fa-life-ring fa-4x mb-3 animated rotateIn"></i>
                  <p>Por favor ingresa tu dirección de correo electrónico para ayudarte.</p>
                      <div class="md-form">
                      
                      <input required="true"  type="email" name="email_" id="materialFormCardEmailEx" class="form-control">
                      
                  </div>
              </div>
          </div>
  
          <!--Footer-->
          <div class="modal-footer justify-content-center">
              <button class="btn btn-primary" name="recordar" type="submit">Enviar </button>
             
              
          </div>
    </form>
      </div>
      <!--/.Content-->
  </div>
  </div>
  <!-- Central Modal Medium Info-->
  
                                          
<?php 

  if (isset($_POST["recordar"])) 
  {
    $email =$_POST["email_"];
    $sair->RecordarPassUser_enviarPorCorreo($email);
  
  }
 ?>


