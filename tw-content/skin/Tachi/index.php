<!DOCTYPE html><html lang="<?=$Web['Lang'];?>" oncontextmenu="return <?=$Web['Button'];?>">
<!-- Inicia cabecera -->
<head>
<title><?=$Web['Name'];?> - <?=$Web['Info'];?></title>
<meta name="Application-name" content="<?=$Web['Name'];?>" />
<meta http-equiv="Content-Language" content="<?=$Web['Lang'];?>" />
<meta http-equiv="Content-type" content="text/html;charset=ISO-8859-1" />
<meta name="Description" content="Tantra es un RPG online con gráficos 3D depurados, un completo argumento y con intuitiva jugabilidad. Hecho tanto para jugadores novatos como hardcore, está ambientado en fantasía oriental.">
<meta name="Keywords" content="Tantra Online, Tachi Panel, John A. Torres, Johnam, Tachihost, Tachi Web, Tachi, Kathana, Tantra, MMORPG" />
<meta name="Author" content="Amie Torrez" />
<meta name="Copyright" content="Torzap Inc. ©2011-2013 - All Rights Reserveds" />
<meta name="Robots" content="all" />
<meta name="Google" content="notranslate" />
<script type="text/javascript" src="<?=$Web['Domain'];?>/tw-content/estilos/ajax.js"></script>
<link rel="stylesheet" href="<?=$Web['Domain'];?>/tw-content/skin/Tachi/style.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="<?=$Web['Domain'];?>/tw-content/skin/Tachi/favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="<?=$Web['Domain'];?>/tw-content/skin/Tachi/jquery.js"></script>
<script type="text/javascript" src="<?=$Web['Domain'];?>/tw-content/skin/Tachi/script.js"></script>
<meta name="Viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" type="text/css" href="tw-content/estilos/tiptip/css/tipTip.css">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="<?=$Web['Domain'];?>/tw-content/estilos/tiptip/jscripts/jquery.tipTip.js"></script>
<script type="text/javascript" src="<?=$Web['Domain'];?>/tw-content/estilos/tiptip/jscripts/jquery.tipTip.minified.js"></script> 
<meta name="Contact" content="amirtorrez@openmailbox.org" />
<meta name="Distribution" content="global" />
<meta name="MobileOptimized" content="320" />
<script type='text/javascript'>jQuery.noConflict();jQuery(function() {jQuery("a").tipTip({maxWidth: "auto", edgeOffset: 10,gravity: 'n'});jQuery("img").tipTip({maxWidth: "auto", edgeOffset: 10,gravity: 'n'});});</script> 
<script languaje="JavaScript">
window.onload=hora;fecha = new Date("<?php echo date("d m Y H:i:s"); ?>");function hora(){var hora=fecha.getHours() + 1;var minutos=fecha.getMinutes();var segundos=fecha.getSeconds();if(hora<10){ hora='0'+hora;}if(minutos<10){minutos='0'+minutos; }
if(segundos<10){ segundos='0'+segundos; }fech=hora+":"+minutos+":"+segundos;document.getElementById('hora').innerHTML=fech;
fecha.setSeconds(fecha.getSeconds()+1);setTimeout("hora()",1000);}
</script>
<!--[if IE 6]><link rel="stylesheet" href="tw-content/skin/Tachi/style.ie6.css" type="text/css" media="screen" />
<![endif]--><!--[if IE]><script language="javascript">alert("Este sitio no es soportado por Internet Explorer.");</script><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><script src="http://192.168.1.64/tw-content/estilos/25266.js"></script><![endif]--><!--[if IE 7]>
<link rel="stylesheet" href="<?=$Web['Domain'];?>/tw-content/skin/Tachi/style.ie7.css" type="text/css" media="screen" /><![endif]-->
</head>
<!-- Termina cabecera -->
<!-- 
        *****************************************************************************
        ** Template: Tachi,    Tachi Web versión: 1.2.3,    07:52 p.m. 22/08/2012  **
        **               Diseñado y desarrollado por: John A. Torres               **
        ** Johnamtorres@gmail.com               -                www.tachihost.in  **
        *****************************************************************************
