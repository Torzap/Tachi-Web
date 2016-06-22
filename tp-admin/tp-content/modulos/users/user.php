     <div class="title">Visor de cuentas</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">

<?php
if ($_POST['action'] == 'submitted')
{
$session = $_SESSION['username'];
$type = $_POST['type'];
$value = $_POST['search'];

if($type == 'Personaje'){
global $link;
mssql_select_db("Tantra",$link);
$weaA = mssql_query("SELECT * FROM TantraBackup00 WHERE Name1 = '$value' OR Name2 = '$value' OR Name3 = '$value'");
$rowA = mssql_fetch_array($weaA);

if($rowA != ''){
$rowID = $rowA['UserID'];
global $link;
mssql_select_db("UserLogin",$link);
$weaB = mssql_query("SELECT * FROM Account WHERE UserID = '$rowID' ");
$rowB = mssql_fetch_array($weaB);
}
}
else
{
if($type == 'UserID'){
$weaB = mssql_query("SELECT * FROM Account WHERE UserID = '$value' ");
}
elseif($type == 'Email'){
$weaB = mssql_query("SELECT * FROM Account WHERE Email = '$value' ");
}
elseif($type == 'RegIPAddress'){
$weaB = mssql_query("SELECT * FROM Account WHERE RegIPAddress = '$value' ");
}
elseif($type == 'idx'){
$weaB = mssql_query("SELECT * FROM Account WHERE ID = '$value' ");
}
$rowB = mssql_fetch_array($weaB);

if($rowB != ''){
global $link;
mssql_select_db("Tantra",$link);
$rowID = $rowB['UserID'];
$weaA = mssql_query("SELECT * FROM TantraBackup00 WHERE UserID = '$rowID'");
$rowA = mssql_fetch_array($weaA);
}
}

$UserID = $rowB['UserID'];
$ID = $rowB['ID'];
$key = $rowB['UserKey'];
$Email = $rowB['Email'];
$Pass = $rowB['Password'];
$TWCode = $rowB['TWCode'];
$name = $rowB['Firstname'];
$lastname = $rowB['Lastname'];
$LastLogin = "";
$RegisterDate = $rowB['DateRegistered'];
$rIP = $rowB['RegIPAddress'];
$lastname = $rowB['Lastname'];
$ActivationKey = $rowB['ActivationKey'];
$infracciones = "";

$Personaje1 = $rowA['Name1'];
$Nivel1 =  $rowA['Level1'];

$Personaje2 = $rowA['Name2'];
$Nivel2 =  $rowA['Level2'];

$Personaje3 = $rowA['Name3'];
$Nivel3 =  $rowA['Level3'];

$totalgold =  $rowA['TotalMoney'];

global $link;
mssql_select_db("billcrux_phil",$link);
$weaC = mssql_query("SELECT * FROM tblUserInfo WHERE UserID = '$rowID'");
$rowC = mssql_fetch_array($weaC);

$taneys =  $rowC['cashBalance'];
$totaltaneys = $rowC['totaltaneys'];

if($rowB != ''){
?>
<span style="font-size:12px;font-family:Tahoma;,margin-left:200px;">
<h3>User ID</h3>
<p></p>
<b>ID:</b> <?php echo $ID; ?> <br>
<b>Username:</b> <?php echo $UserID; ?> <br>
<b>Nombre:</b> <?php echo $name; ?> <?php echo $lastname; ?> <br>
<b>Email:</b> <?php echo $Email; ?> <br>
<b>Contrase&ntilde;a:</b> <?php echo $Pass; ?> <br>
<b>TWCode:</b> <?php echo $TWCode; ?> <br>
<b>Fecha de Registro:</b> <?php echo $RegisterDate; ?> <br>
<b>IP de Registro:</b> <?php echo $rIP; ?> <br>
<b>Estado:</b>
<?php
if($rowB['Blocked'] == '1'){
echo "<font color=red>Baneado</font><br>";
echo "Fecha de bloqueo: " . $rowB['BlockedDate'];
echo "<br>";
echo "Fecha de finalizado de bloqueo: " . $rowB['BlockedEndDate'];
echo "<br>";
echo "Fecha de desbloqueo: " . $rowB['UnBlockedDate'];
}
else
{
echo "Sin bannear";
}
echo "<br>";
echo "<b>Pregunta Secreta:</b> " . $rowB['SecretQuestion'];
echo "<br>";
echo "<b>Respuesta:</b> " . $rowB['Answer'];
echo "<br>";
echo "<b>Llave:</b> " . $rowB['UserKey'];
?>

<br />
<p></p>
<h3>Char 1</h3>

<b>Nombre:</b> <?php echo $Personaje1; ?> <br>
<b>Nivel:</b> <?php echo $Nivel1; ?> <br>




<p></p>
<h3>Char 2</h3>

<b>Nombre:</b> <?php echo $Personaje2; ?> <br>
<b>Nivel:</b> <?php echo $Nivel2; ?> <br>




<p></p>
<h3>Char 3</h3>

<b>Nombre:</b> <?php echo $Personaje3; ?> <br>
<b>Nivel:</b> <?php echo $Nivel3; ?> <br>


<p></p>
<h3>Cuenta</h3>


<b>Total oro:</b> <?php echo $totalgold; ?> <br>
<b>Tanys:</b> <?php echo $taneys; ?>
</span>


<?php    } else { echo "No se han encontrado resultados."; }
 } else { echo "No se ha seleccionado ningun usuario"; }?>





</td></tr></tbody></table>