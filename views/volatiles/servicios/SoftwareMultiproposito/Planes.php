
<?php 
    //////// DISEÑO DE PAGINAS WEB - PLANES ///////////
$PlanBasico = $sair->GetInfoPlan("software_multiproposito", 1);
foreach ($PlanBasico as $planbasico) {
   $precio_plan_basico = number_format($planbasico["precio"] );
}

$PlanMedium = $sair->GetInfoPlan("software_multiproposito", 2);
foreach ($PlanMedium as $pm) {
   $precio_plan_medium = number_format($pm["precio"] );
}

$PlanPremium = $sair->GetInfoPlan("software_multiproposito", 3);
foreach ($PlanPremium as $pp) {
   $precio_plan_Premium = number_format($pp["precio"] );
}
 ?>
<div class="row planes justify-content-between " id="planes" >
                <div class="container mb-3">
                    <div class="row justify-content-center">
                        <div class="col-12 col-sm-6 col-md-4 mt-5 mb-2 wow zoomIn" data-wow-delay="0.4s">
                            <div align="center">
                                <div class="card" >
                                    
                                     <?php 
                                        if ( !isset($_SESSION["user_log"])  ) {
                                            ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-escritorio"><?php 
                                        }else{
                                            if ($user_["dealta"]==1) {
                                                ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-escritorio"><?php 
                                            }else{ 
                                            ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"> <?php 
                                            }
                                        }
                                     ?>
                                    
                                        
                                        <div class="card-header stylish-color white-text">
                                        <span class="h2-responsive mb-0 " >Aplicaciones para escritorio </span>
                                        <hr>
                                        <p>
                                            <h6 class="mt-0">Haga sus tareas administrativas desde la comodidad de su oficina, usando un software instalable.</h6>
                                        </p>
                                    </div>
                                    </a>
                                    
                                    <div class="card-body">
                                        
                                       
                                        <div class="items-plan text-left" >
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Arquitectura para Windows S.O.</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Bases de datos</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Uso de herramientas actualizadas (JAVA, C++ , C, SQLite, ADO.NET)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php echo "Precio estandar ".$precio_plan_basico . " COP"; ?></h5>
                                            <hr>
                                            

                                            <div class="card-footer text-center">
                                                

                                                 <?php 
                                                    if (!isset($_SESSION["user_log"])) {
                                                         ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-escritorio"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
                                                    }else if ($user_["dealta"]==1) {
                                                        ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-escritorio"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
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
                        <div class="col-12 col-sm-6 col-md-4 mt-5 mb-5 wow zoomIn" data-wow-delay="0.4s">
                            <div align="center">
                                <div class="card">
                                    
                                    <?php 
                                        if ( !isset($_SESSION["user_log"])  ) {
                                            ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-web"><?php 
                                        }else{
                                            if ($user_["dealta"]==1) {
                                                ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-web"><?php 
                                            }else{ 
                                            ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"> <?php 
                                            }
                                        }
                                     ?>
                                       
                                        <div class="card-header primary-color white-text">
                                        <span class="h2-responsive mb-0">Aplicaciones para la web</span>
                                        <hr>
                                        <p>
                                            
                                            <h6 class="mt-0">Haga sus tareas administrativas desde cualquier lugar, usando una herramienta que se encuentra en linea. </h6>
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
                                                <i class="fa fa-check blue-text"></i> Bases de datos.</h5>
                                            <hr>
                                            
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Uso de herramientas actualizadas (HTML,CSS, JS, VUE JS, FIREBASE, MYSQL, PHP, etc. )</h5>
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
                                                         ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-web"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
                                                    }else if ($user_["dealta"]==1) {
                                                        ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-web"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
                                                    }else{
                                                        ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"><button class="btn boton-c btn-md">Solicitar</button></a><?php 
                                                    }
                                                 ?>

                                     </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6 col-md-4 mt-5 mb-5 wow zoomIn" data-wow-delay="0.4s">
                            <div align="center">
                                <div class="card">
                                     <?php 
                                        if ( !isset($_SESSION["user_log"])  ) {
                                            ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-moviles"><?php 
                                        }else{
                                            if ($user_["dealta"]==1) {
                                                ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-moviles"><?php 
                                            }else{ 
                                            ?> <a href="./?:=serviceResp8/8800/22/s-act_n8ll"> <?php 
                                            }
                                        }
                                     ?>
                                      
                                        <div class="card-header stylish-color white-text">
                                        <span class="h2-responsive mb-0">Aplicaciones para Android</span>
                                        <hr>
                                        <p>
                                            <h6 class="mt-0">Haz que tus clientes realicen tareas mucho más rapido y sencillo desde sus dispositivos moviles.</h6>
                                        </p>
                                    </div>
                                    </a>
                                    <div class="card-body">
                                        
                                        
                                        <div class="items-plan text-left">
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Play Console (PlayStore)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Bases de datos</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fa fa-check blue-text"></i> Asesoria</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Financiamiento (Pago por cuotas)</h5>
                                            <hr>
                                            <h5 class="p-0">
                                                <i class="fas fa-check blue-text"></i> Uso de herramientas actualizadas (JAVA, C++ , C, SQLite, Android Estudio)</h5>
                                            <hr>
                                           
                                            <h5 class="p-0">
                                                <i class="fa fa-dollar-sign blue-text"></i> <?php 
                                                echo "Precio estandar ". $precio_plan_Premium . " COP"; ?></h5>
                                            <hr>
                                            
                                        </div>

                                    </div>
                                    <div class="card-footer text-center" >
                                                <?php 
                                                    if (!isset($_SESSION["user_log"])) {
                                                         ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-moviles"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
                                                    }else if ($user_["dealta"]==1) {
                                                        ?> <a href="./?servicios=Sofware-Multipropósito&solicitud=plan-moviles"><button class="btn boton-c btn-md">Solicitar</button></a> <?php 
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