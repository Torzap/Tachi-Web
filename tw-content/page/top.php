<div style="border-bottom: 1px dashed; text-align: center; font-family: Calibri;"><span class="text">Ranking de mejores personajes</span></div>
<br />
<div class="tw-ranking"><table width="80%" align="center">
					<tr>
<td>	

<table cellspacing="0" align="center" width="80%" height="30">
<tr>
<td>
<font size="2">
<form name="formulario1" method="post" action="">
<label>Dios:</label><br />
<select name="destinos1" onchange="location.href=formulario1.destinos1.value;">
<option value="?tw=top&dios=1">Brahma</option>
<option value="?tw=top&dios=4">Shiva</option>
<option value="?tw=top&dios=2">Vishnu</option>
</select>
</form>
</td>

<td>
<font size="2">
<form name="formulario2" method="post" action="">
<label>Raza:</label><br />
<select name="destinos2" onchange="location.href=formulario2.destinos2.value;">
<option value="?tw=top&tribu=4">Ashura</option>
<option value="?tw=top&tribu=8">Rakshasa</option>
<option value="?tw=top&tribu=64">Deva</option>
<option value="?tw=top&tribu=128">Garuda</option>
<option value="?tw=top&tribu=16">Yaksa</option>
<option value="?tw=top&tribu=32">Gandharva</option>
<option value="?tw=top&tribu=1">Naga</option>
<option value="?tw=top&tribu=2">Kimnara</option>
</select>
</form>
</td>
<td>
<font size="2">
<form name="formulario3" method="post" action="">
<label>Ordenar por:</label><br />
<select name="destinos3" onchange="location.href=formulario3.destinos3.value;">
<option value="?tw=top">Nivel</option>
<option value="?tw=rank">Master Points</option>
</select>
</form>
</td>
</tr>
</table>
</form>

<br>
<table width="100%" align="center" cellpadding="3">
<tr>
<td align="center"><font size="1">Rank</font></td>
<td align="center"><font size="1">Personaje</font></td>
<td align="center"><font size="1">Nivel</font></td>
<td align="center"><font size="1">BP</font></td>
<td align="center"><font size="1">Clan</font></td>
<td align="center"><font size="1">Dios</font></td>
<td align="center"><font size="1">Tribu</font></td>
</tr>

<?php
$link = mssql_pconnect(DB_HOST,DB_USER,DB_PASS);
global $link;
mssql_select_db("Tantra",$link);

function nivel($level){
	switch ($level) {
	case ($level >= 180):
		$c1 = "Astica";
		$c3 = $level-179;
		$level = $c1.$c3;
		return $level;
		break;
	case ($level >= 140):
		$c1 = "Eda";
		$c3 = $level-139;
		$level = $c1.$c3;
		return $level;	
		break;
	case ($level >= 100):
		$c1 = "Amara";
		$c2 = substr($level,1,2);
		$c3 = $c2+1;
		$level = $c1.$c3;
		return $level;
		break;
	default:
	return $level;
	break;
	}
}

if(!isset($_GET['Order'])){
$order = "CharacterLevel";
}

if($_GET['Order'] == ''){
$order = "CharacterLevel";
}

if($_GET['Order'] == 'LVL'){
$order = "CharacterLevel";
}

if($_GET['Order'] == 'BP'){
$order = "BrahmanPoint";
}

if($_GET['Order'] && $_GET['Order'] != '' && $_GET['Order'] != 'LVL' && $_GET['Order'] != 'BP'){
$order = "CharacterLevel";
}

if($_GET['Dios'] != ''){
$dios = "AND trimurity = $_GET[Dios]";
}

if($_GET['Tribe'] != ''){
$tribe = "AND tribe = $_GET[Tribe]";
}

$query = mssql_query("SELECT TOP 15 * FROM TantraBackup00 WHERE CharacterName != '' AND UserID != 'Johnam' $dios $tribe AND idx >= 0  ORDER BY CharacterLevel desc");
$i = 0;
while($row = mssql_fetch_array($query)){
$row[CharacterLevel] = nivel($row[CharacterLevel]);
$rank = $i+1;
$i += 1;
?>
<TR>
<TD style="height: 30px;" align="center"><font size="1"><?php echo "$rank"; ?></TD>
<TD style="height: 30px;" align="center"><font size="1"><?php echo $row['CharacterName']; ?></TD>
<TD style="height: 30px;" align="center"><font size="1"><?php echo $row['CharacterLevel']; ?></TD>
<TD style="height: 30px;" align="center"><font size="1"><?php echo $row['BrahmanPoint']; ?></TD>
<TD style="height: 30px;" align="center"><font size="1"><?php echo $row['GuildName']; ?></TD>
<TD style="height: 30px;" align="center"><?php if($row['Trimurity'] != '1' && $row['Trimurity'] != '2' && $row['Trimurity'] != '4'){ } else {?><img src="tw-content/images/rank/<?php echo $row['Trimurity']; ?>.gif"><?php } ?></center></td>
<TD align="center"><?php if($row['Tribe'] != '4' && $row['Tribe'] != '8' && $row['Tribe'] != '64' && $row['Tribe'] != '128' && $row['Tribe'] != '16' && $row['Tribe'] != '32' && $row['Tribe'] != '1' && $row['Tribe'] != '2'){ } else {?><img src="tw-content/images/rank/icon<?php echo $row['Tribe']; ?>.gif"><?php } ?></center></td>
</TR>
<?php } ?>
</table>

					</td>
					</tr>
					</table></div>