<?php
/*======================================================================*\
|| #################################################################### ||
|| #                         Tachi Web 2.0.0                          # ||
|| # ---------------------------------------------------------------- # ||
|| #                 Copyright ©2011-2016 Amir Torrez                 # ||
|| #                 Todos los derechos reservados                    # ||
|| # ----------------     Librería de funciones      ---------------- # ||
|| # amirtorrez@openmailbox.org                      torzap.github.io # ||
|| #################################################################### ||
\*======================================================================*/

function ShowAccountInfo($var){
	$db_select(DB_LOGI);
	$AcountInfoQuery = $db_query("SELECT * FROM Account where UserID = '$SessionAccount'");
	$AcountInfoResult = $db_array($AcountInfoQuery);
	if($var == 'Blocked'){
		if (ShowAccountInfo('Blocked') == 1){
			$AcountInfoResult = '<span class="acc_ban">Baneada</span>';
		} else {
			$AcountInfoResult = '<span class="acc_unban">Activa</span>';
		};
	} else {
		$AcountInfoResult = $AcountInfoResult[$var];
	};
	return $AcountInfoResult;
};

function ShowUserTanys($var){
	@$db_select(DB_BILL);
	@$UserTanysQuery = $db_query("SELECT CashBalance FROM tblUserInfo where userId = '$SessionAccount'");
	@$UserTanysResult = $db_array($UserTanysQuery);
	return $UserTanysResult['CashBalance'];	
};

function ShowCharInfo($var){
	@$db_select(DB_TANT);
	@$CharInfoQuery = $db_query("SELECT * FROM TantraBackup00 where UserID = '$SessionAccount'");
	@$CharInfoResult = $db_array($CharInfoQuery);
	return $CharInfoResult[$var];
};

function TextGameSatus(){
	$url = DB_SVIP;
	$port = 3001;
	$chkurl = @fsockopen($url, $port, $errno, $errstr, 3);
	if (!$chkurl){
		$GameSatusResult = '<span class="off" title="Servidor fuera de linea!">Apagado</span>';
	} else {
		$GameSatusResult = '<span class="on" title="Servidor en linea!">Encendido</span>';
	};
	return $GameSatusResult;
};

function ImgGameStatus(){
	$url = DB_SVIP;
	$port = 3001;
	$chkurl = @fsockopen($url, $port, $errno, $errstr, 3);
	if (!$chkurl){
		$GameSatusResult = '<a title="Servidor fuera de linea!"><div class="off"></div></a>';
	} else {
		$GameSatusResult = '<a title="Servidor en linea!"><div class="on"></div></a>';
	};
	return $GameSatusResult;
};

function MapStatus($var){
	$HostFile = ACC_DIR.'\\current_user\\'.'serv00.htm';
	$OpenFile = fopen($HostFile, "r");
	$Content = fread($OpenFile, filesize($HostFile));
	fclose($OpenFile);
	$StatusResult = explode("\n", $Content);
	if ($StatusResult[$var-1] < 0) {
		$ResultMapstatus = '<span class="off" title="Mapa fuera de linea!">Apagado</span>';
	} else {
		$ResultMapstatus = '<span class="on" title="Mapa en linea!">Encendido</span>';
	};
	return $ResultMapstatus;
};

function CharsOnMap($var){
	$HostFile = ACC_DIR.'\\current_user\\'.'serv00.htm';
	$OpenFile = fopen($HostFile, "r");
	$Content = fread($OpenFile, filesize($HostFile));
	fclose($OpenFile);
	$OnlineResult = explode("\n", $Content);
	if ($OnlineResult[$var-1] < 0) {
		$ResultCharsOn = 0;
	} else {
		$ResultCharsOn = $OnlineResult[$mapa];
	};
	return $ResultCharsOn;
};

function CharsOnline(){
	$HostFile = ACC_DIR.'\\current_user\\'.'serv00.htm';
	$OpenFile = fopen($HostFile, "r");
	$Content = fread($OpenFile, filesize($HostFile));
	fclose($gestor);
	$OnlineResult = explode("\n", $Content);
	$ResultCharsOn = 0;
	for ($i=0; $i<50; $i++) {
		if ($OnlineResult[$i] >= 0) {
			$ResultCharsOn = $ResultCharsOn + $OnlineResult[$i];
		};
	};
	return $ResultCharsOn;
};

function TadWrite($var){
	return hex2bin(cd2save($var));
};

function TadRead($var){
	return cd2(bin2hex($var));
};

function OpenTad($var){
	$accdir = ACC_DIR;
	$ini=substr($var,0,1);
	if (ereg("^[a-zA-Z]$",$ini)){$initial=strtoupper($ini);}
	else{$initial="etc";}
	$actantra = fopen($accdir."\\DBSRV\\account\\".$initial."\\".$var.".TAD",r);
	$acc3 = fread($actantra,7124);
};

function FormatLevel($var){
	if($var > 99 && $var < 140){
		$ResulLevel = 'Amarah '.($var-99);	
	} elseif($var > 140 && $var < 180){
		$ResulLevel = 'Eda '.($var-140);		
	} elseif($var > 179){
		$ResulLevel = 'Astica '.($var-179);	
	} else {
		$ResulLevel = $var;
	};
	return $ResulLevel;
};

