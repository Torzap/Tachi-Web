<?php
include ('../tw-config/conec.php');
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);
$result = mysql_query("SELECT * FROM tp_sttantra where id='1'");
$row = mysql_fetch_row($result);

$Web['Title'] = $row['1'];
$Web['Name'] = $row['2']; 
$Web['Domain'] = $row['1']; 
$Web['IP'] = $row['3'];
$Web['Button'] = $row['4'];
?>