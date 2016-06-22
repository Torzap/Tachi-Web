<?php
@include ('tw-config/conec.php');
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);
$result = mysql_query("SELECT * FROM tp_settings where id='1'");
$row = mysql_fetch_row($result);

$Web['Name'] = $row['2'];
$Web['Info'] = $row['3']; 
$Web['Domain'] = $row['1']; 
$Web['ForoLink'] = $row['4'];
$Web['SoporteLink'] = $row['5']; 
$Web['ShopLink'] = $row['10'];
$Web['Button'] = $row['8'];
$Web['Lang'] = $row['6'];
$Web['Skin'] = $row['7'];
$Server['AccDir'] = ACC_DIR;
$accdir = ACC_DIR;
?>