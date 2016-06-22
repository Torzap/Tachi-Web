<?php
$title1 = 'Recuperar contrase&ntilde;a';
$ID = str_replace("'", "''", $_POST["txtID"]); 
if ($_POST['action'] == 'submitted'){

$result = mssql_query("select * from Account where UserID='" . $ID . "'");

while ($row = mssql_fetch_array($result))

{
if($row[UserID] != ""){
$Email = $row[Email];
$recpass = "<br /><b>Se han enviado sus datos al correo con el que registro la cuenta!.</b>";
		// **ENVIO DE EMAIL**
		$asunto= "¡Recuperación de su Contraseña!";
		include('tw-includes/mailrecpass.php');
		include('tw-includes/registro-email.php');

}
}
$contenido = '
	<table align="center" width="90%" height="150" border="0" cellspacing="3">
  <tr>
	<td><font size="2">Para poder Recuperar su contrase&ntilde;a debera escribir el nombre de su cuenta, y se le enviara un email al correo electronico con el que registro dicha cuenta.<br><br><Strong>Nota:</strong> Recomendamos revisar su bandeja de correo electronico no deseado.</font>
<br /><br />
<div class="tw-lostpw"><form method="post" action="?tw=lostpw">
<center><input type="hidden" name="action" value="submitted">
<label>Nombre de la cuenta :</label><br>
<input type="text" name="txtID" id="txtUsername" style="width:30%"><br><br>

<input type="submit" name="submit" value="Enviar" style="width:80px; height:25px;" class="boton">
</center>	</form></div>'.$recpass.'</td></tr></table>	
';

$copy = "Tachi web 1.2.1, &copy; 2012 por John Am Torres.";
@include('tw-includes/ctemplate.php');
}else
{
$contenido = '
	<table align="center" width="90%" height="150" border="0" cellspacing="3">
  <tr>
	<td><font size="2">Para poder Recuperar su contrase&ntilde;a debera escribir el nombre de su cuenta, y se le enviara un email al correo electronico con el que registro dicha cuenta.<br><br><Strong>Nota:</strong> Recomendamos revisar su bandeja de correo electronico no deseado.</font>
<br /><br />
<div class="tw-lostpw"><form method="post" action="?tw=lostpw">
<center><input type="hidden" name="action" value="submitted">
<label>Nombre de la cuenta :</label><br>
<input type="text" name="txtID" id="txtUsername" style="width:30%"><br><br>
		&nbsp;&nbsp;<input type="submit" name="submit" value="Enviar" style="width:80px; height:25px;" class="boton"></center>
		</form></div>'.$recpass.'</td></tr></table>	
';
$copy = "Tachi web 1.2.1, &copy; 2012 por John Am Torres.";
@include('tw-includes/ctemplate.php');
}
?>