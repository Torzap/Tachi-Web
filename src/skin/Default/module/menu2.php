<form method="post" action="" class="menu2">
	<select name="option" onchange="location=value;mnu(value);">
		<option selected disabled>Men&uacute; del sitio...</option>
		<option value="#home">Home</option>
		<option value="#descargas">Descargas</option>
		<option value="#registro">Registro</option>
		<option value="#top">Ranking</option>
		<option value="<?php echo($wb['FORUM']);?>">Foro</option>
		<option value="<?php echo($wb['SUPPORT']);?>">Soporte</option>
	</select>
</form>