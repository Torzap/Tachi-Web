<!DOCTYPE html><html lang='es'>
<head>
<!--Inicia header del panel -->
     <title>Home - &#84;&#97;&#99;&#104;&#105; &#65;&#100;&#109;&#105;&#110; &#80;&#97;&#110;&#101;&#108;</title>
     <link href='tp-content/css/estilo.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/main.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/new_us.css' type='text/css' rel='stylesheet' />
     <meta name="Application-name" content="Tachi Admin Panel" />
     <meta http-equiv="Content-Language" content="es" />
     <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <meta name="Author" content="Amir Torrez - amirtorrez@openmailbox.org" />
     <meta name="Copyright" content="Torzap ©2011-2016 - All Rights Reserveds" />
     <meta name="Viewport" content="width=device-width, initial-scale=1" />
<!--Termina header del panel -->
</head>
<?php include ('tp-includes/copy.html'); ?>

<body>
<!--Inicia cuerpo del panel -->
  <!--Inicia menú del panel -->
<div id="container">
	<div id="logo"><h1></h1></div>
<?php include ('tp-content/modulos/welcome.php'); ?>
<?php include ('tp-content/modulos/navbar.php'); ?>  
  <!--Termina menú del panel -->

  <div id="page">

  <!--Inicia submenú del panel -->
<div id="left_menu"><div class="left_menu_box">
<div class="title">Portada</div>
<ul class="menu">
     <li class=""><a href="index.php?modulo=portada">Portada</a></li>
     <li class=""><a href="settings.php">Configuración</a></li>
     <li class=""><a href="news.php">Noticias</a></li>
     <li class=""><a href="tany.php">Tanys y premios</a></li>
     <li class=""><a href="users.php">Jugadores</a></li>
     <li class=""><a href="skin.php">Plantillas y Estilos</a></li>
     <li><a href="sttantra.php">STTantra</a></li>
     <li class=""><a href="mantto.php">Mantenimiento</a></li>
     <li class=""><a href="index.php?modulo=creditos">Créditos </a></li>
</ul></div></div>
  <!--Termina submenú del panel -->

<div id="content"><div id="inner"><div class="border_wrapper">

<?php
   if (isset($_GET['modulo'])) {
        $page = $_GET['modulo'];
        if (file_exists("tp-content/modulos/page/$page.php")) { include ( "tp-content/modulos/page/$page.php");
         }
        else { 
           print "<h2>Pagina no encontrada.</h2>"; 
             } 
    }
   else { include ("tp-content/modulos/page/portada.php");
    }
?>


</div></div></div></div>

  <!--Inicia pie del panel -->
<?php include ('tp-content/modulos/footer.php'); ?>
  <!--Termina pie del panel -->
</div>
<!--Termina cuerpo del panel -->
</body></html>