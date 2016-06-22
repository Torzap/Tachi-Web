<?php
$conecta = mysql_connect(SERVIDOR_MYSQL, USUARIO_MYSQL, PASSWORD_MYSQL) or die("No se ha podido conectar con el servidor MySQL. Inténtalo mas tarde.");
mysql_select_db(BASE_DATOS, $conecta);
?>
<?php
$noti1 = mysql_query("SELECT * FROM `tp_noticias` ORDER BY `id` DESC limit 10") or die (mysql_error()); 
?>

<p>
<?php
 while($noti=mysql_fetch_array($noti1)){ 
  echo '<div class="nTitulo"><a href="'.$Web['Domain'].'/?tw=noticia&url='.$noti['url'].'">'.htmlspecialchars($noti['titulo']).'</a></div><div class="nLeyenda">Publicado por:  <span class="nAutor">'.htmlspecialchars($noti['autor']).'</span> en <span class="nCategoria">'.htmlspecialchars($noti['categoria']).'</span> el '.htmlspecialchars($noti['fecha']).'</div><div class="nNoticia">'.$noti['muestra'].'<span class="nMore"><a href="'.$Web['Domain'].'/?tw=noticia&url='.$noti['url'].'">Continuar leyendo &rarr;</a></span></div><br>';
}
?>
</p>