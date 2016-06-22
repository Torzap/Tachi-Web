<?php
include ('tw-config/conec.php');
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);
$result = mysql_query("SELECT * FROM tp_rates where id='1'");
$rate = mysql_fetch_row($result);

$wExp = $rate['1'];
$wRuph = $rate['2'];
$wMst = $rate['3'];
$wKth = $rate['4']; 
$wSta = $rate['5'];
?>