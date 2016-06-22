     <div class="title">Noticias STTantra web</div>
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

<p><?php
$fichero = "../tw-game/event.php";
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
echo "<form method='POST'><textarea id='texto' name='texto' style='width:100%; height:400px;'>$contenido</textarea><br><br /><center>
<input type='Submit' id='login-submit' value='Guardar'>
</center>
</form>";
?></p>

</td></tr></tbody></table>