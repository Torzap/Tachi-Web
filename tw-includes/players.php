<?php
include ('config/config.php');	
include ('config/conec.php');	
include_once 'common.php';
include ('auth.php');	
?>
Players Online: <b><?php
$url = "http://".$Web['Domain']."/online.php";
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
?></b>