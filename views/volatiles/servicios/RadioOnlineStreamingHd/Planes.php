
<?php 
    //////// DISEÑO DE PAGINAS WEB - PLANES ///////////
$PlanBasico = $sair->GetInfoPlan("radio_online_streaming_hd", 1);
foreach ($PlanBasico as $planbasico) {
   $precio_plan_basico = number_format($planbasico["precio"] );
}

$PlanMedium = $sair->GetInfoPlan("radio_online_streaming_hd", 2);
foreach ($PlanMedium as $pm) {
   $precio_plan_medium = number_format($pm["precio"] );
}

$PlanPremium = $sair->GetInfoPlan("radio_online_streaming_hd", 3);
foreach ($PlanPremium as $pp) {
   $precio_plan_Premium = number_format($pp["precio"] );
}
 ?>
<div class="row planes justify-content-between barra-x-hidden" id="planes" >
                <div class="container mb-5">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 margen-superior mt-5 mb-2 wow zoomIn" data-wow-delay="0.4s">
                            <div align="center">
                                <div class="card" >
                                    <?php 
                                        if ( !isset($_SESSION["user_log"])  ) {
                                            ?> <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-básico"><?php 
                                        }else{
                                            if ($user_["dealta"]==1) {
                                                ?> <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-básico"><?php 
                                            }else{ 
                                            ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"> <?php 
                                            }
                                        }
                                     ?>

                                       
                                        <div class="card-header stylish-color white-text">
                                        <span class="h2-responsive mb-0" >PLAN BÁSICO</span>
                                        <hr>
                                        <p>
                                            
                                            <!--span class="h1-responsive mb-0"><?php// echo "$".$precio_plan_basico; ?></span-->
                                            <h6 class="mt-0">Escoje este plan y pagas según tus necesidades.</h6>
                                        </p>
                                    </div>
                                    </a>
                                    
                                    <div class="card-body">
                                        
                                       
                                        <div class="items-plan text-left" >
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Alojamiento web (hosting)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Dominio (Nombre del sitio)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Aplicación para android</h5>
                                            <hr>
                                            
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Google Analitycs - Auto gestión</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Diseño Responsive Desing</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Audio en HD</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Secciones adicionales (Noticias, videos, imagenes)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-times red-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php echo "Precio estandar ".$precio_plan_basico . " COP"; ?></h5>
                                            <hr>
                                            <p class="text-center">
                                                <strong>Costos adicionales</strong> Hosting + dominio (Estabilidad en la web) cada
                                                3 meses</p>

                                            
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                       
                                          <?php 
                                            if (!isset($_SESSION["user_log"])) {
                                                ?>
                                                    <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-básico"><button class="btn boton-c btn-md">Solicitar</button></a> 
                                                 <?php 
                                            }else if ($user_["dealta"]==1) {
                                                ?><a href="./?servicios=radio_online_streaming_hd&solicitud=plan-básico"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
                                            }else{
                                                ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"><button class="btn boton-c btn-md">Solicitar</button></a><?php 
                                            }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 margen-superior mt-5 mb-2 wow zoomIn" data-wow-delay="0.4s">
                            <div align="center">
                                <div class="card">
                                    <?php 
                                        if ( !isset($_SESSION["user_log"])  ) {
                                            ?> <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-medium"><?php 
                                        }else{
                                            if ($user_["dealta"]==1) {
                                                ?> <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-medium"><?php 
                                            }else{ 
                                            ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"> <?php 
                                            }
                                        }
                                     ?>

                                   

                                        <div class="card-header primary-color white-text">
                                          <span class="h2-responsive mb-0">PLAN MEDIUM</span>
                                        <hr>
                                        <p>
                                          
                                            
                                            <!--span class="h1-responsive mb-0"><?php // echo "$".$precio_plan_medium; ?></span-->
                                            <h6 class="mt-0">Escoje este plan y pagas según tus necesidades. </h6>
                                        </p>
                                    </div>
                                    </a>
                                    
                                    <div class="card-body">
                                        
                                        <div class="items-plan text-left">
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Alojamiento web (hosting)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Dominio (Nombre del sitio)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-times red-text"></i> Aplicación para android</h5>
                                            <hr>
                                            
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Google Analitycs - Auto gestión</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Diseño Responsive Desing</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Audio en HD</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Secciones adicionales (Noticias, videos, imagenes)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-times red-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php echo "Precio estandar ".$precio_plan_medium . " COP"; ?></h5>
                                            <hr>
                                            <p class="text-center">
                                                <strong>Costos adicionales</strong> Hosting + dominio (Estabilidad en la web) cada
                                                6 meses</p>
                                        </div>

                                    </div>
                                     <div class="card-footer text-center">
                                                
                                        <?php 
                                            if (!isset($_SESSION["user_log"])) {
                                                ?>
                                                    <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-medium"><button class="btn boton-c btn-md">Solicitar</button></a> 
                                                 <?php 
                                            }else if ($user_["dealta"]==1) {
                                                ?><a href="./?servicios=radio_online_streaming_hd&solicitud=plan-medium"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
                                            }else{
                                                ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"><button class="btn boton-c btn-md">Solicitar</button></a><?php 
                                            }
                                        ?>
                                           
                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 margen-superior mt-5 mb-2 wow zoomIn" data-wow-delay="0.4s">
                            <div align="center">
                                <div class="card">
                                   <?php 
                                        if ( !isset($_SESSION["user_log"])  ) {
                                            ?> <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-premium"><?php 
                                        }else{
                                            if ($user_["dealta"]==1) {
                                                ?> <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-premium"><?php 
                                            }else{ 
                                            ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"> <?php 
                                            }
                                        }
                                     ?>

                                    
                                        <div class="card-header stylish-color white-text">
                                         <span class="h2-responsive mb-0">PLAN PREMIUM</span>
                                        <hr>
                                        <p>
                                           
                                            <!--span class="h1-responsive mb-0"><?php// echo "$".$precio_plan_Premium; ?></span-->
                                            <h6 class="mt-0">Escoje este plan y pagas según tus necesidades.</h6>
                                        </p>
                                    </div>
                                    </a>
                                    <div class="card-body">
                                        
                                        
                                        <div class="items-plan text-left">
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Alojamiento web (hosting)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Dominio (Nombre del sitio)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Aplicación para android</h5>
                                            <hr>
                                            
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Google Analitycs - Auto gestión</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Diseño Responsive Desing</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Audio en HD</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Secciones adicionales (Noticias, videos, imagenes)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php 
                                                echo "Precio estandar ". $precio_plan_Premium . " COP"; ?></h5>
                                            <hr>
                                            <p class="text-center">
                                                <strong>Costos adicionales</strong> Hosting + dominio (Estabilidad en la web) cada
                                                12 meses</p>
                                        </div>

                                    </div>
                                    <div class="card-footer text-center" >
                                       
                                       <?php 
                                            if (!isset($_SESSION["user_log"])) {
                                                ?>
                                                    <a href="./?servicios=radio_online_streaming_hd&solicitud=plan-premium"><button class="btn boton-c btn-md">Solicitar</button></a> 
                                                 <?php 
                                            }else if ($user_["dealta"]==1) {
                                                ?><a href="./?servicios=radio_online_streaming_hd&solicitud=plan-premium"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
                                            }else{
                                                ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"><button class="btn boton-c btn-md">Solicitar</button></a><?php 
                                            }
                                        ?>

                                       
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>