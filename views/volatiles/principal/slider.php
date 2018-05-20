<?php  ?>
<!-- Intro Section -->
        <div class="view" <?php if (!isset($_SESSION["user_log"])) {
            ?> style="background: url('img/banners/banner-4.jpeg') no-repeat center fixed; background-size:cover;" <?php 
        }else{
            if ($user_["dealta"] == 0) {
                ?> style="background: url('img/banners/banner-2.jpeg') no-repeat center fixed; background-size:cover;" <?php 
            }else{
                ?> style="background: url('img/banners/banner-1.png') no-repeat center fixed; background-size:cover;" <?php
            }
        } ?>>
            <div class="mask rgba-black-light barra-x-hidden barra-y-hidden">
            <div class="full-bg-img">
                <div class="container flex-center">
                    <div class="col-md-12 white-text text-center welcome">
                        <div class="wow wow fadeInDown" data-wow-delay="0.2s">
                            <h1 class="h1-responsive title-view-mobile d-block d-sm-block d-md-none ">
                                <?php if (@!$_SESSION["user_log"]) {
                                    ?> <strong>Bienvenid@</strong> <?php 
                                }else{
                                    if ($user_["dealta"] == 0) {
                                       ?> <strong>BIienvenid</strong><hr class="white"><p class="h4">Activa tu cuenta desde tu correo.</p> <?php 
                                    }else{
                                        ?> <strong>Hola, Bienvenido</strong> <?php
                                    }
                                } ?>
                                
                            </h1>
                            <h1 class="h1-responsive title-view-desktop d-none d-md-block mt-5">
                                 <?php if (@!$_SESSION["user_log"]) {
                                    ?> <strong>Bienvenid@</strong> <?php 
                                }else{
                                    if ($user_["dealta"] == 0) {
                                       ?> <strong>Ahora eres parte de array</strong> <?php 
                                    }else{
                                        ?> <strong>Hola, Bienvenid@</strong> <?php
                                    }
                                } ?>
                            </h1>
                            <?php if (!isset($_SESSION['user_log'])) {
                                ?>
                                <div class="d-block d-sm-block d-md-none">
                                <a href="./?:=iniciar-sesion"   role="button" class="btn boton-c btn-md">Iniciar sesión
                                    <i class="fas fa-angle-right"></i>
                                </a>
                                <a href="./?:=crear-cuenta"   role="button" class="btn boton-c btn-md">Crear cuenta
                                    <i class="fas fa-angle-right"></i>
                                </a>
                            </div>
                                <?php 
                            } ?>
                            
                            <div class="d-none d-md-block">
                                <?php if (!isset($_SESSION['user_log'])) {
                                ?>
                                <div class="mt-auto mb-0 slider">
                                    <h3 class="t-s">En
                                        <strong>Array</strong> somos expertos en TIC</h3>
                                    <h3>Tecnologías de la Información y las Comunicaciones</h3>
                                   
                                </div>
                                <?php 
                                }else{
                                    if ($user_["dealta"] == 1 ) {
                                    ?>
                                    <div class="mt-auto mb-0 slider">
                                    <h3 class="t-s">Es estupendo
                                        <strong>que </strong> estes con nosotros.</h3>
                                    <h3>Te ayudamos a ir más allá</h3>
                                    
                                    <h3>Te ayudamos a crecer como empresa.</h3>
                                </div>
                                    <?php 
                                    }else{
                                            ?>
                                            <div class="mt-auto mb-0 slider">
                                    <h3 class="t-s">Visita tu 
                                        <strong>Correo </strong> electónico</h3>
                                    <h3><?php echo $user_["email"] ; ?></h3>
                                    
                                    <h3>Te hemos enviado un email para activar tu cuenta</h3>
                                </div>
                                            <?php 
                                    }
                                } 

                                ?>

                                <?php if (!isset($_SESSION['user_log'])) {
                                ?>
                                <div class="mt-0">
                                    <a href="./?:=iniciar-sesion"  role="button" class="btn boton-c btn-lg">Iniciar sesión
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                    <a href="./?:=crear-cuenta"  role="button" class="btn boton-c btn-lg">Crear cuenta
                                        <i class="fas fa-angle-right"></i>
                                    </a>
                                </div>
                                   <?php 
                                  } ?>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>