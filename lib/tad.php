<?php
function cd2($cadena){
	$c1 = substr($cadena,0,2);
	$c2 = substr($cadena,2,2);
	$cadena2 = $c2.$c1;
	$cadena21 = base_convert($cadena2, 16, 10);
	return $cadena21;
};
function cditem($cadena){
	$cadenaresult =  cd2(bin2hex($cadena));
	return $cadenaresult;
};
function cditemid($cadena){
	$cadenaresult =  cd2(bin2hex($cadena));
	if ($cadenaresult == 0) {
		$cadenaresult = "(Vacio)"; 
	} else {
		$cadenaresult = $cadenaresult+4000;
	};
	return $cadenaresult;
};
function cd4($cadena){
	$c1 = substr($cadena,0,2);
	$c2 = substr($cadena,2,2);
	$c3 = substr($cadena,4,2);
	$c4 = substr($cadena,6,2);
	$cadena2 = "".$c4."".$c3."".$c2."".$c1."";
	$cadena21 = base_convert($cadena2, 16, 10);
	return $cadena21;
};
function cd4save($cadena){
	$cadena1 = base_convert($cadena, 10, 16);
	$long = strlen($cadena1);
		switch($long) {
			case 1:
				$cc = substr($cadena1,0,1);
				$c4 = "0".$cc;
				$c3 = "00";
				$c2 = "00";
				$c1 = "00";			
			break;
			case 2:
				$c4 = substr($cadena1,0,2);
				$c3 = "00";
				$c2 = "00";
				$c1 = "00";
			break;
			case 3:
				$c1 = substr($cadena1,0,1);
				$c2 = substr($cadena1,1,2);
				$c3 = "00";
				$c4 = "00";
			break;
			case 4:
				$c1 = substr($cadena1,0,2);
				$c2 = substr($cadena1,2,2);
				$c3 = "00";
				$c4 = "00";
			break;
			case 5:
				$c1 = substr($cadena1,0,2);
				$c2 = substr($cadena1,2,2);
				$cc3 = substr($cadena1,4,1);
				$c3 = $cc3."0";
				$c4 = "00";
			break;
			case 6:
				$c1 = substr($cadena1,0,2);
				$c2 = substr($cadena1,2,2);
				$c3 = substr($cadena1,4,2);
				$c4 = "00";
			break;
			case 7:
				$c1 = substr($cadena1,0,2);
				$c2 = substr($cadena1,2,2);
				$c3 = substr($cadena1,4,2);
				$cc4 = substr($cadena1,6,1);
				$c4 = $cc4."0";
			break;
			case 8:
				$c1 = substr($cadena1,0,2);
				$c2 = substr($cadena1,2,2);
				$c3 = substr($cadena1,4,2);
				$c4 = substr($cadena1,6,2);
			break;
		};

	$cadena2 = $c4.$c3.$c2.$c1;
	return $cadena2;
};
function cd2save($cadena){
	$cadena1 = base_convert($cadena, 10, 16);
	$long = strlen($cadena1);
		switch($long) {
			case 1:
				$cc = substr($cadena1,0,1);
				$c2 = "0".$cc;
				$c1 = "00";
			break;
			case 2:
				$c2 = substr($cadena1,0,2);
				$c1 = "00";
			break;
			case 3:
				$c1 = substr($cadena1,0,1);
				$c2 = substr($cadena1,1,2);
			break;
			case 4:
				$c1 = substr($cadena1,0,2);
				$c2 = substr($cadena1,2,2);
			break;
		};

	$cadena2 = $c2.$c1;
	return $cadena2;
};
function cd2save1($cadena){
	$cadena1 = base_convert($cadena, 10, 16);
	$long = strlen($cadena1);
		switch($long) {
			case 1:
				$cc = substr($cadena1,0,1);
				$c2 = "0".$cc;
			break;
		};

	$cadena2 = $c2;
	return $cadena2;
};
function hex2bin($str) {
     $bin = "";
     $i = 0;
     do {
         $bin .= chr(hexdec($str{$i}.$str{($i + 1)}));
         $i += 2;
     } while ($i < strlen($str));
     return $bin;
 };
?>