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
function tzguard($tzgd){
	$bn = array ("==", ">=", "<=", "!=", "];", "`", ");", "($", "['", "']", '["', '"]', "--", '")', '("', "')", "('", "\\", "';", '";', '="', "='", "&", "&&", "||", "|", "'.", '".', ".'", '."', "','", "' , '", "', '", "' ,'", '","', '" , "', '", "', '" ,"', "<?php", "<?", "</", "?>", "'", '"', "$_", "$db", "$db_", "select *", "select*", "* from", "delete from", "insert into", ") values (", ") values(", ")values (", ")values(",  "values (", "values(", ")values", ") values", "where", "alter table", "drop table", "drop database", "truncate table", "create table", "create database", "mssql_query", "mysql_query", "*from", "update", "* from", "from `", "from '", 'from "', "from`", "from'", 'from"', "_connect", "_pconnect", "mssql_", "mysql_", "select_db", "select_", "_db", "_query", "_fetch", "_array", "_num", "_rows", "_result", "information_schema", "declare", "set", "varchar", "int", "@sql", "0x", "exec", "shell", "UserLogin", "tblUserInfo", "cashBalance", "UserID", "InsertTantraItem", "TantraItem", "%s", "or 1");
	$tzgd = str_ireplace ($bn,'', $tzgd);
	return $tzgd;
}
foreach($_GET as $var1 => $var2){ 
	$_GET[$var1] = tzguard($_GET[$var1]);

	if($_GET[$var2] == $bn){
		//echo('Palabra baneada');
	};
};
foreach($_POST as $var1 => $var2){ 
	$_POST[$var1] = tzguard($_POST[$var1]); 
	
	if($_POST[$var2] == $bn){
		//echo('Palabra baneada');
	};
};
?>