-->
<body oncontextmenu="return <?=$Web['Button'];?>" onselectstart="return <?=$Web['Button'];?>" ondragstart="return <?=$Web['Button'];?>">
<!-- Inicia cuerpo -->
<div id="tw-page-background-middle-texture">
<div id="tw-main">
    <div class="cleared reset-box"></div>
    <div class="tw-sheet">
        <div class="tw-sheet-tl"></div>
        <div class="tw-sheet-tr"></div>
        <div class="tw-sheet-bl"></div>
        <div class="tw-sheet-br"></div>
        <div class="tw-sheet-tc"></div>
        <div class="tw-sheet-bc"></div>
        <div class="tw-sheet-cl"></div>
        <div class="tw-sheet-cr"></div>
        <div class="tw-sheet-cc"></div>
        <div class="tw-sheet-body">
  <!-- Inicia header de pagina -->
            <div class="tw-header">
                <div class="tw-header-clip">
                <div class="tw-header-center">
                    <div class="tw-header-png"></div>
                    <div class="tw-header-jpeg"></div>
                </div>
                </div>
                <div class="tw-headerobject"><a href="<?=$Web['Domain'];?>"></a></div>
                <script type="text/javascript" src="<?=$Web['Domain'];?>/tw-content/skin/Tachi/swfobject.js"></script>
                <div id="tw-flash-area">
                <div id="tw-flash-container">
                <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="774" height="150" id="tw-flash-object">
                	<param name="movie" value="tw-content/skin/Tachi/container.swf" />
                	<param name="quality" value="high" />
                	<param name="scale" value="default" />
                	<param name="wmode" value="transparent" />
                	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=tw-content/skin/Tachi/images/flash.swf&amp;radius=3&amp;clipx=0&amp;clipy=-21&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=774&amp;cliph=193&amp;width=774&amp;height=150&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=false" />
                    <param name="swfliveconnect" value="true" />
                	<!--[if !IE]>-->
                	<object type="application/x-shockwave-flash" data="tw-content/skin/Tachi/container.swf" width="774" height="150">
                	    <param name="quality" value="high" />
                	    <param name="scale" value="default" />
                	    <param name="wmode" value="transparent" />
                    	<param name="flashvars" value="color1=0xFFFFFF&amp;alpha1=.30&amp;framerate1=24&amp;loop=true&amp;wmode=transparent&amp;clip=tw-content/skin/Tachi/images/flash.swf&amp;radius=3&amp;clipx=0&amp;clipy=-21&amp;initalclipw=900&amp;initalcliph=225&amp;clipw=774&amp;cliph=193&amp;width=774&amp;height=150&amp;textblock_width=0&amp;textblock_align=no&amp;hasTopCorners=true&amp;hasBottomCorners=false" />
                        <param name="swfliveconnect" value="true" />
                	<!--<![endif]-->
                		<div class="tw-flash-alt"><a href="http://www.adobe.com/go/getflashplayer"><img src="http://www.adobe.com/images/shared/download_buttons/get_flash_player.gif" alt="Get Adobe Flash player" /></a></div>
                	<!--[if !IE]>-->
                	</object>
                	<!--<![endif]-->
                </object>
                </div>
                </div>
                <script type="text/javascript">    swfobject.switchOffAutoHideShow(); swfobject.registerObject("tw-flash-object", "9.0.0", "tw-content/skin/Tachi/expressInstall.swf");</script>
                <div class="tw-logo">
                                 <h1 class="tw-logo-name"><a href="<?php echo ''.$Web['Domain'].''; ?>"><?php echo ''.$Web['Name'].''; ?></a></h1>
                                                 <h2 class="tw-logo-text"><?php echo ''.$Web['Info'].''; ?></h2>
                                </div>
            </div>
            <div class="cleared reset-box"></div>
<div class="tw-nav">
	<div class="tw-nav-l"></div>
	<div class="tw-nav-r"></div>
  <!-- Termina header de pagina -->
<div class="tw-nav-outer">
	<ul class="tw-hmenu">
<li><a href="<?=$Web['Domain'];?>" title="<?=LANG_JT4;?>"><span class="l"></span><span class="r"></span><span class="t">Home</span></a></li>	

<li><a href="<?=$Web['Domain'];?>/?tw=descargas" title="<?=LANG_JT5;?>"><span class="l"></span><span class="r"></span><span class="t"><?=LANG_DESCARGAS;?></span></a></li>

<li><a href="<?=$Web['Domain'];?>/?tw=registro" title="<?=LANG_JT1;?>"><span class="l"></span><span class="r"></span><span class="t"><?=LANG_REGISTRO;?></span></a></li>

<li><a href="<?=$Web['Domain'];?>/?tw=top" title="<?=LANG_JT2;?>"><span class="l"></span><span class="r"></span><span class="t">Ranking</span></a></li>

