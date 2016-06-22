<!DOCTYPE html><html lang='es'>
<head>
<!--Inicia header del panel -->
     <title>Instalación - Tachi Panel</title>
     <meta http-equiv='Content-Type' content='text/html; charset=UTF-8'>
     <meta autor='Amir Torrez' email='amirtorrez@openmailbox.org' />
     <link href='tp-admin/tp-content/css/nstll.css' type='text/css' rel='stylesheet' />
     <link href='tp-admin/tp-content/css/stp.css' type='text/css' rel='stylesheet' />
<!--Termina header del panel -->
</head>
<!--
	/*-----------------------------------------------
	
	   Plantilla: Tachi Panel - v1.0.3
	   Autor: Amir Torrez - amirtorrez@openmailbox.org
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
<?php
include ("tw-config/conec.php");
?>
<!--Inicia submenú del panel -->
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

      <div class="title">Instalación de Tachi Panel</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

  <p><center><span style='font-size:18px; font-weight:Bold;'>Tachi Panel :: Versión 1.0.3 Instalación</span></center></p>
<p></p><br />
  <p>Para ver la información PHP de su servidor en un punto de vista más detallada, por favor haga <a href="phpinfo.php">clic aquí </a>. (Se abre en una nueva ventana) </p>
Por favor, compruebe los detalles a continuación para ver si son correctos antes de que cualquier tipo de instalación/actualización. Si no hay información que se enumere a continuación, por favor, compruebe que el archivo de conexión tiene la información necesaria para el proceso.
<p><span style='font-size:10px; font-weight:Bold;'>Opciones de instalación:</span></p>
Por favor, verifique que ha editado el archivo de conexión con los datos correctos. </p><br /><br />
<table width="750" border="1" cellspacing="0" cellpadding="5" class="tableBorder" align="center">
    <tr>
      <td width="24" align="center" valign="middle"><p class="installBtn"><a href="install.paso1.php"><span style='font-size:16px; font-weight:Bold;'>GO</span></a></p></td>
      <td width="704" align="left" valign="top"><a href="install.paso1.php"><span style='font-size:14px; font-weight:Bold;'>Instalación nueva</span></a><br />
      Una instalación nueva, sin datos almacenados en su base de datos, por favor asegúrese de no tener alguna tabla en su base de datos con el nombre de <u><b><?php echo "$table"; ?></b></u>.</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p align="center">&copy; Copyright 2014 Tachi Panel</p>

</td></tr></tbody></table>

</div></div></div></div>

  <!--Inicia pie del panel -->
  <footer id="footer">
     <p class="generation">Johnamtorres@gmail.com</p>
     <p class="powered">Tachi Panel v1.1.0 - Desarrollado por <a href="http://tachihost.in" target="_blank"><b>John A. Torres</b></a>.</p>
  </footer>
  <!--Termina pie del panel -->
</div>
<!--Termina cuerpo del panel -->
</body></html>
