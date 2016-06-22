<?php
include ("../../tw-config/conec.php");
?>
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
     <li><a href="install.php">Instalación </a></li>
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
     <li class="">&nbsp &nbsp<strong>Usuario:</strong> <?php echo USUARIO_MYSQL; ?></li>
     <br />
     <li class="">&nbsp &nbsp<?php echo "Tu versión de php es: ".phpversion()." "; ?></li>
     <li class="">&nbsp &nbsp(Versión recomendada: 4+)</li>
</p></ul></div></div>
  <!--Termina submenú del panel -->

<div id="content"><div id="inner"><div class="border_wrapper">

      <div class="title">Instalación de Tachi Panel</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<br /><p><p><p><p>

<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

   $sql="create table tp_settings (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `dominio` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `eslogan` varchar(150) NOT NULL,
  `foro` varchar(150) NOT NULL,
  `soporte` varchar(150) NOT NULL,
  `idioma` varchar(2) NOT NULL,
  `skin` varchar(150) NOT NULL,
  `mouse` varchar(150) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `shop` varchar(150) NOT NULL,
  `top` varchar(2) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `dominio` (`dominio`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql);
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

$sql="create table tp_conec (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `guser` varchar(100) NOT NULL,
  `gpass` varchar(50) NOT NULL,
  `umail` varchar(100) NOT NULL,
  `uname` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `umail` (`umail`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql);
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

$sql="create table tp_rates (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `exp` varchar(50) NOT NULL,
  `ruph` varchar(50) NOT NULL,
  `mst` varchar(50) NOT NULL,
  `kth` varchar(50) NOT NULL,
  `sta` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `exp` (`exp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql);
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

$sql="create table tp_downloads (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `directo` varchar(150) NOT NULL,
  `mediafire` varchar(150) NOT NULL,
  `depositfiles` varchar(150) NOT NULL,
  `rapidshare` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `directo` (`directo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql);
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

$sql="create table tp_noticias (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `autor` varchar(50) NOT NULL,
  `muestra` text(500) NOT NULL,
  `mensaje` text(800) NOT NULL,
  `fecha` date NOT NULL,
  `url` varchar(200) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql);
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

$sql="create table tp_sttantra (
  `id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(150) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `ip` varchar(150) NOT NULL,
  `boton` varchar(150) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `titulo` (`titulo`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;";
mysql_query($sql);
?>

<script type='text/javascript'>
window.location='install.paso3.php';
</script>
</p></p></p></p><br />

</td></tr></tbody></table>

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