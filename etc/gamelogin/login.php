<?php
/*======================================================================*\
|| #################################################################### ||
|| #                         Tachi Web 2.0.0                          # ||
|| # ---------------------------------------------------------------- # ||
|| #                 Copyright ©2011-2016 Amir Torrez                 # ||
|| #                   Todos los derechos reservados                  # ||
|| # ----------------           Game Login           ---------------- # ||
|| # amirtorrez@openmailbox.org                      torzap.github.io # ||
|| #################################################################### ||
\*======================================================================*/

require('../../config/config.php');
require('../../lib/sql.php');
require('../../lib/tzguard.php');

$user_id = tzguard($_GET['user_id']);
$user_pass = tzguard($_GET['user_pass']);

if($sv['MANTTO'] == 1){
	echo('4');
	die();
} else {
	$link = $sql['connect']($db['HOST'],$db['USER'],$db['PASS']) or print('Error de conexi&oacute;n a SQL');
	$sql['select']['db']($db['LOGI'],$link) or print('Error seleccionando la BD: '.$db['LOGI']);
	$Q1 = $sql['query']("SELECT * FROM Account WHERE UserID = '$user_id'",$link) or print('Error: '.$sql['error']());
	$R1 = $sql['fetch']['array']($Q1,$link) or print('Error: '.$sql['error']());

	if($R1['UserID'] != ''){
		$initial = 'etc';
		$UserID = $R1['UserID'];
		$Password = strtoupper(md5(trim($Password)));
		$initial = substr($UserID,0,1);
		$accountTAD = $sv['ACC_DIR'].'\\DBSRV\\account\\'.$initial.'\\'.$UserID.'.tad';
		if($R1['Activated'] == 1 && $sv['TADL'] == 1){
			if(!file_exists($accountTAD)){
				$userlenght = strlen(trim($UserID));
				$f1 = fopen($sv['TAD_DIR'], 'r');
				$acc = fread($f1,7124);
				$demoid = substr($acc,0,$userlenght);
				$demopass = substr($acc,52,32);
				$acc = str_replace($demoid,$UserID,$acc);
				$acc = str_replace($demopass,$Password,$acc);
				$f2 = fopen($accountTAD, 'a');
				fwrite($f2,$acc);
				fclose($f1);
				fclose($f2);
			};
		};
		if ($R1['Activated'] == 0) {
				echo('6');
				die();		
		} else {
			if($R1['Blocked'] == 1){
				echo('3');
				die();
				$todayDate = date('d/m/Y H:i:s');
				$BlockedEndDate = date('d/m/Y H:i:s',strtotime($R1['BlockedEndDate']));
				if($todayDate >= $BlockedEndDate){
					$sql['query']("UPDATE Account SET Blocked = 0, BlockedDate = NULL, BlockedEndDate = NULL, BlockedReason = NULL WHERE UserID = '$user_id'",$link) or print('Error: '.$sql['error']());
				};
			} else {
				$userPass = $R1['Password'];
				$user_pass_ok = strtolower($userPass);
				$user_pass_ok = "@".substr($user_pass_ok,0,1)."^".substr($user_pass_ok,1);
				$user_pass_ok = md5($user_pass_ok);
				if ($user_pass != $user_pass_ok){
					echo('1');
					die();
				} else {
					for($i=0;$i<$sv['AMOUNT'];$i++){
						@mkdir($sv['ACC_DIR']."\\Share\\Serv0".$i."\\new\\", 777, TRUE);
						$fp = @fopen($sv['ACC_DIR']."\\Share\\Serv0".$i."\\new\\".$R1['UserID'].".txt",'w');
						@fwrite($fp,$R1['UserID']."\r\n");
						@fwrite($fp,$R1['Password']."\r\n");
						@fwrite($fp,"000000\r\n");
						@fwrite($fp,$R1['UserKey']."\r\n");
						@fclose($fp);
					};
					echo('0');
					die();				
				};
			};
		};
	} else {
		echo('2');
		die();
	};
};
$sql['close']($link);
?>