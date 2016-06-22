<!DOCTYPE html><html lang='es'>
<head>
<!--Inicia header del panel -->
     <title>Noticias - &#84;&#97;&#99;&#104;&#105; &#65;&#100;&#109;&#105;&#110; &#80;&#97;&#110;&#101;&#108;</title>
     <link href='tp-content/css/estilo.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/main.css' type='text/css' rel='stylesheet' />
     <link href='tp-content/css/new_us.css' type='text/css' rel='stylesheet' />
     <meta name="Application-name" content="Tachi Admin Panel" />
     <meta http-equiv="Content-Language" content="es" />
     <meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
     <meta name="Author" content="Amir Torrez - amirtorrez@openmailbox.org" />
     <meta name="Copyright" content="Torzap ©2011-2016 - All Rights Reserveds" />
     <meta name="Viewport" content="width=device-width, initial-scale=1" />
<!-- TinyMCE --><?php 
include ('../tw-config/conec.php'); 

$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("SELECT * FROM tp_settings where id='1'");
$row = mysql_fetch_row($result);

?><script type="text/javascript" src="<?php echo $row['1'] ?>/tp-admin/tp-content/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		// General options
		language : "es",
		mode : "textareas",
		skin : "default",
		skin_variant : "default",
		theme : "advanced",
		plugins : "autolink,lists,pagebreak,style,layer,table,save,advhr,advimage,advlink,emotions,iespell,inlinepopups,insertdatetime,preview,media,searchreplace,print,contextmenu,paste,directionality,fullscreen,noneditable,visualchars,nonbreaking,xhtmlxtras,template,wordcount,advlist,autosave,visualblocks",

		// Theme options
		theme_advanced_buttons1 : "code,save,newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
		theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,|,insertdate,inserttime,preview,|,forecolor,backcolor",
		theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,iespell,media,advhr,|,print,|,ltr,rtl,|,fullscreen",
		theme_advanced_toolbar_location : "top",
		theme_advanced_toolbar_align : "left",
		theme_advanced_statusbar_location : "bottom",
		theme_advanced_resizing : true,

		// Example content CSS (should be your site CSS)
		content_css : "tp-content/tiny_mce/css/content.css",

		// Drop lists for link/image/media/template dialogs
		template_external_list_url : "lists/template_list.js",
		external_link_list_url : "lists/link_list.js",
		external_image_list_url : "lists/image_list.js",
		media_external_list_url : "lists/media_list.js",

		// Style formats
		style_formats : [
			{title : 'Bold text', inline : 'b'},
			{title : 'Red text', inline : 'span', styles : {color : '#ff0000'}},
			{title : 'Red header', block : 'h1', styles : {color : '#ff0000'}},
			{title : 'Example 1', inline : 'span', classes : 'example1'},
			{title : 'Example 2', inline : 'span', classes : 'example2'},
			{title : 'Table styles'},
			{title : 'Table row 1', selector : 'tr', classes : 'tablerow1'}
		],

		// Replace values for the template plugin
		template_replace_values : {
			username : "Some User",
			staffid : "991234"
		}
	});
</script>
<!-- /TinyMCE -->
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
<div class="title">Noticias</div>
<ul class="menu">
     <li class=""><a href="news.php?news=noticias">Ver noticias</a></li>
     <li class=""><a href="news.php?news=addnoticia">Publicar nueva noticia</a></li>
</ul></div></div>
  <!--Termina submenú del panel -->

<div id="content"><div id="inner"><div class="border_wrapper">
<?php
   if (isset($_GET['news'])) {
        $page = $_GET['news'];
        if (file_exists("tp-content/modulos/news/$page.php")) { include ( "tp-content/modulos/news/$page.php");
         }
        else { 
           print "<h2>Pagina no encontrada.</h2>"; 
             } 
    }
   else { include ("tp-content/modulos/news/noticias.php");
    }
?>


</div></div></div></div>

  <!--Inicia pie del panel -->
<?php include ('tp-content/modulos/footer.php'); ?>
  <!--Termina pie del panel -->
</div>
<!--Termina cuerpo del panel -->
</body></html>