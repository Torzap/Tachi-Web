<?php
$id=$_GET[url];
$link = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL);
mysql_select_db(BASE_DATOS,$link);

$result = mysql_query("select * from tp_noticias where url='$id'");
$row = mysql_fetch_row($result);
?>
<p>
<?php
  echo '<div class="nTitulo">'.htmlspecialchars($row['1']).'</div>
<div class="nLeyenda">Publicado por:  <span class="nAutor">'.htmlspecialchars($row['3']).'</span> en <span class="nCategoria">'.htmlspecialchars($row['2']).'</span> el '.htmlspecialchars($row['6']).'</div>
<div class="nNoticia">'.$row['5'].'</div>';
?> 
</p>