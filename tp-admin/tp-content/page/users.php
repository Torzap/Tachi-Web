<?php set_time_limit(NULL); ?>
<?php
include 'tp-includes/funciones.php';
?>
<?php set_time_limit(NULL); ?>
<!DOCTYPE html><html lang='es'>
<head>
<!--Inicia header del panel -->
     <title>Usuarios - &#84;&#97;&#99;&#104;&#105; &#65;&#100;&#109;&#105;&#110; &#80;&#97;&#110;&#101;&#108;</title>
     <link href='tp-content/css/estilo.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/main.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/new_us.css' type='text/css' rel='stylesheet' />
     <meta name="Application-name" content="Tachi Admin Panel" />
     <meta http-equiv="Content-Language" content="es" />
     <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <meta name="Author" content="Amir Torrez - amirtorrez@openmailbox.org" />
     <meta name="Copyright" content="Torzap ©2011-2016 - All Rights Reserveds" />
     <meta name="Viewport" content="width=device-width, initial-scale=1" />
<script language="javascript">
function AJAX_Obj()
{
	var xmlhttp=false;
 	try {
 		xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
 	} catch (e) {
 		try {
 			xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
 		} catch (E) {
 			xmlhttp = false;
 		}
  	}

	if (!xmlhttp && typeof XMLHttpRequest!='undefined') {
 		xmlhttp = new XMLHttpRequest();
		
	}
	return xmlhttp;
}

function Load(where,what,how,res){
	var contenedor;
	contenedor = document.getElementById(where);
	ajax=AJAX_Obj();
	ajax.open(how, what,true);
	ajax.onreadystatechange=function() {
		if (ajax.readyState==4) {
			if(res==0)
			 contenedor.value = ajax.responseText
			else if(res==1)
			 contenedor.innerHTML = ajax.responseText
		}
	}
    ajax.send(null)
}
</script>
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
<div class="title">Usuarios y cuentas</div>
<ul class="menu">
     <li class=""><a href="users.php?modulo=finduser">Visor de cuentas</a></li>
     <li class=""><a href="users.php?modulo=#">Suspender cuenta</a></li>
     </ul></div></div>
  <!--Termina submenú del panel -->

<div id="content"><div id="inner"><div class="border_wrapper">

<?php
   if (isset($_GET['modulo'])) {
        $page = $_GET['modulo'];
        if (file_exists("tp-content/modulos/users/$page.php")) { include ( "tp-content/modulos/users/$page.php");
         }
        else { 
           print "<h2>Pagina no encontrada.</h2>"; 
             } 
    }
   else { include ("tp-content/modulos/users/finduser.php");
    }
?>


</div></div></div></div>

  <!--Inicia pie del panel -->
<?php include ('tp-content/modulos/footer.php'); ?>
  <!--Termina pie del panel -->
</div>
<!--Termina cuerpo del panel -->
</body></html>