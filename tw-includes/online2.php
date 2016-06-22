<?php
$srvip = "190.79.75.154";
$srvport = "3001";

$fp = @fsockopen($srvip, $srvport, $errno, $errstr, 3);

if (!$fp)
{
#fopen($fp);
echo '<img src="imagenes/offline.jpg"  >';
}
else {
#fclose($fp);
echo '<img src="imagenes/online.jpg">';

}
?>
<div style="padding-top:5px ">
		  <strong  style="color:#66CC00; font-family:Georgia, 'Times New Roman', Times, serif; padding-left:40PX">CONECTADOS:</strong> 
<?php
$url = "http://190.79.75.154/online.php";
$rdf = parse_url($url);
        $fp = @fsockopen($rdf['host'], 80, $errno, $errstr, 15);
        if (!$fp) {
                $string = "unavailable";
        }
        if ($fp) {
                fputs($fp, "GET " . $rdf['path'] . "?" . $rdf['query'] . " HTTP/1.0\r\n");
                fputs($fp, "HOST: " . $rdf['host'] . "\r\n\r\n");
                $string        = "";
                while(!feof($fp)) {
                $stringtext = fgets($fp,300);
                $string .= chop($stringtext);
            }
            fputs($fp,"Connection: close\r\n\r\n");
            fclose($fp);

$string = strstr($string, "0nl1n3:");
$string = substr($string, 7);

		}
echo $string;
?>
