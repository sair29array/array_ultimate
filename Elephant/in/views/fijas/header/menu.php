<?php
    $in_user = $user->GetDatosUser($_SESSION["login_user"]);
    foreach ($in_user as $info_user) {}
  ?>
<!-- Sidebar -->
        <div class="sidebar-fixed position-fixed">

           <div class="list-group list-group-flush p-3">
                <a href="#" class="list-group-item  waves-effect">
                    <center>
                        <h1 class="content-center" ><?php echo $info_user["progreso"]. "%"; ?></h1>  
                        <p>Completado</p>
                    </center>    
                    
                </a>
            </div>

            <div class="list-group list-group-flush p-3">

                <?php if (@$_GET["Et_id"]=="Temario" || !isset($_GET["Et_id"])) {
                   ?> <a href="../in/Temario" class="list-group-item active waves-effect">
                    <i class="fa fa-list mr-3"></i>Temario
                </a> <?php 
                }else{
                    ?> <a href="../in/Temario" class="list-group-item  waves-effect">
                    <i class="fa fa-list mr-3"></i>Temario
                </a><?php 
                } ?>
                
                <?php 
                    if (@$_GET["Et_id"]=="Perfil") {
                        ?>
                        <a href="../in/Perfil" class="list-group-item active list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Tu perfil</a>
                        <?php 
                    }else{
                        ?> <a href="../in/Perfil" class="list-group-item list-group-item-action waves-effect">
                    <i class="fa fa-user mr-3"></i>Tu perfil</a> <?php 
                    }
                 ?>
               
            </div>

        </div>
        <!-- Sidebar -->