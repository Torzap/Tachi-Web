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

if($_POST['action'] == 'Check'){
	if($_POST['user'] != '' && $_POST['pass'] != ''){
		$pass = strtolower($_POST['pass']);
		$pass = "@".substr($pass,0,1)."^".substr($pass,1);
		$pass = md5($pass);
		echo("<script type='text/javascript'>var pagina = 'http://".$_SERVER["SERVER_NAME"]."/etc/gamelogin/login.php?user_id=".$_POST['user']."&user_pass=".$pass."';var segundos = 1;function redireccion() {document.location.href=pagina;}setTimeout('redireccion()',segundos);</script>");
	}
}
?>
<!Doctype html><html>
<head>
    <meta charset="utf-8">
	<title>GameLogin Account Checker</title>
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Amir Torrez - amirtorrez@openmailbox.org">
    <meta name="description" content="A script for test the gamelogin">
	<style>
	body{font:12px Verdana;}
	form{text-align:center;padding:50px;}
	input,div{margin-top:1%;}
	label{font-weight:bold;}
	input[type="text"]{padding:.5%;width:250px;height:20px;border:1px solid #ccc;border-radius:4px;font-size:11px;}
	input[type="submit"]{margin-top:2.5%;padding:.5%;width:100px;border:1px solid #999;border-radius:4px;}
	</style>
</head>
<body>
	<form method="POST">
		<div>
			<label>User:</label><br>
			<input type="text" class="input" name="user" required="required">
		</div>
		<div>
			<label>Password:</label><br>
			<input type="text" class="input" name="pass" required="required">
		</div>
		<input type="submit" class="button" name="action" value="Check">
	</form>
</body>
</html>