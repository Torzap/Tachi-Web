<?php
session_start(); 
if($_POST["txtUsername"] != "" && $_POST["txtPassword"] != "") {
  $loginusername = tzguard($_POST["txtUsername"]);
  $loginpassword = tzguard($_POST["txtPassword"]);

  $_SESSION['username'] = $loginusername;
  $_SESSION['password'] = $loginpassword;  
};

if (isset($_SESSION['username']) && isset($_SESSION['password'])) {
	$result=mssql_query("select * from Account where UserID='" . $_SESSION['username'] . "' and Password='" . $_SESSION['password'] . "'");
	$num=mssql_num_rows($result); 
};

if($num < 1 && $_POST["txtUsername"] != "" && $_POST["txtPassword"] != ""){
	$logeado = 2;
} elseif ($num < 1) {
	$logeado = 0;
} else {
	$logeado = 1;
};
?> 