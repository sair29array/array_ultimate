<?php 
    if (isset($_GET["Watch"])) 
    {
     
         // ANALIcemos EN QUE PAGINA ESTÁ y mostremos ela leccion siguiente y la anterior
           $prev = $driver_leccion_view -> Get_Prev($_GET["Watch"]);
           $next = $driver_leccion_view -> Get_Next($_GET["Watch"]);

    }
 ?>

 <!-- Navbar -->

<style>
ul.ex1 {
   

    max-width: auto !important;
    max-height: 500px !important;
    overflow: scroll;
}


</style>
        <nav class="navbar fixed-top navbar navbar-dark navbar-expand-lg  primary-color-dark">
            <div class="container-fluid">

                <!-- Brand -->
                <a class="navbar-brand waves-effect" href="./" >
                    <strong class="white-text">Elephant <img class="img img-responsive" src="../img/elephant.png"></i></strong>
                </a>

               <?php 
                if (isset($_GET["Watch"])) {
                    ?>
                         <!-- Collapse Unidades y temas en vista movil -->
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ListaTemas" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa fa-list"></i>
                    </button>
                    <?php 
                }
                ?>





                <!-- prev - next videos -->
                 <?php 
                    if (isset($_GET["Watch"])) 
                    {
                        ?>
                        <a href="../in/<?php echo $prev; ?>" class="navbar-toggler"  >
                            <i class="fa fa-arrow-left"></i>
                        </a>

                         <a href="../in/<?php echo $next; ?>" class="navbar-toggler"  >
                            <i class="fa fa-arrow-right"></i>
                        </a>
                        <?php 
                    }
                  ?>






                <!-- Collapse menu destock -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#homeOtions" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-ellipsis-v"></i>
                </button>

            


                <!-- Links -->
                <div class="collapse navbar-collapse  " id="navbarSupportedContent">
                    <?php 
                        if (isset($_GET["Watch"])) 
                        {
                            ?>
                            <a href="../in/<?php echo $prev; ?>" class="btn btn-primary btn-lg btn-block"><i class="fa fa-arrow-left"></i>  Lección anterior</a>
                            <ul></ul>
                            <a  href="../in/<?php echo $next; ?>" class="btn btn-primary btn-lg btn-block">  Lección siguiente <i class="fa fa-arrow-right"></i></a>
                            <?php 
                        }
                     ?>
                </div>













