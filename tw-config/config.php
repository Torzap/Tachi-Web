<?php
/*==================================================*
||        Configuración de la base de datos        ||
||  Tachi Web 1.2.3 - amirtorrez@openmailbox.org   ||
*==================================================*/


define('DB_HOST','TORZAP'); // Servidor SQL
define('DB_USER','root'); // Usuario SQL
define('DB_PASS','toor'); // Contraseña SQL
define('ACC_DIR','C:\\Server\\DBSRV\\account'); // Ruta de las cuentas



function Conectarse()
{
global $link;
if (!($link=mssql_pconnect(DB_HOST,DB_USER,DB_PASS)))
{
exit();
}
if (!mssql_select_db("UserLogin",$link))
{
exit();
}
return $link;
}
Conectarse();
global $link1;
$link1 = mssql_pconnect(DB_HOST,DB_USER,DB_PASS);
mssql_select_db("UserLogin");
?>