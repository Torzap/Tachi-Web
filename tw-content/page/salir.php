<?php
session_start();

session_destroy();

header('location:index.php');
?>
<script type="text/javascript">

var pagina = 'index.php';
var segundos = 5;

function redireccion() {

document.location.href=pagina;
}
setTimeout("redireccion()",segundos);

</script>

<center> Hasta la pr&oacute;xima :3 </center>