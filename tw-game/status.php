<?php
include ('functions.php');	
$link = "".$Web['IP'].":3001";
$s_link = str_replace("::", ":", $link);
list($addr,$port)= explode (':',"$s_link");
if (empty($port)){
	$port = 80;
}
$churl = @fsockopen(server($addr), $port, $errno, $errstr, 4);
             if (!$churl){
			 //echo $errstr;
echo '<font color="red">Apagado</font>';
                }
             else {
echo '<font color="green">Encendido</font>';
		  }
function server($addr){
         if(strstr($addr,"/")){$addr = substr($addr, 0, strpos($addr, "/"));}
         return $addr;
}
?>