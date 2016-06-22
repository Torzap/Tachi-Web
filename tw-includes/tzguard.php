<?php
/*======================================================================*\
|| #################################################################### ||
|| #                         Torzap Web v2.0.1                        # ||
|| # ---------------------------------------------------------------- # ||
|| #                 Copyright ©2011-2016 Amir Torrez                 # ||
|| #                   Todos los derechos reservados                  # ||
|| # ----------------       Anti inyecciones SQL     ---------------- # ||
|| #   Torzap1@gmail.com                      Amirtorrezp@gmail.com   # ||
|| #################################################################### ||
\*======================================================================*/

function tzguard($tzgd){
	$bn = array ("*", ">=", "<=", "!=", "==", "--", '"', "'", "`", "</", "%s", ",", "@sql", "0x", "exec", "declare", "update");
	$tzgd = str_replace ($bn,'', $tzgd);
	return $tzgd;
};
foreach($_GET as $var1 => $var2){
	if($_GET[$var1] == $bn){
		// something
	};
	$_GET[$var1] = tzguard($_GET[$var1]);
};
foreach($_POST as $var1 => $var2){
	if($_POST[$var1] == $bn){
		// something
	};
	$_POST[$var1] = tzguard($_POST[$var1]);
};
?>
