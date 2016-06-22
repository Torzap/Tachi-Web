<center><?php
include ('tw-config/conec.php');
$link = "".$Server['IP'].":3001";
$s_link = str_replace("::", ":", $link);
list($addr,$port)= explode (':',"$s_link");
if (empty($port)){
	$port = 80;
}
$churl = @fsockopen(server($addr), $port, $errno, $errstr, 4);
             if (!$churl){
			 //echo $errstr;
echo '<a title="Servidor fuera de linea!"><div class="off"</a>';
                }
             else {
echo '<a title="Servidor en linea!"><div class="on" />';
		  }
function server($addr){
         if(strstr($addr,"/")){$addr = substr($addr, 0, strpos($addr, "/"));}
         return $addr;
}
?>
</center>