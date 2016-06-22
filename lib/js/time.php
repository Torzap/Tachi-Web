function getId(id){return document.getElementById(id);};
var d = new Date('<?php echo(date("F d, Y h:i:s"));?>');

function formatTime(){return (<?php echo(date("H"));?>>=12) ? 'pm' : 'am';};
function format(t){return (t>=10) ? t : '0'+t;};

var sday = new Array('Domingo','Lunes','Martes','Miercoles','Jueves','Viernes');
var smonth = new Array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

function displayTime(){
	d.setSeconds(d.getSeconds()+1);
	getId('showTime').innerHTML = format(d.getHours()) +":"+format(d.getMinutes())+":"+format(d.getSeconds())+" "+formatTime();
};

window.onload = function(){
	getId('showTime').innerHTML = format(d.getHours()) +":"+format(d.getMinutes())+":"+format(d.getSeconds())+" "+formatTime();
	setInterval("displayTime()", 1000);
	getId('showDate').innerHTML = sday[d.getDay()]+" "+d.getDate()+" "+" de "+smonth[d.getMonth()]+" del "+d.getFullYear();
};