
<?php

include 'vistas/modulos/head.php';

 ?>

 <?php
 require_once './controller/controlvista.php';

 $vt = new controlvista();
 $vistasr=$vt->obtener_vistas_controlador();
  ?>

	<body class="no-trans">
<?php

include 'vistas/modulos/header.php';

 ?>

<!-- COMIENZA CONTENIDO -->

 <?php
  if ($vistasr=="error") {
   	include './vistas/contenidos/errorvista.php'; /* Esto genera que cargue la web de error
 		cumpliendo las condiciones de el archivo de modelvista.php
 		(si existe la palabra en la lista blanca pero no le archivo carga error
 		y si no existe la palabra en la misma pues carga también error) */
   }
   elseif ($vistasr=="inicio") {
   	include './vistas/contenidos/iniciovista.php'; /* esto me ayuda a cuando controlvista
 		envia a $vistasr INICIO que cargue el include de inicio para que apenas entres
 		a la web (En este caso a la carpeta del proyecto) tengamos el inicio */
   }
   elseif ($vistasr=="servicios/nosotros") {
     include './vistas/contenidos/servicios/nosotrosvista.php'; /* esto me ayuda a cuando controlvista
     envia a $vistasr INICIO que cargue el include de inicio para que apenas entres
     a la web (En este caso a la carpeta del proyecto) tengamos el inicio */
   }
   else {
   include $vistasr; /* esto ya que si activas alguna de las palabras permitidas
 	en la lista blanca de modelvista cargue el include que corresponda a cada uno */
   }
   ?>
<!-- TERMINA CONTENIDO -->

<?php include 'vistas/modulos/copyright.php'; ?>


<?php include 'vistas/modulos/script.php'; ?>
<img src="https://tracker.metricool.com/c3po.jpg?hash=bb18f0bd570f09005c92451e86552080"/> 

	</body>