<li><a href="<?=$Web['ShopLink'];?>>" title="<?=LANG_JT3;?>"><span class="l"></span><span class="r"></span><span class="t">Item Mall</span></a></li>

<li><a href="<?=$Web['ForoLink'];?>" title="<?=LANG_JT6;?>"><span class="l"></span><span class="r"></span><span class="t"><?=LANG_FORO;?></span></a></li>	

<li><a href="<?=$Web['SoporteLink'];?>" title="<?=LANG_JT7;?>"><span class="l"></span><span class="r"></span><span class="t"><?=LANG_SOPORTE;?></span></a></li>
	</ul>
</div>
</div>
<div class="cleared reset-box"></div>
<div class="tw-content-layout">
                <div class="tw-content-layout-row">
                    <div class="tw-layout-cell tw-sidebar1">
<div class="tw-block">
    <div class="tw-block-tl"></div>
    <div class="tw-block-tr"></div>
    <div class="tw-block-bl"></div>
    <div class="tw-block-br"></div>
    <div class="tw-block-tc"></div>
    <div class="tw-block-bc"></div>
    <div class="tw-block-cl"></div>
    <div class="tw-block-cr"></div>
    <div class="tw-block-cc"></div>
    <div class="tw-block-body">
                <div class="tw-blockheader">
                    <div class="l"></div>
                    <div class="r"></div>
                    <h3 class="t" align="center"><?=LANG_ELOG;?></h3>
                </div>
                <div class="tw-blockcontent">
                    <div class="tw-blockcontent-body">
                <p>    <div id="login">
  <?php

switch ($logeado) {
    case 0:

?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  autocomplete="off">
    <input type="text" name="txtUsername" id="txtUsername" class="textarea" placeholder="<?=LANG_LUSUARIO;?>">
    <br />
    <input type="password" name="txtPassword" id="txtPassword" class="textarea" placeholder="<?=LANG_LCONTRA;?>">
    <br /><br>
    <input name="submit" type="submit" class="boton" value="<?=LANG_LENTRAR;?>"/><br /><a href="<?=$Web['Domain'];?>/?tw=lostpw" title="<?=LANG_LLOST;?>"><span style="font-size:12px; color: Silver"><?=LANG_LLOST;?></span></a>
  </form>
  <?php

        break;
    case 1:
?>
  <?php
$weaA = mssql_query("SELECT * FROM Account where UserID='" . $_SESSION['username'] . "'");
$rowA = mssql_fetch_row($weaA);
if ($rowA[15] == "1")
?>
  <div align="right" style="color: Silver; font-size:12px; font-family:Trebuchet MS; padding-right:15px;"><?=LANG_LHOLA;?> <strong style="color:#66CC00"><?=$rowA[11];?> <?=$rowA[13];?></strong>!</div>
  <div style="float:left; font-size:11px; font-family:Trebuchet MS; padding-left:15px;">
<li><a href="<?=$Web['Domain'];?>/?tw=usercp"><span style="color: Silver"><?=LANG_LINFO;?></span></a></li>
<li><a href="<?=$Web['Domain'];?>/?tw=debug"><span style="color: Silver"><?=LANG_LDEBUG;?></span></a></li>
<li><a href="<?=$Web['Domain'];?>/?tw=editpw"><span style="color: Silver"><?=LANG_LEDITPW;?></span></a></li>
<li><a href="<?=$Web['Domain'];?>/?tw=delchar"><span style="color: Silver"><?=LANG_LUKEY;?></span></a></li>
<li><a href="<?=$Web['Domain'];?>/?tw=salir"><span style="color: Silver"><?=LANG_LSALIR;?></span></a></li></div><br /><br /><br /><br />
<br />
  <?php
        break;
    case 2:
?>
  <form method="post" action="<?=$_SERVER['PHP_SELF'];?>"  autocomplete="off">
    <input type="text" name="txtUsername2" id="txtUsername" class="textarea" value="<?=LANG_LUSUARIO;?>">
    <br />
    <input type="password" name="txtPassword" id="txtPassword" class="textarea" placeholder="<?=LANG_LCONTRA;?>">
    <br>
    <input name="submit" type="submit" class="boton" value="<?=LANG_LENTRAR;?>"/>
  </form>
  <span class="login-text"><?=LANG_LERROR;?>
<br /><a href="<?=$Web['Domain'];?>/?tw=lostpw" title="<?=LANG_LLOST;?>"><?=LANG_LLOST;?></a>
  <?php
        break;
}
?>
</span>
</div></p>                
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div>
</div>
<div class="tw-block">
    <div class="tw-block-tl"></div>
    <div class="tw-block-tr"></div>
    <div class="tw-block-bl"></div>
    <div class="tw-block-br"></div>
    <div class="tw-block-tc"></div>
    <div class="tw-block-bc"></div>
    <div class="tw-block-cl"></div>
    <div class="tw-block-cr"></div>
    <div class="tw-block-cc"></div>
