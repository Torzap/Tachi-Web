<?php

$Body = '
 <meta name="tipo_contenido"  content="text/html;" http-equiv="content-type" charset="utf-8">
<table align="center" width="90%" style="border-style: dashed; border-width: 2px; border-color:#000000;">
	<tbody>
		<tr>
			<td align="center"><img src="http://i40.tinypic.com/34ihhli.png"><td>
		</tr>
		<tr>
<td><font style=color:#000000>
'.LANG_RMTIT.'</font><br><br>
<font style="color:#000000">
'.LANG_RMUSER.' <strong>' .$row[UserID]. '</strong> <br>
'.LANG_RMPASS.' <strong>' .$row[Password]. '</strong><br>
'.LANG_RMSECRET.' <strong>' .$row[SecretQuestion]. '</strong><br>
'.LANG_RMNAME.' <strong>' .$row[Firstname].' ' .$row[Lastname]. '</strong><br>
'.LANG_RMDATA.' <strong>' .$row[DateRegistered]. '</strong></font><br><br>'.LANG_RMPD.'</td>

		</tr>
	<tr>
		<td><font style="color:#000000">
</font><br>
<font size="1" style="color:#000000">'.LANG_RMF1.' <a href="'.$Web['Domain'].'" target="_blank">'.$Web['Name'].'</a> '.LANG_RMF2.'</font></td>
	</tr>
	</tbody></table>

';

?>