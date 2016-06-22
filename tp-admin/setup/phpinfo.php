<!DOCTYPE html><html lang='es'>
<head>
<!--Inicia header del panel -->
     <title>Instalación - Tachi Panel</title>
     <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
     <meta autor='John Am Torres' email='johnamtorres@gmail.com' />
     <link href='../tp-content/css/estilo.css' type='text/css' rel='stylesheet' />
     <link href='../tp-content/css/main.css' type='text/css' rel='stylesheet' />
<!--Termina header del panel -->
</head>
<!--
	/*-----------------------------------------------
	
	   Plantilla: Tachi Panel - v1.0.3
	   Autor: John Am Torres - Johnamtorres@gmail.com
	   Fecha: 01/06/2012 - 16:30 GMT6
	
	----------------------------------------------- */
-->
<body>
<!--Inicia cuerpo del panel -->
  <!--Inicia menú del panel -->
<div id="container">
	<div id="logo"><h1></h1></div>
	
  <nav id="menu"><ul>
     <li><a href="index.php">Inicio</a></li>
     <li><a href="install.paso1.php">Instalación </a></li>
     <li><a href="phpinfo.php">Información PHP</a></li>
  </ul></nav>
  <!--Termina menú del panel -->

  <div id="page">

  <!--Inicia submenú del panel -->
<?php
include ("../../tw-config/conec.php");
?>
<div id="left_menu"><div class="left_menu_box">
<div class="title">Datos de instalación</div>
<ul class="menu"><p>
     <li class="">&nbsp &nbsp<strong>Servidor:</strong> <?php echo SERVIDOR_MYSQL; ?></li>
     <li class="">&nbsp &nbsp<strong>Base de datos:</strong> <?php echo BASE_DATOS; ?></li>
     <li class="">&nbsp &nbsp<strong>Usuario:</strong> <?php echo USUARIO_MYSQL; ?></li><br />
     <li class="">&nbsp &nbsp<?php echo "Tu versión de php es: ".phpversion()." "; ?></li>
     <li class="">&nbsp &nbsp(Versión recomendada: 4+)</li>
</p></ul></div></div>
  <!--Termina submenú del panel -->

<div id="content"><div id="inner"><div class="border_wrapper">

      <div class="title">Información de PHP</div>
<div style="background: #c0d3de;">
<?php
phpinfo();
?>
</div>
</div></div></div></div>

  <!--Inicia pie del panel -->
  <footer id="footer">
     <p class="generation">Johnamtorres@gmail.com</p>
     <p class="powered">Tachi Panel v1.0.3 - Desarrollado por <a href="http://tachihost.in" target="_blank"><b>John Am Torres</b></a>.</p>
  </footer>
  <!--Termina pie del panel -->
</div>
<!--Termina cuerpo del panel -->
</body></html>