<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">INFORMACI&Oacute;N DE USUARIO</span></div>
<br /><br />
<div style="padding-left:40PX; padding-top:10px; font-size:14px; ">
  <?php
$weaA = mssql_query("SELECT * FROM Account where UserID='" . $_SESSION['username'] . "'");
$rowA = mssql_fetch_row($weaA);
if ($rowA[15] == "1")
	{
	$SexA = "Hombre";	}
	else
	{
	$SexA = "Mujer";
	}
if ($rowA[5] == "1")
	{
	$BlockA = "<font color='#C03'>Banneada</font>";	}
	else
	{
	$BlockA = "<font color='#6C3'>Activa</font>";
	}
?>
Cuenta: <font color='#C90'><?php echo $rowA[2]?></font> <br>

Nombre: <font color='#C90'><?php echo $rowA[11]?> <?php echo $rowA[13]?></font> <br>

Genero: <font color='#C90'><?php echo $SexA?></font> <br>

Email: <font color='#C90'><?php echo $rowA[1]?></font> <br>

Pa&iacute;s: <font color='#C90'><?php echo $rowA[19]?></font> <br>

Pregunta secreta: <font color='#C90'><?php echo $rowA[9]?></font> <br>

Fecha de registro: <font color='#C90'><?php echo $rowA[31]?></font> <br />

<br></div>
<br /><br />

<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">INFORMACI&Oacute;N DE CUENTA</span></div>

<br />
<div style="padding-left:40PX; padding-top:10px; font-size:14px;">

Estado de cuenta: <?php echo $BlockA?> <?php echo $rowA[6]?> <br /><br />

<?php
global $link;
mssql_select_db("Tantra",$link);
$weaA = mssql_query("SELECT * FROM TantraBackup00 where UserID='" . $_SESSION['username'] . "'");
$rowA = mssql_fetch_row($weaA);
?>

Personaje 1: <?php echo $rowA[11]?> (<?php echo $rowA[14]?>)</font> <br>
Personaje 2:<?php echo $rowA[12]?> (<?php echo $rowA[15]?>)</font> <br>
Personaje 3: <?php echo $rowA[13]?> (<?php echo $rowA[16]?>)</font> <br>
<br>
Rupiahs Totales: <font color='#C90'><?php echo $rowA[17]?></font> <br>
<br>
<?php
global $link;
mssql_select_db("billcrux_phil",$link);
$weaA = mssql_query("SELECT * FROM tblUserInfo where userId='" . $_SESSION['username'] . "'");
$rowA = mssql_fetch_row($weaA);
?>
Tanys: <font color='#C99'><?php echo $rowA[24]?></font> 
</div><br /><br />