<?php require('../../../conf/config.php');?>
function preload(){
	$('body').append('<div id="preload" style="text-align:Center;padding-top:20%;"><img src="src/media/loading_1.gif"></div>');
	$('header,section,footer').hide();
	$('body').attr('style','background:#ddd;');
};
preload();
var hash = (window.location.hash.substring(1).length>1) ? window.location.hash.substring(1) : 'home';
function checkHash(){
	var ruta = '\/src\/skin\/Default\/module\/'+hash+'.php';
	$.ajax({
		url:ruta,
		type:'HEAD',
		error: function(){
			$('title').html("Error 404 - <?php echo($sv['NAME']);?>");
			$('#content').load('\/src\/skin\/Default\/module\/error.php');
		},
		success: function(){
			$('title').html((hash.substring(0,1).toUpperCase())+(hash.substring(1))+" - <?php echo($sv['NAME']);?>");
			$('#content').load('\/src\/skin\/Default\/module\/'+hash+'.php');
		}
	});
	$('#content').fadeIn(1000);
	$('#content').attr('style','display:inherit');
};
function onHashClick(){
	$('#content').hide();
	$('#content').attr('style','display:none');
	$('title').html((hash.substring(0,1).toUpperCase())+(hash.substring(1))+" - <?php echo($sv['NAME']);?>");
	checkHash();
};
function mnu(lnk){
	hash = (lnk.substring(1).length>1) ? lnk.substring(1) : 'home';
	checkHash();
};
$(document).ready(function(){
	checkHash();
	$('header,section,footer').fadeIn(1000);
	$('#preload').hide();
	$('body').attr('style','#fff');
	$('head').append('<script type="text\/javascript" src="\/lib\/js\/time.php"></script>');
	$('body').append('<link rel="stylesheet" href="\/src\/skin\/Default\/main.css">');
	$('title').html((hash.substr(0,1).toUpperCase())+(hash.substr(1))+" - <?php echo($sv['NAME']);?>");
	$('#main_menu').html('<div id="menu1"></div><div id="menu2"></div>');
	$('#menu1').load('\/src\/skin\/Default\/module\/menu1.php');
	$('#menu2').load('\/src\/skin\/Default\/module\/menu2.php');
	$('#pie').load('\/src/skin/Default/module\/pie.php');
	$('#content').load('\/src\/skin\/Default\/module\/home.php');
	$('#rates').load('\/src\/skin\/Default\/module\/rates.php');
	
	$('html, body').attr('oncontextmenu', 'return <?php echo($wb['CLICK']);?>');
	$('html, body').attr('ondragstart', 'return <?php echo($wb['DRAG']);?>');
	$('html, body').attr('onselectstart', 'return <?php echo($wb['SELECT']);?>');
	
	$('#showTime').html(format(d.getHours()) +":"+format(d.getMinutes())+":"+format(d.getSeconds())+" "+formatTime());
	$('#showDate').html(sday[d.getDay()]+" "+d.getDate()+" "+" de "+smonth[d.getMonth()]+" del "+d.getFullYear());
	setInterval("displayTime()", 1000);
	
	$("#main_menu").click(function(){
		$("a").click(function(){
			//alert(window.navigator.appName);
			hash = ($(this).attr('href').substring(1).length>1) ? $(this).attr('href').substring(1) : 'home';
			//window.location.reload();
		onHashClick();
		});
		$("li").click(function(){$('li').attr('class','');$(this).attr('class','menuactive');});
	});
});