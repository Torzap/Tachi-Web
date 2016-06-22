
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
     <link href='../tp-content/css/new_us.css' type='text/css' rel='stylesheet' />
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

      <div class="title">Instalación de Tachi Panel - Paso 2</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

   mysql_query("INSERT INTO tp_conec (id, guser, gpass, umail, uname) VALUES ('1', 'johnamtorres@gmail.com',  'john1', 'info@tachihost.in', 'Tachi Tantra Server')");
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

   mysql_query("INSERT INTO tp_rates (id, exp, ruph, mst, kth, sta) VALUES ('1', 'x100',  'x10', 'x15', '4.2', 'Beta')");
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

   mysql_query("INSERT INTO tp_downloads (id, directo, mediafire, depositfiles, rapidshare) VALUES ('1', '/setup.exe', 'mediafire.com', 'depositfiles.com', 'rapidshare.com')");
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

   mysql_query("INSERT INTO tp_sttantra (id, titulo, nombre, ip, boton) VALUES ('1', 'Tachi Web', 'Tachi Tantra', '192.0.0.1', 'true')");
?>
<?php
   mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
   mysql_select_db(BASE_DATOS);

   mysql_query("INSERT INTO tp_settings (id, dominio, nombre, eslogan, foro, soporte, idioma, skin, mouse, ip, shop, top) VALUES ('1', 'http://localhost', 'Tachi Web', 'Servidor Privado Kathana X', 'http://tachihost.in/comunidad/', 'http://tachihost.in', 'es', 'Default', 'true', '192.1.0.0', 'http://tachihost.in', '15')");

?>
<script type='text/javascript'>
window.location='install.finish.php';
</script>

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