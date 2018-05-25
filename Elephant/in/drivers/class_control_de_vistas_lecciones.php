<?php 

  class driver_leccion_prev_next
  {
  	 public $view_prev = "";
  	 public $view_next = "";
  	 public $view_actual = "";


  	 /*public function _prev_Next($a) // ANALIZA EN QUE PAGINA ESTÁ EL USER
  	 {
  	 	$this->view_actual = $a;
  	 }*/

  	 public function Get_Prev($view_actual)
  	 {
  	 	$prev = "";
	  	 	switch ($view_actual) 
	  	 	{
	  	 		case 'Bienvenida':
	  	 			$prev = "";
	  	 			break;
	  	 		case '1iall':
	  	 			$prev = "Bienvenida";
	  	 			break;
	  	 		case 'que-es-pseint':
	  	 			$prev = "1iall";
	  	 			break;
	  	 		case 'variables-y-tipos-de-datos':
	  	 			$prev = "que-es-pseint";
	  	 			break;
	  	 		case 'acciones-secuenciales':
	  	 			$prev = "variables-y-tipos-de-datos";
	  	 			break;
	  	 		case 'actividad-1':
	  	 			$prev = "acciones-secuenciales";
	  	 			break;
	  	 		case 'definición-y-asignación':
	  	 			$prev = "actividad-1";
	  	 			break;
	  	 		case 'lectura-y-escritura':
	  	 			$prev = "definición-y-asignación";
	  	 			break;
	  	 		case 'expresiones':
	  	 			$prev = "lectura-y-escritura";
	  	 			break;
	  	 		case 'tipos-de-operadores':
	  	 			$prev = "expresiones";
	  	 			break;
	  	 		case 'expresiones-anidadas':
	  	 			$prev = "tipos-de-operadores";
	  	 			break;
	  	 		case 'actividad-2':
	  	 			$prev = "expresiones-anidadas";
	  	 			break;
	  	 		case 'proposiciones-lógicas':
	  	 			$prev = "actividad-2";
	  	 			break;
	  	 		case 'estructuras-básicas-de-control':
	  	 			$prev = "proposiciones-lógicas";
	  	 			break;
	  	 		case 'Condicionales':
	  	 			$prev = "estructuras-básicas-de-control";
	  	 			break;
	  	 		case 'bucle-mientras-y-repetir':
	  	 			$prev = "Condicionales";
	  	 			break;
	  	 		case 'bucle-for':
	  	 			$prev = "bucle-mientras-y-repetir";
	  	 			break;
	  	 		case 'Actividad-3':
	  	 			$prev = "bucle-for";
	  	 			break;
	  	 		case 'subprocesos-o-subprogramas':
	  	 			$prev = "Actividad-3";
	  	 			break;
	  	 		case 'funciones':
	  	 			$prev = "subprocesos-o-subrogramas";
	  	 			break;
	  	 		case 'Arreglos-y-cadenas':
	  	 			$prev = "funciones";
	  	 			break;
	  	 		case 'Arreglos-unidimensionales':
	  	 			$prev = "Arreglos-y-cadenas";
	  	 			break;
	  	 		case 'Arreglos-multidimensionales':
	  	 			$prev = "Arreglos-unidimensionales";
	  	 			break;
	  	 		case 'Búsqueda-secuencial-de-arreglos':
	  	 			$prev = "Arreglos-multidimensionales";
	  	 			break;
	  	 		case 'Algoritmos-de-ordenación':
	  	 			$prev = "Búsqueda-secuencial-de-arreglos";
	  	 			break;

	  	 		case 'Ordenación-por-selección-y-por-inserción':
	  	 			$prev = "Algoritmos-de-ordenación";
	  	 			break;

	  	 		case 'Ordenación-por-burbuja':
	  	 			$prev = "Ordenación-por-selección-y-por-inserción";
	  	 			break;
	  	 		case 'Ordenación-por-burbuja-bidireccional':
	  	 			$prev = "Ordenación-por-burbuja";
	  	 			break;
	  	 		case 'Proyecto-final':
	  	 			$prev = "Ordenación-por-burbuja-bidireccional";
	  	 			break;
	  	 		case 'Programación-de-juego-piedra-papel-o-tijeras':
	  	 			$prev = "Proyecto-final";
	  	 			break;
	  	 		case 'fin-unidad-1':
	  	 			$prev = "Programación-de-juego-piedra-papel-o-tijeras";
	  	 			break;
	  	 		case 'Que-es-php':
	  	 			$prev = "fin-unidad-1";
	  	 			break;
	  	 		case 'Configuración-del-entorno-php':
	  	 			$prev = "Que-es-php";
	  	 			break;
	  	 		case 'Hola-mundo':
	  	 			$prev = "Configuración-del-entorno-php";
	  	 			break;
	  	 		case 'Variables-y-tipos-de-variables':
	  	 			$prev = "Hola-mundo";
	  	 			break;
	  	 		case 'Constantes':
	  	 			$prev = "Variables-y-tipos-de-variables";
	  	 			break;
	  	 		case 'Conversión-de-tipos':
	  	 			$prev = "Constantes";
	  	 			break;
	  	 		case 'Concatenación-e-interpolación':
	  	 			$prev = "Conversión-de-tipos";
	  	 			break;
	  	 		case 'Operadores-de-comparación':
	  	 			$prev = "Concatenación-e-interpolación";
	  	 			break;
	  	 		case 'Operadores-aritmeticos':
	  	 			$prev = "Operadores-de-comparación";
	  	 			break;
	  	 		case 'Operadores-de-asiganación':
	  	 			$prev = "Operadores-aritmeticos";
	  	 			break;
	  	 		case 'Operadores-lógicos-php':
	  	 			$prev = "Operadores-de-asiganación";
	  	 			break;
	  	 		case 'Condicionales-php':
	  	 			$prev = "Operadores-lógicos-php";
	  	 			break;
	  	 		case 'Sentencia-switch':
	  	 			$prev = "Condicionales-php";
	  	 			break;
	  	 		case 'Bucle-while-y-do-while':
	  	 			$prev = "Sentencia-switch";
	  	 			break;
	  	 		case 'Bucle-for-php':
	  	 			$prev = "Bucle-while-y-do-while";
	  	 			break;
	  	 		case 'Foreach':
	  	 			$prev = "Bucle-for-php";
	  	 			break;
	  	 		case 'Array-indexado-y-asociativo':
	  	 			$prev = "Foreach";
	  	 			break;
	  	 		case 'Array-Multidimensional':
	  	 			$prev = "Array-indexado-y-asociativo";
	  	 			break;
	  	 		case 'Funciones-php':
	  	 			$prev = "Array-Multidimensional";
	  	 			break;
	  	 		case 'Argumentos-de-funciones':
	  	 			$prev = "Funciones-php";
	  	 			break;
	  	 		case 'Return':
	  	 			$prev = "Argumentos-de-funciones";
	  	 			break;
	  	 		case 'Funciones-variables-y-anonimas':
	  	 			$prev = "Return";
	  	 			break;
	  	 		case 'Declaraciones-de-tipo-escalar':
	  	 			$prev = "Funciones-variables-y-anonimas";
	  	 			break;
	  	 		case 'Introducción-a-la-POO':
	  	 			$prev = "Declaraciones-de-tipo-escalar";
	  	 			break;
	  	 		case 'Clases-y-objetos':
	  	 			$prev = "Introducción-a-la-POO";
	  	 			break;
	  	 		case 'Instancias':
	  	 			$prev = "Clases-y-objetos";
	  	 			break;
	  	 		case 'Herencia':
	  	 			$prev = "Instancias";
	  	 			break;
	  	 		case 'Cookie-y-Session':
	  	 			$prev = "Herencia";
	  	 			break;
	  	 		case 'Session':
	  	 			$prev = "Cookie-y-Session";
	  	 			break;
	  	 		case 'Cookie':
	  	 			$prev = "Session";
	  	 			break;
	  	 		case 'Namespace':
	  	 			$prev = "Cookie";
	  	 			break;
	  	 		case 'Clases-anonimas':
	  	 			$prev = "Namespace";
	  	 			break;
	  	 		case 'CSPRNG-y-función-intdiv':
	  	 			$prev = "Clases-anonimas";
	  	 			break;
	  	 		case 'Serialize-y-unserialize':
	  	 			$prev = "CSPRNG-y-función-intdiv";
	  	 			break;
	  	 		case 'Diferencia-entre-las-apps-web-y-las-páginas-web':
	  	 			$prev = "Serialize-y-unserialize";
	  	 			break;
	  	 		case 'MVC-y-comienzo-de-proyecto':
	  	 			$prev = "Diferencia-entre-las-apps-web-y-las-páginas-web";
	  	 			break;
	  	 		case 'Creando-un-login':
	  	 			$prev = "MVC-y-comienzo-de-proyecto";
	  	 			break;
	  	 		case 'Registro-de-usuarios':
	  	 			$prev = "Creando-un-login";
	  	 			break;
	  	 		case 'Recuperando-credenciales':
	  	 			$prev = "Registro-de-usuarios";
	  	 			break;

	  	 		case 'Categorías-de-foros':
	  	 			$prev = "Recuperando-credenciales";
	  	 			break;
	  	 		case 'Creación-de-foros':
	  	 			$prev = "Categorías-de-foros";
	  	 			break;
	  	 		case 'URLs-Amigables':
	  	 			$prev = "Creación-de-foros";
	  	 			break;


	  	 			
	  	 	}
	  	 return $prev;
  	 }

  	 public function Get_Next($view_actual)
  	 {
  	 	$next = "";
  	 		switch ($view_actual) 
	  	 	{
	  	 		case 'Bienvenida':
	  	 			$next = "1iall";
	  	 			break;
	  	 		case '1iall':
	  	 			$next = "que-es-pseint"; 
	  	 			break;
	  	 		case 'que-es-pseint':
	  	 			$next = "variables-y-tipos-de-datos"; 
	  	 			break;
	  	 		case 'acciones-secuenciales':
	  	 			$next = "actividad-1"; 
	  	 			break;
	  	 		case 'actividad-1':
	  	 			$next = "definición-y-asignación"; 
	  	 			break;
	  	 		case 'definición-y-asignación':
	  	 			$next = "lectura-y-escritura"; 
	  	 			break;
	  	 		case 'lectura-y-escritura':
	  	 			$next = "expresiones"; 
	  	 			break;
	  	 		case 'expresiones':
	  	 			$next = "tipos-de-operadores"; 
	  	 			break;
	  	 		case 'tipos-de-expresiones':
	  	 			$next = "expresiones-anidadas"; 
	  	 			break;
	  	 		case 'expresiones-anidadas':
	  	 			$next = "actividad-2"; 
	  	 			break;
	  	 		case 'actividad-2':
	  	 			$next = "proposiciones-lógicas"; 
	  	 			break;
	  	 		case 'proposiciones-lógicas':
	  	 			$next = "estructuras-básicas-de-control"; 
	  	 			break;
	  	 		case 'estructuras-básicas-de-control':
	  	 			$next = "Condicionales"; 
	  	 			break;
	  	 		case 'Condicionales':
	  	 			$next = "bucle-mientras-y-repetir"; 
	  	 			break;
				case 'bucle-mientras-y-repetir':
	  	 			$next = "bucle-for"; 
	  	 			break;	
				case 'bucle-for':
	  	 			$next = "Actividad-3"; 
	  	 			break;
				case 'Actividad-3':
	  	 			$next = "subprocesos-o-subprogramas"; 
	  	 			break;
	  	 		case 'subprocesos-o-subprogramas':
	  	 			$next = "funciones"; 
	  	 			break;	
	  	 		case 'funciones':
	  	 			$next = "Arreglos-y-cadenas"; 
	  	 			break;  	
	  	 		case 'Arreglos-y-cadenas':
	  	 			$next = "Arreglos-unidimensionales"; 
	  	 			break; 
	  	 		case 'Arreglos-unidimensionales':
	  	 			$next = "Arreglos-multidimensionales"; 
	  	 			break;  
	  	 		case 'Arreglos-multidimensionales':
	  	 			$next = "Búsqueda-secuencial-de-arreglos"; 
	  	 			break;
	  	 		case 'Búsqueda-secuencial-de-arreglos':
	  	 			$next = "Algoritmos-de-ordenación"; 
	  	 			break;  
	  	 		case 'Algoritmos-de-ordenación':
	  	 			$next = "Ordenación-por-selección-y-por-inserción"; 
	  	 			break;   
	  	 		case 'Ordenación-por-selección-y-por-inserción':
	  	 			$next = "Ordenación-por-burbuja"; 
	  	 			break;  	
	  	 		case 'Ordenación-por-burbuja':
	  	 			$next = "Ordenación-por-burbuja-bidireccional"; 
	  	 			break; 	
	  	 		case 'Ordenación-por-burbuja-bidireccional':
	  	 			$next = "Proyecto-final"; 
	  	 			break; 	  	 
	  	 		case 'Proyecto-final':
	  	 			$next = "Programación-de-juego-piedra-papel-o-tijeras"; 
	  	 			break; 	
	  	 		case 'Programación-de-juego-piedra-papel-o-tijeras':
	  	 			$next = "fin-unidad-1"; 
	  	 			break; 		  	 			
	  	 		case 'fin-unidad-1':
	  	 			$next = "Que-es-php"; 
	  	 			break;
	  	 		case 'Que-es-php':
	  	 			$next = "Configuración-del-entorno-php"; 
	  	 			break; 
	  	 		case 'Configuración-del-entorno-php':
	  	 			$next = "Hola-mundo"; 
	  	 			break;
	  	 		case 'Hola-mundo':
	  	 			$next = "Variables-y-tipos-de-variables"; 
	  	 			break;
	  	 		case 'Variables-y-tipos-de-variables':
	  	 			$next = "Constantes"; 
	  	 			break;
	  	 		case 'Constantes':
	  	 			$next = "Conversión-de-tipos"; 
	  	 			break;
	  	 		case 'Conversión-de-tipos':
	  	 			$next = "Concatenación-e-interpolación"; 
	  	 			break;
	  	 		case 'Concatenación-e-interpolación':
	  	 			$next = "Operadores-de-comparación"; 
	  	 			break;
	  	 		case 'Operadores-de-comparación':
	  	 			$next = "Operadores-aritmeticos"; 
	  	 			break;
	  	 		case 'Operadores-aritmeticos':
	  	 			$next = "Operadores-de-asiganación"; 
	  	 			break;
	  	 		case 'Operadores-de-asiganación':
	  	 			$next = "Operadores-lógicos-php"; 
	  	 			break;
	  	 		case 'Operadores-lógicos-php':
	  	 			$next = "Condicionales-php"; 
	  	 			break;
	  	 		case 'Condicionales-php':
	  	 			$next = "Sentencia-switch"; 
	  	 			break;
	  	 		case 'Sentencia-switch':
	  	 			$next = "Bucle-while-y-do-while"; 
	  	 			break;
	  	 		case 'Bucle-while-y-do-while':
	  	 			$next = "Bucle-for-php"; 
	  	 			break;
	  	 		case 'Bucle-for-php':
	  	 			$next = "Foreach"; 
	  	 			break;
	  	 		case 'Foreach':
	  	 			$next = "Array-indexado-y-asociativo"; 
	  	 			break;
	  	 		case 'Array-indexado-y-asociativo':
	  	 			$next = "Array-Multidimensional"; 
	  	 			break;
	  	 		case 'Array-Multidimensional':
	  	 			$next = "Funciones-php"; 
	  	 			break;
	  	 		case 'Funciones-php':
	  	 			$next = "Argumentos-de-funciones"; 
	  	 			break;
	  	 		case 'Argumentos-de-funciones':
	  	 			$next = "Return"; 
	  	 			break;
	  	 		case 'Return':
	  	 			$next = "Funciones-variables-y-anonimas"; 
	  	 			break;
	  	 		case 'Funciones-variables-y-anonimas':
	  	 			$next = "Declaraciones-de-tipo-escalar"; 
	  	 			break;
	  	 		case 'Declaraciones-de-tipo-escalar':
	  	 			$next = "Introducción-a-la-POO"; 
	  	 			break;
	  	 		case 'Introducción-a-la-POO':
	  	 			$next = "Clases-y-objetos"; 
	  	 			break;
	  	 		case 'Clases-y-objetos':
	  	 			$next = "Instancias"; 
	  	 			break;
	  	 		case 'Instancias':
	  	 			$next = "Herencia"; 
	  	 			break;
	  	 		case 'Herencia':
	  	 			$next = "Cookie-y-Session"; 
	  	 			break;
	  	 		case 'Cookie-y-Session':
	  	 			$next = "Session"; 
	  	 			break;
	  	 		case 'Session':
	  	 			$next = "Cookie"; 
	  	 			break;
	  	 		case 'Cookie':
	  	 			$next = "Namespace"; 
	  	 			break;
	  	 		case 'Namespace':
	  	 			$next = "Clases-anonimas"; 
	  	 			break;
	  	 		case 'Clases-anonimas':
	  	 			$next = "CSPRNG-y-función-intdiv"; 
	  	 			break;
	  	 		case 'CSPRNG-y-función-intdiv':
	  	 			$next = "Serialize-y-unserialize"; 
	  	 			break;
	  	 		case 'Serialize-y-unserialize':
	  	 			$next = "Diferencia-entre-las-apps-web-y-las-páginas-web"; 
	  	 			break;
	  	 		case 'Diferencia-entre-las-apps-web-y-las-páginas-web':
	  	 			$next = "MVC-y-comienzo-de-proyecto"; 
	  	 			break;
	  	 		case 'MVC-y-comienzo-de-proyecto':
	  	 			$next = "Creando-un-login"; 
	  	 			break;
	  	 		case 'Creando-un-login':
	  	 			$next = "Registro-de-usuarios"; 
	  	 			break;
	  	 		case 'Registro-de-usuarios':
	  	 			$next = "Recuperando-credenciales"; 
	  	 			break;
	  	 		case 'Recuperando-credenciales':
	  	 			$next = "Categorías-de-foros"; 
	  	 			break;
	  	 		case 'Categorías-de-foros':
	  	 			$next = "Creación-de-foros"; 
	  	 			break;
	  	 		case 'Creación-de-foros':
	  	 			$next = "URLs-Amigables"; 
	  	 			break;

	  	 	}

	  	 return $next;
  	 }



  }



 ?>