<!-- title-view-mobile d-block d-sm-block d-md-none-->


                 <!-- Links  Mobile-->
                <div  class="  collapse navbar-collapse   " id="ListaTemas">

                    <!-- Left -->
                    <ul  class=" ex1 navbar-nav mr-auto title-view-mobile d-block d-sm-block d-md-none">
                        <li class="nav-item <?php if($_GET["Watch"]=='Bienvenida'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Bienvenida"> <i class="fa fa-film"></i> Bienvenida
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item title-view-mobile d-block d-sm-block d-md-none p-3">
                            <a  class=" dissabled nav-link border border-light rounded waves-effect">
                                1. Lógica de la programación
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='1iall'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/1iall"> <i class="fa fa-film"></i> Introducción a la lógica
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='que-es-pseint'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/que-es-pseint"> <i class="fa fa-film"></i> ¿Qué es pseint?
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='variables-y-tipos-de-datos'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/variables-y-tipos-de-datos"> <i class="fa fa-film"></i> Variables y tipos de datos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='acciones-secuenciales'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/variables-y-tipos-de-datos"> <i class="fa fa-film"></i> Acciones secuenciales
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='actividad-1'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/actividad-1"> <i class="fa fa-film"></i> Actividad 1
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='definición-y-asignación'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/definición-y-asignación"> <i class="fa fa-film"></i> Definición y asignación
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='lectura-y-escritura'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/lectura-y-escritura"> <i class="fa fa-film"></i> Lectura y escritura
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='expresiones'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/expresiones"> <i class="fa fa-film"></i> Expresiones
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='tipos-de-operadores'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/tipos-de-operadores"> <i class="fa fa-film"></i> Tipos de operadores
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='expresiones-anidadas'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/expresiones-anidadas"> <i class="fa fa-film"></i> Expresiones anidadas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                        <li class="nav-item <?php if($_GET["Watch"]=='actividad-2'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/actividad-2"> <i class="fa fa-film"></i> Actividad 2
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='proposiciones-lógicas'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/proposiciones-lógicas"> <i class="fa fa-film"></i> Proposiciones lógicas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='estructuras-básicas-de-control'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/estructuras-básicas-de-control"> <i class="fa fa-film"></i> Estructuras básicas de control
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Condicionales'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Condicionales"> <i class="fa fa-film"></i> Condicionales
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='bucle-mientras-y-repetir'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/bucle-mientras-y-repetir"> <i class="fa fa-film"></i> Bucle mientras y repetir
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='bucle-for'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/bucle-for"> <i class="fa fa-film"></i> Bucle for
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Actividad-3'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Actividad-3"> <i class="fa fa-film"></i> Actividad 3
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='subprocesos-o-subrogramas'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/subprocesos-o-subrogramas"> <i class="fa fa-film"></i> Subprocesos o subprogramas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='funciones'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/funciones"> <i class="fa fa-film"></i> Funciones
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Arreglos-y-cadenas'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Arreglos-y-cadenas"> <i class="fa fa-film"></i> Arreglos y cadenas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Arreglos-unidimensionales'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Arreglos-unidimensionales"> <i class="fa fa-film"></i> Arreglos unidimensionales
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Arreglos-multidimensionales'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Arreglos-multidimensionales"> <i class="fa fa-film"></i> Arreglos multiunidimensionales
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Búsqueda-secuencial-de-arreglos'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Búsqueda-secuencial-de-arreglos"> <i class="fa fa-film"></i> Búsqueda secuencial de arreglos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Algoritmos-de-ordenación'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Algoritmos-de-ordenación"> <i class="fa fa-film"></i> Algoritmos de ordenación
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Ordenación-por-selección-y-por-inserción'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Ordenación-por-selección-y-por-inserción"> <i class="fa fa-film"></i> Selección e inserción
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Ordenación-por-burbuja'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Ordenación-por-burbuja"> <i class="fa fa-film"></i> Ordenación por burbuja
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                           <li class="nav-item <?php if($_GET["Watch"]=='Ordenación-por-burbuja-bidimensional'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Ordenación-por-burbuja-bidireccional"> <i class="fa fa-film"></i> Ordenación por burbuja bidirecional
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                           <li class="nav-item <?php if($_GET["Watch"]=='Proyecto-final'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Proyecto-final"> <i class="fa fa-film"></i> Proyecto final
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                           <li class="nav-item <?php if($_GET["Watch"]=='Programación-de-juego-piedra-papel-o-tijeras'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Programación-de-juego-piedra-papel-o-tijeras"> <i class="fa fa-film"></i> Programación de juego
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='fin-unidad-1'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/fin-unidad-1"> <i class="fa fa-film"></i> ¿Y ahora qué?
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>














                         <li class="nav-item <?php if($_GET["Watch"]=='Que-es-php'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Que-es-php"> <i class="fa fa-film"></i> ¿Qué es php?
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Configuración-del-entorno-php'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Configuración-del-entorno-php"> <i class="fa fa-film"></i> Configurando el entorno PHP
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Hola-mundo'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Hola-mundo"> <i class="fa fa-film"></i> Hola mundo en PHP
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Variables-y-tipos-de-variables'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Variables-y-tipos-de-variables"> <i class="fa fa-film"></i> Variables y tipos de variables
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Constantes'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Constantes"> <i class="fa fa-film"></i> Constantes
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>



                         <li class="nav-item <?php if($_GET["Watch"]=='Conversión-de-tipos'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Conversión-de-tipos"> <i class="fa fa-film"></i> Conversión de tipos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Concatenación-e-interpolación'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Concatenación-e-interpolación"> <i class="fa fa-film"></i> Concatenación e interpolación
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Operadores-de-comparación'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Operadores-de-comparación"> <i class="fa fa-film"></i> Operadores de comparación
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Operadores-aritmeticos'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Operadores-aritmeticos"> <i class="fa fa-film"></i> Operadores aritméticos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Operadores-de-asiganación'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Operadores-de-asiganación"> <i class="fa fa-film"></i> Operadores de asignación
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Operadores-lógicos-php'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Operadores-lógicos-php"> <i class="fa fa-film"></i> Operadores lógicos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Condicionales-php'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Condicionales-php"> <i class="fa fa-film"></i> Condicionales
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Sentencia-switch'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Sentencia-switch"> <i class="fa fa-film"></i> Sentencia switch
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Bucle-while-y-do-while'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Bucle-while-y-do-while"> <i class="fa fa-film"></i> Bucle while y do while
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Bucle-for-php'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Bucle-for-php"> <i class="fa fa-film"></i> Bucle for
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Foreach'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Foreach"> <i class="fa fa-film"></i> Foreach
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Array-indexado-y-asociativo'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Array-indexado-y-asociativo"> <i class="fa fa-film"></i> Array indexado y asociativo
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Array-Multidimensional'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Array-Multidimensional"> <i class="fa fa-film"></i> Array multidimensional
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Funciones-php'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Funciones-php"> <i class="fa fa-film"></i> Funciones php
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Argumentos-de-funciones'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Argumentos-de-funciones"> <i class="fa fa-film"></i>Argumentos de funciones
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Return'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Return"> <i class="fa fa-film"></i>Return
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Funciones-variables-y-anonimas'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Funciones-variables-y-anonimas"> <i class="fa fa-film"></i>Funciones variables y anonimas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Declaraciones-de-tipo-escalar'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Declaraciones-de-tipo-escalar"> <i class="fa fa-film"></i>Declaraciones de tipo escalar
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>









                        <li class="nav-item <?php if($_GET["Watch"]=='Introducción-a-la-POO'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Introducción-a-la-POO"> <i class="fa fa-film"></i>Introducción a la POO
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Clases-y-objetos'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Clases-y-objetos"> <i class="fa fa-film"></i>Clases y objetos
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Instancias'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Instancias"> <i class="fa fa-film"></i>Instancias
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Herencia'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Herencia"> <i class="fa fa-film"></i>Herencia
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                         <li class="nav-item <?php if($_GET["Watch"]=='Cookie-y-Session'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Cookie-y-Session"> <i class="fa fa-film"></i>Cookie y Session
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Session'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Session"> <i class="fa fa-film"></i>Session
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Cookie'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Cookie"> <i class="fa fa-film"></i>Cookie
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Namespace'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Namespace"> <i class="fa fa-film"></i>Namespace
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Clases-anonimas'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Clases-anonimas"> <i class="fa fa-film"></i>Clases anonimas
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='CSPRNG-y-función-intdiv'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/CSPRNG-y-función-intdiv"> <i class="fa fa-film"></i>CSPRNG y función intdiv
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>

                        <li class="nav-item <?php if($_GET["Watch"]=='Serialize-y-unserialize'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Serialize-y-unserialize"> <i class="fa fa-film"></i>Serialize y unserialize
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>








                        <li class="nav-item <?php if($_GET["Watch"]=='Diferencia-entre-las-apps-web-y-las-páginas-web'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Diferencia-entre-las-apps-web-y-las-páginas-web"> <i class="fa fa-film"></i>Apps web VS  páginas web
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='MVC-y-comienzo-de-proyecto'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/MVC-y-comienzo-de-proyecto"> <i class="fa fa-film"></i>MVC-y-comienzo-de-proyecto
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Creando-un-login'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Creando-un-login"> <i class="fa fa-film"></i>Creando-un-login
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Registro-de-usuarios'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Registro-de-usuarios"> <i class="fa fa-film"></i>Registro de usuarios
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Recuperando-credenciales'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Recuperando-credenciales"> <i class="fa fa-film"></i>Recuperando credenciales
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='Categorías-de-foros'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Categorías-de-foros"> <i class="fa fa-film"></i>Categorías de foros
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        <li class="nav-item <?php if($_GET["Watch"]=='Creación-de-foros'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/Creación-de-foros"> <i class="fa fa-film"></i>Creación-de-foros
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                         <li class="nav-item <?php if($_GET["Watch"]=='URLs-Amigables'){ ?> active  <?php  } ?> title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="../in/URLs-Amigables"> <i class="fa fa-film"></i>URLs-Amigables
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>


                        
                    </ul>

                   

                </div>




            







             <!-- Links  Mobile HomeOptiones-->
                <div class="collapse navbar-collapse  " id="homeOtions">

                    <!-- Left -->
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item  title-view-mobile d-block d-sm-block d-md-none ">
                            <a class="nav-link waves-effect" href="./">Inicio
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        
                        <li class="nav-item title-view-mobile d-block d-sm-block d-md-none">
                            <a class="nav-link waves-effect" href="../in/Perfil" >Mi perfil</a>
                        </li>
                        
                    </ul>

                    <!-- Right -->
                   

                </div>

            









            </div>

        </nav>

        <!-- Navbar -->