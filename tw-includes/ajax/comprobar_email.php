<?php 
// Que no se nos olvide incluir nuestro fichero con la conexion a la base de datos.
include("../../config/conec.php");
$email=$_REQUEST['email'];
$sql="SELECT Email FROM Account where UserID ='$email'";
$res=mssql_query($sql);
$total=mssql_num_rows($res);
if($total>0)
{ 
  // El usuario existe en la Base de Datos
  echo "<img src='images/invalid.gif'>";
}
else
{
  // Ese nick esta libre
  echo "<img src='images/valid.gif'>";
}
?>

