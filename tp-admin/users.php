<?php	
include ('../tw-config/config.php');	

session_start(); 


if($_POST["AdmUsername"] != "" && $_POST["AdmPassword"] != "") {

  $loginusername = str_replace("'", "''", $_POST["AdmUsername"]); //anti sql injections para nws
  $loginusername = str_replace("</", "&lt/", $_POST["AdmUsername"]);
  $loginusername = str_replace("#", "&#35", $_POST["AdmUsername"]);
  $loginusername = str_replace("'", "&apos;", $_POST["AdmUsername"]);

  $loginpassword = str_replace("'", "''", $_POST["AdmPassword"]);
  $loginpassword = str_replace("</", "&lt/", $_POST["AdmPassword"]);
  $loginpassword = str_replace("#", "&#35", $_POST["AdmPassword"]);
  $loginpassword = str_replace("'", "&apos;", $_POST["AdmPassword"]);
  $loginpasswordmd5 = md5($loginpassword);

if(isset($loginusername) && isset($loginpasswordmd5)){

$result2=mssql_query("select * from AdmAccount 
  where Admin='" . $loginusername . "' and Password='" . $loginpasswordmd5 . "'");


$num2=mssql_num_rows($result2); 
}

if($num2 = 1){

  $_SESSION['admusername']= $loginusername;
  $_SESSION['admpassword']= $loginpasswordmd5;
}  
}

if (isset($_SESSION['admusername']) && isset($_SESSION['admpassword'])) {

$result=mssql_query("select * from AdmAccount 
  where Admin='" . $_SESSION['admusername'] . "' and Password='" . $_SESSION['admpassword'] . "'");


$num=mssql_num_rows($result); 

}

if($num < 1 && $_POST["txtUsername"] != "" && $_POST["txtPassword"] != ""){
$logeado = 2;
}
elseif ($num < 1) {
$logeado = 0;
}
else {
$logeado = 1;
}

switch ($logeado) {
    case 0:
include('tp-content/login/acceso.php');
        break;
    case 1:
include('tp-content/page/users.php');
        break;
    case 2:
include('tp-content/login/error.php');
        break;
}

?>
<?php echo "$login"; ?>