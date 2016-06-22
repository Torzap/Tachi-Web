<div id="welcome">
<span class="username"><?php
$weaA = mssql_query("SELECT * FROM AdmAccount where Admin='" . $_SESSION['admusername'] . "'");
$rowA = mssql_fetch_row($weaA);
echo $rowA[3];
?></span>

 - <a href="salir.php" class="logout" title="Cerrar Sesi&oacute;n">Salir</a></div>