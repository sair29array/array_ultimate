<style>
div.ex1 {
   

    max-width: 100%;
    max-height: 100%;
    overflow: scroll;
}


</style>


<?php
    $in_user = $user->GetDatosUser($_SESSION["login_user"]);
    foreach ($in_user as $info_user) {}
  ?>
<!-- Sidebar -->
        <div class=" ex1 sidebar-fixed position-fixed ">

           <div class="list-group list-group-flush p-3">
                <a href="#" class="list-group-item  waves-effect">
                    <center>
                        <h1 class="content-center" ><?php echo $info_user["progreso"]. "%"; ?></h1>  
                        <p>Completado</p>
                    </center>    
                    
                </a>
            </div>

            <div class="list-group list-group-flush p-3">

            	<?php if (@$_GET["Watch"]=="Bienvenida") {
                   ?> <a href="../in/Bienvenida" class="list-group-item active waves-effect">
                    <i class="fa fa-play mr-3"></i>Bienvenida
                </a> <?php 
                }else{
                    ?> <a href="../in/Bienvenida" class="list-group-item  waves-effect">
                    <i class="fa fa-film mr-3"></i>Bienvenida
                </a><?php 
                } ?>
                <br>
            	<center><h5>1. Lógica de la programación</h5></center>
            	<br>




            	<?php if (@$_GET["Watch"]=="1iall") {
                   ?> <a href="../in/1iall" class="list-group-item active waves-effect">
                     <p > <i class="fa fa-play mr-3"></i>Introducción a la lógica</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/1iall" class="list-group-item  waves-effect">
                   <p > <i class="fa fa-film "></i><br>Introducción a la lógica</p>
                </a><?php 
                } ?>






                <?php if (@$_GET["Watch"]=="que-es-pseint") {
                   ?> <a href="../in/que-es-pseint" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>¿Qué es Pseint?</p> 
                </a> <?php 
                }else{
                    ?> <a href="que-es-pseint" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>¿Qué es Pseint?</p>
                </a><?php 
                } ?>





                <?php if (@$_GET["Watch"]=="variables-y-tipos-de-datos") {
                   ?> <a href="../in/variables-y-tipos-de-datos" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Variables y tipos de datos</p> 
                </a> <?php 
                }else{
                    ?> <a href="variables-y-tipos-de-datos" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Variables y tipos de datos</p>
                </a><?php 
                } ?>



                 <?php if (@$_GET["Watch"]=="acciones-secuenciales") {
                   ?> <a href="../in/acciones-secuenciales" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Acciones secuenciales</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/acciones-secuenciales" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Acciones secuenciales</p>
                </a><?php 
                } ?>



                 <?php if (@$_GET["Watch"]=="actividad-1") {
                   ?> <a href="../in/actividad-1" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Actividad 1</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/actividad-1" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Actividad 1</p>
                </a><?php 
                } ?>


                 <?php if (@$_GET["Watch"]=="definición-y-asignación") {
                   ?> <a href="../in/definición-y-asignación" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Definición y asignación</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/definición-y-asignación" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Definición y asignación</p>
                </a><?php 
                } ?>


                 <?php if (@$_GET["Watch"]=="lectura-y-escritura") {
                   ?> <a href="../in/lectura-y-escritura" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Lectura y escritura</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/lectura-y-escritura" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Lectura y escritura</p>
                </a><?php 
                } ?>

                 <?php if (@$_GET["Watch"]=="expresiones") {
                   ?> <a href="../in/expresiones" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Expresiones</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/expresiones" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Expresiones</p>
                </a><?php 
                } ?>


                <?php if (@$_GET["Watch"]=="tipos-de-operadores") {
                   ?> <a href="../in/tipos-de-operadores" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Tipos de operadores</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/tipos-de-operadores" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Tipos de operadores</p>
                </a><?php 
                } ?>
                

                  <?php if (@$_GET["Watch"]=="expresiones-anidadas") {
                   ?> <a href="../in/expresiones-anidadas" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Expresiones anidadas</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/expresiones-anidadas" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Expresiones anidadas</p>
                </a><?php 
                } ?>

                 <?php if (@$_GET["Watch"]=="actividad-2") {
                   ?> <a href="../in/actividad-2" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Actividad 2</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/actividad-2" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Actividad 2</p>
                </a><?php 
                } ?>


                  <?php if (@$_GET["Watch"]=="proposiciones-lógicas") {
                   ?> <a href="../in/proposiciones-lógicas" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Proposiciones lógicas</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/proposiciones-lógicas" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Proposiciones lógicas</p>
                </a><?php 
                } ?>


                <?php if (@$_GET["Watch"]=="estructuras-básicas-de-control") {
                   ?> <a href="../in/estructuras-básicas-de-control" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Estructuras básicas de control</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/estructuras-básicas-de-control" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Estructuras básicas de control</p>
                </a><?php 
                } ?>


                 <?php if (@$_GET["Watch"]=="Condicionales") {
                   ?> <a href="../in/Condicionales" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Condicionales</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Condicionales" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Condicionales</p>
                </a><?php 
                } ?>
                


                 <?php if (@$_GET["Watch"]=="bucle-mientras-y-repetir") {
                   ?> <a href="../in/bucle-mientras-y-repetir" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Bucle mientras y repetir</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/bucle-mientras-y-repetir" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Bucle mientras y repetir</p>
                </a><?php 
                } ?>


                 <?php if (@$_GET["Watch"]=="bucle-for") {
                   ?> <a href="../in/bucle-for" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Bucle for</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/bucle-for" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Bucle for</p>
                </a><?php 
                } ?>

                <?php if (@$_GET["Watch"]=="Actividad-3") {
                   ?> <a href="../in/Actividad-3" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Actividad 3</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Actividad-3" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Actividad 3</p>
                </a><?php 
                } ?>
                

                <?php if (@$_GET["Watch"]=="subprocesos-o-subprogramas") {
                   ?> <a href="../in/subprocesos-o-subprogramas" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Subprocesos o subprogramas</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/subprocesos-o-subprogramas" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Subprocesos o subprogramas</p>
                </a><?php 
                } ?>

                <?php if (@$_GET["Watch"]=="funciones") {
                   ?> <a href="../in/funciones" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Funciones</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/funciones" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Funciones</p>
                </a><?php 
                } ?>
                

                <?php if (@$_GET["Watch"]=="bucle-y-cadenas") {
                   ?> <a href="../in/Arreglos-y-cadenas" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Arreglos y cadenas</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Arreglos-y-cadenas" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Arreglos y cadenas</p>
                </a><?php 
                } ?>

                <?php if (@$_GET["Watch"]=="Arreglos-unidimensionales") {
                   ?> <a href="../in/Arreglos-unidimensionales" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Arreglos unidimensionales</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Arreglos-unidimensionales" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Arreglos unidimensionales</p>
                </a><?php 
                } ?>
                

                <?php if (@$_GET["Watch"]=="Arreglos-multidimensionales") {
                   ?> <a href="../in/Arreglos-multidimensionales" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Arreglos multidimensionales</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Arreglos-multidimensionales" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Arreglos multidimensionales</p>
                </a><?php 
                } ?>

                <?php if (@$_GET["Watch"]=="Búsqueda-secuencial-de-arreglos") {
                   ?> <a href="../in/Búsqueda-secuencial-de-arreglos" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Búsqueda secuencial de arreglos</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Búsqueda-secuencial-de-arreglos" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Búsqueda secuencial de arreglos</p>
                </a><?php 
                } ?>

                <?php if (@$_GET["Watch"]=="Algoritmos-de-ordenación") {
                   ?> <a href="../in/Algoritmos-de-ordenación" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Algoritmos de ordenación</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Algoritmos-de-ordenación" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Algoritmos de ordenación</p>
                </a><?php 
                } ?>

                <?php if (@$_GET["Watch"]=="Ordenación-por-selección-y-por-inserción") {
                   ?> <a href="../in/Ordenación-por-selección-y-por-inserción" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Selección e inserción</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Ordenación-por-selección-y-por-inserción" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Selección e inserción</p>
                </a><?php 
                } ?>

                <?php if (@$_GET["Watch"]=="Ordenación-por-burbuja") {
                   ?> <a href="../in/Ordenación-por-burbuja" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Ordenación por burbuja</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Ordenación-por-burbuja" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Ordenación por burbuja</p>
                </a><?php 
                } ?>

                 <?php if (@$_GET["Watch"]=="Ordenación-por-burbuja-bidireccional") {
                   ?> <a href="../in/Ordenación-por-burbuja-bidireccional" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Ordenación por burbuja bidimensional</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Ordenación-por-burbuja-bidireccional" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Ordenación por burbuja bidimensional</p>
                </a><?php 
                } ?>

                  <?php if (@$_GET["Watch"]=="Proyecto-final") {
                   ?> <a href="../in/Proyecto-final" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Proyecto final</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Proyecto-final" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Proyecto final</p>
                </a><?php 
                } ?>

                  <?php if (@$_GET["Watch"]=="Programación-de-juego-piedra-papel-o-tijeras") {
                   ?> <a href="../in/Programación-de-juego-piedra-papel-o-tijeras" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>Programación de juego piedra, papel o tijeras</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/Programación-de-juego-piedra-papel-o-tijeras" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>Programación de juego piedra, papel o tijeras</p>
                </a><?php 
                } ?>
               



                  <?php if (@$_GET["Watch"]=="fin-unidad-1") {
                   ?> <a href="../in/fin-unidad-1" class="list-group-item active waves-effect">
                     <p> <i class="fa fa-play mr-3"></i>¿Y ahora qué?</p> 
                </a> <?php 
                }else{
                    ?> <a href="../in/fin-unidad-1" class="list-group-item  waves-effect">
                   <p> <i class="fa fa-film mr-3"></i>¿Y ahora qué?</p>
                </a><?php 
                } ?>


                <?php 
                    include("menu_de_temas_unidad2.php");
                    include("menu_de_temas_unidad3.php");
                    include("menu_de_temas_unidad4.php");
                 ?>

               
            </div>

        </div>
        <!-- Sidebar -->


        