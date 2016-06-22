<!DOCTYPE html><html lang='es'>
<head>
<!--Inicia header del panel -->
     <title>STTantra - &#84;&#97;&#99;&#104;&#105; &#65;&#100;&#109;&#105;&#110; &#80;&#97;&#110;&#101;&#108;</title>
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
<div class="title">STTantra web</div>
<ul class="menu">
     <li class=""><a href="sttantra.php?modulo=options">Editar opciones</a></li>
     <li class=""><a href="sttantra.php?modulo=news">Editar noticias</a></li>
     <li class=""><a href="sttantra.php?modulo=events">Editar eventos</a></li>
</ul></div></div>
  <!--Termina submenú del panel -->

<div id="content"><div id="inner"><div class="border_wrapper">

<?php
   if (isset($_GET['modulo'])) {
        $page = $_GET['modulo'];
        if (file_exists("tp-content/modulos/sttantra/$page.php")) { include ( "tp-content/modulos/sttantra/$page.php");
         }
        else { 
           print "<h2>Pagina no encontrada.</h2>"; 
             } 
    }
   else { include ("tp-content/modulos/sttantra/options.php");
    }
?>


</div></div></div></div>

  <!--Inicia pie del panel -->
<?php include ('tp-content/modulos/footer.php'); ?>
  <!--Termina pie del panel -->
</div>
<!--Termina cuerpo del panel -->
</body></html>