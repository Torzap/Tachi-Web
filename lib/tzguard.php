<?php
/*======================================================================*\
|| #################################################################### ||
|| #                         Tachi Web 2.0.0                          # ||
|| # ---------------------------------------------------------------- # ||
|| #                 Copyright ©2011-2016 Amir Torrez                 # ||
|| #                 Todos los derechos reservados                    # ||
|| # ----------------     Anti inyecciones SQL       ---------------- # ||
|| # amirtorrez@openmailbox.org                      torzap.github.io # ||
|| #################################################################### ||
\*======================================================================*/
$bn = array ("==", , "%s", "or 1", "'", "select", "insert", "from", "where", "exec", "0x", "set", "declare", "sql", '"');
function tzguard($tzgd){
	$tzgd = str_ireplace ($bn,'', $tzgd);
	return $tzgd;
};
foreach($_GET as $var1 => $var2){
	if($_GET[$var2] == $bn){
		//echo('Palabra baneada');
	};
	
	$_GET[$var1] = tzguard($_GET[$var1]);
};
foreach($_POST as $var1 => $var2){
	if($_POST[$var2] == $bn){
		//echo('Palabra baneada');
	};
	
	$_POST[$var1] = tzguard($_POST[$var1]); 
};
?>
