<div class="title">Edici&oacute;n del template</div>
<table class="general form_container " cellspacing="0"><tbody>
<tr id="row_setting_ForumsRequirements_body" class="alt_row"><td class="first">
<SCRIPT> 
function SelectText(begin, end) { 

  ta = document.getElementById("texto"); 

  if (ta.createTextRange) { 
    tr = ta.createTextRange(); 

    //tr.findText("something"); 

    tr.move("character", begin); 
    tr.moveEnd("character", end-begin); 

    tr.select(); 

  } else if (ta.setSelectionRange) { 

     ta.setSelectionRange(begin, end); 

  } 
} 
</SCRIPT>

<?php
include ('../tw-config/conec.php');
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
global $link;
mysql_select_db(BASE_DATOS,$link);
$result = mysql_query("SELECT * FROM tp_settings where id='1'");
$row = mysql_fetch_row($result);

echo "<center><span style='font-size:14px;'>Template: <b>$row[7]</b></span></center>";

$fichero = "../tw-content/skin/$row[7]/index.php";
$texto = $_POST["texto"];
if($texto != ''){
   if($fp = fopen($fichero,"w+")){
      fwrite($fp,stripslashes($texto));
      echo '<div id="correct">
Los datos se han actualizado correctamente</div><br><br>';
   }
   fclose($fp);
}
$fp = fopen($fichero,"r"); 
$contenido = fread ($fp, filesize ($fichero));
fclose($fp);
echo "<form method='POST'><textarea id='texto' name='texto' style='width:100%; height:600px;'>$contenido</textarea><br><br /><center>
<ul style='word-spacing: 5px;'>
<li class='textmenu'><input type='Submit' id='login-submit' value='Guardar' ></li>
<li class='textmenu'><input type='button' onClick='SelectText(0,1000000)' Value='Seleccionar' id='login-submit' ></li>
</ul>
</center>
</form>
</p>";
?>
<?php
?>
</td></tr></tbody></table>