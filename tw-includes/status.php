<?php
<?php
@include ('tw-config/conec.php');
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);
$result = mysql_query("SELECT * FROM tp_settings where id='1'");
$row = mysql_fetch_row($result);

$link = "".$row['9'].":3001";
$s_link = str_replace("::", ":", $link);
list($addr,$port)= explode (':',"$s_link");
if (empty($port)){
	$port = 80;
}
$churl = @fsockopen(server($addr), $port, $errno, $errstr, 4);
             if (!$churl){
			 //echo $errstr;
echo '<span class="off" title="Servidor fuera de linea!">Apagado</span>';
                }
             else {
echo '<span class="on" title="Servidor en linea!">Encendido</span>';
		  }
function server($addr){
         if(strstr($addr,"/")){$addr = substr($addr, 0, strpos($addr, "/"));}
         return $addr;
}
?>