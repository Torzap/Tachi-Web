<!DOCTYPE html><html lang='es'>
<head>
<!--Inicia header del panel -->
     <title>Configuraciones - &#84;&#97;&#99;&#104;&#105; &#65;&#100;&#109;&#105;&#110; &#80;&#97;&#110;&#101;&#108;</title>
     <link href='tp-content/css/estilo.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/main.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/new_us.css' type='text/css' rel='stylesheet' />
     <meta name="Application-name" content="Tachi Admin Panel" />
     <meta http-equiv="Content-Language" content="es" />
     <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <meta name="Author" content="Amir Torrez - amirtorrez@openmailbox.org" />
     <meta name="Copyright" content="Torzap ©2011-2016 - All Rights Reserveds" />
     <meta name="Viewport" content="width=device-width, initial-scale=1" />
<style>
label {
	font-size:12px;
	font-weight: normal;
}
</style>
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
<div class="title">Configuraciones</div>
<ul class="menu">
     <li class=""><a href="settings.php?modulo=config">Configuraci&oacute;n general</a></li>
     <li class=""><a href="settings.php?modulo=downloads">Enlaces de descargas</a></li>
     <li class=""><a href="settings.php?modulo=conec">Cuentas de correo</a></li>
     <li class=""><a href="settings.php?modulo=rates">Rates del servidor</a></li>
</ul></div></div>
  <!--Termina submenú del panel -->

<div id="content"><div id="inner"><div class="border_wrapper">

<?php
   if (isset($_GET['modulo'])) {
        $page = $_GET['modulo'];
        if (file_exists("tp-content/modulos/settings/$page.php")) { include ( "tp-content/modulos/settings/$page.php");
         }
        else { 
           print "<h2>Pagina no encontrada.</h2>"; 
             } 
    }
   else { include ("tp-content/modulos/settings/config.php");
    }
?>


</div></div></div></div>

  <!--Inicia pie del panel -->
<?php include ('tp-content/modulos/footer.php'); ?>
  <!--Termina pie del panel -->
</div>
<!--Termina cuerpo del panel -->
</body></html>