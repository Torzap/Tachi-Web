<?php
include ('tw-config/conec.php');
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);
$result = mysql_query("SELECT * FROM tp_conec where id='1'");
$row = mysql_fetch_row($result);

$SMTP['UserGmail'] = $row['1'];
$SMTP['PassGmail'] = $row['2'];
$SMTP['UserEMail'] = $row['3'];
$SMTP['RemEMail'] = $row['4'];

$SMTPUser = $row['1']; //Usuario GMail o cuenta POP3
$SMTPPass = $row['2']; //Password
$SMTPEmail = $row['3']; //Email del Remitente
$SMTPName = $row['4']; //Nombre del Remitente
?>