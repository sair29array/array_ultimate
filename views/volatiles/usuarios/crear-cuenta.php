<?php 
if (isset($_SESSION['user_log'])) { ?> <script> window.location="./" ;</script> <?php  }// si ya el usuario inicio sesion -- ni tiene nada que hacer aqui !
if ( isset($_GET['user'])) {
    $u = $_GET["user"];
    $_SESSION['user_log']=$u;
    
    ?>
    <script>window.location="./" ; </script>
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







///////////////////////////////////SOSIAL LOGIN CONFIG////////////////////////////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////
///////////////////////////////////SOSIAL LOGIN CONFIG/////////////////////


 ?>
    <section class="crear-cuenta">
        <div class="container">
        <div class="row justify-content-center wow fadeInUp " data-wow-delay="0.4s">
            <div class="col-12 col-sm-8 col-md-5 margen-superior">
                <!-- tarjeta-->
            <div class="card mb-5" id="contenedor_">
                <div class="text-center mt-3">
                    <span   style="color: red;" >{{alert}}</span class="mostrar_alerta_login">
                    <span   style="color: green;" >{{cargando}}</span class="mostrar_alerta_login">
                </div>
                <!-- Card body -->
                <div class="card-body">
                    <!-- Material form register -->
                        <div class="md-form">
                            <div class="mt-auto mb-3 text-center">
                        <a href="<?php echo $auth_url; ?>" role="button" class=" btn boton-google btn-md  waves-effect ">
                        <span class="title-btn-social"><i class="fab fa-google title-btn-social"></i> | Registrate  con Google</h5></a>
                        </div>
                        </div>
                        <div class="text-center">
                            <strong class="login-linea">o</strong>
                            <h5 class="mb-4 text-black">Registrate con tu Email</h5>
                        </div>
                        <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input v-model="nombres" type="text" id="materialFormCardNameEx" class="form-control">
                            <label for="materialFormCardNameEx" class="font-weight-light">Nombres</label>
                        </div>

                         <!-- Material input text -->
                        <div class="md-form">
                            <i class="fa fa-user prefix grey-text"></i>
                            <input v-model="apellidos" type="text" id="materialFormCardNameEx" class="form-control">
                            <label for="materialFormCardNameEx" class="font-weight-light">Apellidos</label>
                        </div>

                        <!-- Material input email -->
                        <div class="md-form">
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input v-model="email" type="email" id="materialFormCardEmailEx" class="form-control">
                            <label for="materialFormCardEmailEx" class="font-weight-light">Correo</label>
                        </div>

                        <!-- Material input password -->
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input v-model="password" type="password" id="materialFormCardPasswordEx" class="form-control">
                            <label for="materialFormCardPasswordEx" class="font-weight-light">Contraseña</label>
                        </div>

                        <!-- Material input password -->
                        <div class="md-form">
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input v-model="confirm_pass" type="password" id="materialFormCardPasswordEx" class="form-control">
                            <label for="materialFormCardPasswordEx" class="font-weight-light">Confirmar contraseña</label>
                        </div>
                        <div class="text-center">
                            <button v-on:click="enviar"  class="btn boton-login btn-md waves-effect" type="submit"><h5 class="m-auto">Registrarse <i class="fas fa-sign-out-alt"></i></h5></button>
                        </div>
                </div>
                 <div class="mb-3 mt-0 black-text text-center">
                    <h5 class="bloque h5-responsive">¿Ya tienes una cuenta?</h5>
                        <a class="h5-responsive" href="./?:=iniciar-sesion">Inicia sesión</a>
                </div>
                <!-- Card body -->

            </div>
            <!-- Card -->
            </div>
            
            
                         
            </div>
        </div>
        </div>
     </section>
 <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
<script src="https://unpkg.com/vue"></script>

<script src="config/vue_nueva_cuenta.js"></script>