<div class="tw-block-body">
                <div class="tw-blockheader">
                    <div class="l"></div>
                    <div class="r"></div>
                    <h3 class="t" align="center"><?=LANG_EINF;?></h3>
                </div>
                <div class="tw-blockcontent">
                    <div class="tw-blockcontent-body">
<div class="status" id="status">Status: <a href="<?=$Web['Domain'];?>/?tw=online"><?php include("tw-includes/status.php");?></a></div>
<?php include("tw-includes/rates.php"); ?>
Exp: <b><?=$wExp;?></b><br />
        Ruphia: <b><?=$wRuph;?></b><br />
        Master Points: <b><?=$wMst;?></b><br />
	Kathana: <b><?=$wKth;?></b><br />
	Estado: <b><?=$wSta;?></b><br>
	<center><span style="font-weight:Bold;font-size:16px;color:#ccc;"><?=date("H:i:s");?></span></center>
<small><center><font color='#CCCCCC' face='Tahoma' size='1px'><?php $dia = date ("d");$mes = date ("m");$ano = date ("Y");$day = date ("w");
if ($mes == 1) {$mes = "January";}if ($mes == 2) {$mes = "February";}if ($mes == 3) {$mes = "March";}if ($mes == 4) {$mes = "April";}if ($mes == 5) {$mes = "May";}if ($mes == 6) {$mes = "June";}if ($mes == 7) {$mes = "July";}if ($mes == 8) {$mes = "August";}if ($mes == 9) {$mes = "September";}if ($mes == 10) {$mes = "October";
}if ($mes == 11) {$mes = "November";}if ($mes == 12) {$mes = "December";}
if ($day == 0) {$day = "Sunday";}if ($day == 1) {$day = "Monday";}if ($day == 2){$mes = "Tuesday";}if ($day == 3) {$day = "Wednesday";}if ($day == 4) {$day = "Thursday";}if ($day == 5) {$day = "Friday";}if ($day == 6) {$day = "Saturday";}
echo "$day $dia of $mes of $ano";?></font></center></small>             
                                		<div class="cleared"></div>
                    </div>
                </div>
		<div class="cleared"></div>
    </div></div>



                      <div class="cleared"></div>
                    </div>

                    <div class="tw-layout-cell tw-content">
<div class="tw-post">
    <div class="tw-post-body">
<div class="tw-post-inner tw-article">
<?php
   if (isset($_GET['tw'])) {
        $page = $_GET['tw'];
        if (file_exists("tw-content/page/$page.php")) { include ( "tw-content/page/$page.php");
         }
        else { 
           print "<h2>Pagina no encontrada.</h2>"; 
             } 
    }
   else { include ("tw-content/page/portada.php");
    }
?>
                <div class="cleared"></div>
                </div>

		<div class="cleared"></div>
    </div>
</div>

                      <div class="cleared"></div>
                    </div>
                </div>
            </div>
            <div class="cleared"></div>
            <div class="tw-footer">
                <div class="tw-footer-t"></div>
                <div class="tw-footer-l"></div>
                <div class="tw-footer-b"></div>
                <div class="tw-footer-r"></div>
                <div class="tw-footer-body">
                            <div class="tw-footer-text">
                                <p><a href="https://www.facebook.com/pages/Shinigamy/107909979388884">Facebook</a> | <a href="#">Twitter</a> | <a href="#">Google+</a></p><p>Copyright &copy;<?php echo date("Y"); ?> <?=$Web['Name'];?> - <?php echo LANG_RCOPY; ?></p>
                                                            </div>
                    <div class="cleared"></div>
                </div>
            </div>
    		<div class="cleared"></div>
        </div>
    </div>
  <!-- Inicia pie de pagina -->
    <div class="cleared"></div>
    <p class="tw-page-footer">Diseñado y desarrollado por <a href="https://www.facebook.com/TorZap" target="_blank">John A. Torres</a></p>
    <div class="cleared"></div>
</div>
</div>
  <!-- Termina pie de pagina -->
<!-- Termina cuerpo de pagina -->
</body></html>