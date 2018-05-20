<?php  ?>
<!--Navbar-->
<?php if (!isset($_GET[":"]) && !isset($_GET["activate"]) && !isset($_GET["servicios"])) {
   ?>  <nav style="background-color: #1e1f206b;" class="navbar fixed-top navbar-expand-lg  scrolling-navbar"><?php 
}else{
    ?>  <nav style="background-color: #1e1f20;" class="navbar fixed-top navbar-expand-lg  scrolling-navbar"> <?php 
} ?>
       
            <div class="container">
            
                    <a href="./"><img class="img img-responsive img-logo" src="img/logo-nombre.png" alt="logo-name"><span class="text-white title-logo">ARRAY</span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarContent" aria-controls="navbarContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-bars"></i>
                    </button>
             
                <div <?php if (isset($_SESSION['user_log'])) {
                    ?> class="col-sm-12 col-md-12 col-lg-8 collapse navbar-collapse" <?php 
                }else if(isset($_GET[':']) || isset($_GET["servicios"])){
                    ?> class="col-sm-12 col-md-12 col-lg-9 collapse navbar-collapse" <?php 
                }else if (!isset($_GET[':']) && !isset($_GET['user_log'])) {
                     ?> class="col-sm-12 col-md-12 col-lg-8 collapse navbar-collapse" <?php 
                } ?> id="navbarContent">
                    <!--Links-->
                    <ul class="navbar-nav mr-auto smooth-scroll">
                        <li class="nav-item" >
                            <a <?php if (!isset($_GET[':']) && !isset($_GET["servicios"])) {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="./" data-offset="100">inicio</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if (@$_GET[':']=="servicios-array" || isset($_GET["servicios"])) {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="./?:=servicios-array" data-offset="100">¿Qué hacemos?</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if (@$_GET[':']=="productos-array") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="./?:=productos-array" data-offset="90">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a <?php if (@$_GET[':']=="Portafolio-array") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="./?:=Portafolio-array" data-offset="80">Proyectos</a>
                        </li>




                        <?php 
                 if (!isset($_SESSION['user_log'])) 
                 {

                        if (isset($_GET[":"]) || isset($_GET["servicios"])) 
                        {
                           ?>
                           <li class="nav-item">
                            <a <?php if (@$_GET[':']=="iniciar-sesion") {
                                ?> class="nav-link linea-bottom" <?php 
                            }else {  ?> class="nav-link " <?php } ?> href="./?:=iniciar-sesion" data-offset="80">Iniciar sesión</a>
                        </li>
                           <?php 
                        } 
                        

                }else{
                    ?>
                   <li class="nav-item">
                            <a <?php if (@$_GET[':']=="MiCuenta") 
                            {
                                ?> class="nav-link linea-bottom" <?php 
                            }else 
                            {  ?> class="nav-link " <?php } ?> href="./?:=MiCuenta" data-offset="80"><?php 
                             if (@$_GET[':']!=="MiCuenta" ) 
                              {
                                if ($name_user !=="") 
                                {
                                    echo $name_user; 
                                }else{
                                    echo $user_["email"] ;
                                }
                                  

                              }else{ echo "Mi cuenta"; } ?></a>
                            
                        </li>
                    <?php 
                }
                        ?>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <!--/Navbar-->