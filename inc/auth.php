<?php
/*======================================================================*\
|| #################################################################### ||
|| #                         Tachi Web 2.0.0                          # ||
|| # ---------------------------------------------------------------- # ||
|| #                 Copyright ©2011-2016 Amir Torrez                 # ||
|| #                 Todos los derechos reservados                    # ||
|| # ----------------         Autentificador         ---------------- # ||
|| # amirtorrez@openmailbox.org                      torzap.github.io # ||
|| #################################################################### ||
\*======================================================================*/

$link = $sql['connect']($db['HOST'],$db['USER'],$db['PASS']) or print('Error de conexi&oacute;n a SQL');
session_start();

$auth['user'] = isset($_POST['user']) ? $_POST['user'] : null ;
$auth['pass'] = isset($_POST['pass']) ? $_POST['pass'] : null ;

if($auth['username'] != "" && $auth['userpass'] != "") {
	if(isset($auth['username']) && isset($auth['userpass'])){		
		$Q1 = $sql['query']("SELECT UserID,Email FROM Account WHERE UserID = '".$auth['user']."' or Email = '".$auth['user']."'");
		$N1 = $sql['num']['rows']($Q1);
		$sql['free']['result']($Q1);
		
		if($N1 > 0){
			$Q2 = $sql['query']("SELECT Password FROM Account WHERE UserID = '".$auth['user']."'");
			$R1 = $sql['fetch']['array']($Q2);
			$sql['free']['result']($Q2);
			
			if($auth['pass'] != $R1['Password']){
				echo('<script>alert("La contraseña es incorrecta");</script>');
			} else {
				$_SESSION['user'] = $auth['user'];
				$_SESSION['pass'] = $auth['pass'];
			};
		} else {
			echo('<script>alert("El usuario '.$auth['user'].' no existe");</script>');
		};
	};
};

$session['user'] = isset($_SESSION['user']) ? $_SESSION['user'] : null ;
$session['pass'] = isset($_SESSION['pass']) ? $_SESSION['pass'] : null ;

if (isset($session['user']) && isset($session['pass'])) {
	$Q3 = $sql['query']("SELECT UserID,Password FROM Account WHERE UserID = '".$session['user']."' AND Password ='".$session['pass']."'");
	$N3 = $sql['num']['rows']($Q3);
	$sql['free']['result']($Q3);
};

$N3 = isset($N3) ? $N3 : null ;

if($N3 < 1 && $auth['user'] != "" && $auth['pass'] != ""){
	$auth['status'] = 2;
} elseif ($N3 < 1) {
	$auth['status'] = 0;
} else {
	$auth['status'] = 1;
};
$sql['close']($link);
?>