function FormatGod($var){
	$God = TadRead($var);
	if($God == 1){ $ResultGod = 'Brahma'; }
	elseif($God == 2){ $ResultGod = 'Vishnu'; } 
	elseif($God == 4){ $ResultGod = 'Shiva'; }
	else { $ResultGod = 'Ninguno'; }
	return $ResultGod;
};

function FormatTribe($var){
	$Tribe = TadRead($var);
	if($Tribe == 1){ $ResultTribe = 'Naga'; }
	elseif($Tribe == 2){ $ResultTribe = 'Kimnara'; }
	elseif($Tribe == 4){ $ResultTribe = 'Ashura'; }
	elseif($Tribe == 8){ $ResultTribe = 'Rakshasa'; }
	elseif($Tribe == 16){ $ResultTribe = 'Yaksa'; }
	elseif($Tribe == 32){ $ResultTribe = 'Gandharva'; }
	elseif($Tribe == 64){ $ResultTribe = 'Deva'; }
	elseif($Tribe == 128){ $ResultTribe = 'Garuda'; }
	else{ $ResultTribe = 'GM'; }
	return $ResultTribe;
};

function FormatJob($var1,$var2){
	$var1 = TadRead($var1);
	$var2 = TadRead($var2);
	if($var1 == 2) {
		if($var2 == 0){ $ResultJob = "Satya"; }
		elseif($var2 == 1){ $ResultJob = "Banar"; }
		elseif($var2 == 2){ $ResultJob = "Druka"; }
		elseif($var2 == 3){ $ResultJob = "Karya"; }
		elseif($var2 == 4){ $ResultJob = "Nakayuda"; }
		elseif($var2 == 5){ $ResultJob = "Vidya"; }
		elseif($var2 == 6){ $ResultJob = "Abikara"; }
		elseif($var2 == 7){ $ResultJob = "Samabat"; }
	} else { $ResultJob = "Mantrika"; }
	return $ResultJob;
};

function FormatZone($var){
	$Zone = TadRead($var);
	if($Zone == 1){ $ResultZone = 'Mandara'; }
	elseif($Zone == 2){ $ResultZone = 'Shambala'; }
	elseif($Zone == 3){ $ResultZone = 'Calabozo Mandara 1st'; }
	elseif($Zone == 4){ $ResultZone = 'Calabozo Mandara 2nd'; }
	elseif($Zone == 5){ $ResultZone = 'Calabozo Shamabala 1st'; }
	elseif($Zone == 6){ $ResultZone = 'Calabozo Shambala 2nd'; }
	elseif($Zone == 7){ $ResultZone = 'Jina'; }
	elseif($Zone == 8){ $ResultZone = 'Planicie Pamir'; }
	elseif($Zone == 9){ $ResultZone = 'Exilio'; }
	elseif($Zone == 10){ $ResultZone = 'Kruma'; }
	elseif($Zone == 11){ $ResultZone = 'Chaturanga'; }
	elseif($Zone == 12){ $ResultZone = 'Tumba del emperador'; }
	elseif($Zone == 13){ $ResultZone = 'Kalia Nivel Bajo'; }
	elseif($Zone == 14){ $ResultZone = 'Kalia Nivel Medio'; }
	elseif($Zone == 15){ $ResultZone = 'Kalia Nivel Alto'; }
	elseif($Zone == 16){ $ResultZone = 'Fortaleza Durga'; }
	elseif($Zone == 17){ $ResultZone = 'Biryu'; }
	elseif($Zone == 18){ $ResultZone = 'Mandara Bizarre'; }
	elseif($Zone == 19){ $ResultZone = '?'; }
	elseif($Zone == 20){ $ResultZone = 'Anaka Kruma'; }
	elseif($Zone == 21){ $ResultZone = 'Mudha'; }
	elseif($Zone == 22){ $ResultZone = 'Forge'; }
	elseif($Zone == 23){ $ResultZone = '?'; }
	elseif($Zone == 24){ $ResultZone = 'Ruins'; }
	elseif($Zone == 25){ $ResultZone = 'Vedi Kruma'; }
	elseif($Zone == 26){ $ResultZone = 'Naga Village'; }
	elseif($Zone == 27){ $ResultZone = '?'; }
	elseif($Zone == 28){ $ResultZone = 'Naga Dungeon'; }
	elseif($Zone == 29){ $ResultZone = '?'; }
	elseif($Zone == 30){ $ResultZone = '?'; }
	elseif($Zone == 31){ $ResultZone = 'Marana 1st'; }
	elseif($Zone == 32){ $ResultZone = 'Marana 2nd'; }
	elseif($Zone == 33){ $ResultZone = 'Paroksya'; }
	elseif($Zone == 34){ $ResultZone = 'Dragon Cave'; }
	elseif($Zone == 35){ $ResultZone = '?'; }
	else { $ResultZone = 'Bug'; }
	return $ResultZone;
};
function randomString($length,$lt,$uc){
	$source = '1234567890';
	if($lt==1){$source .= 'abcdefghijklmnopqrstuvwxyz';}
	if($uc==1){$source .= 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';}
	if($length>0){
		$rstr = "";
		$source = str_split($source,1);
		for($i=1; $i<=$length; $i++){
			mt_srand((double)microtime () * 1000000);
			$num = mt_rand(1,count($source));
			$rstr .=$source[$num-1];
		};
	};
	return $rstr;
};
?>