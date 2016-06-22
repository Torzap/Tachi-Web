    <div id="login">
  <?php

switch ($logeado) {
    case 0:

?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  autocomplete="off">
    <input type="text" name="txtUsername" id="txtUsername" class="textarea" placeholder="<?php echo LANG_LUSUARIO; ?>">
    <br />
    <input type="password" name="txtPassword" id="txtPassword" class="textarea" placeholder="<?php echo LANG_LCONTRA; ?>">
    <br />
    <input name="submit" type="submit" class="boton" value="<?php echo LANG_LENTRAR; ?>"/><br /><a href="<?php echo ''.$Web['Domain'].''; ?>/?tw=lostpw" title="<?php echo LANG_LLOST; ?>"><span style="font-size:12px; color: Silver"><?php echo LANG_LLOST; ?></span></a>
  </form>
  <?php

        break;
    case 1:
?>
  <?php
$weaA = mssql_query("SELECT * FROM Account where UserID='" . $_SESSION['username'] . "'");
$rowA = mssql_fetch_row($weaA);
if ($rowA[15] == "1")
?>
  <div align="right" style="color: Silver; font-size:12px; font-family:Trebuchet MS; padding-right:25px;"><?php echo LANG_LHOLA; ?> <strong style="color:#66CC00"><?php echo $rowA[11]?> <?php echo $rowA[13]?></strong>!</div>
  <div style="float:left; font-size:11px; font-family:Trebuchet MS;">
<li><a href="<?php echo ''.$Web['Domain'].''; ?>/?tw=usercp"><span style="color: Silver"><?php echo LANG_LINFO; ?></span></a></li>
<li><a href="<?php echo ''.$Web['Domain'].''; ?>/?tw=debug"><span style="color: Silver"><?php echo LANG_LDEBUG; ?></span></a></li>
<li><a href="<?php echo ''.$Web['Domain'].''; ?>/?tw=editpw"><span style="color: Silver"><?php echo LANG_LEDITPW; ?></span></a></li>
<li><a href="<?php echo ''.$Web['Domain'].''; ?>/?tw=editmail"><span style="color: Silver"><?php echo LANG_LEDITMAIL; ?></span></a></li>
<li><a href="<?php echo ''.$Web['Domain'].''; ?>/?tw=delchar"><span style="color: Silver"><?php echo LANG_LUKEY; ?></span></a></li>
<li><a href="<?php echo ''.$Web['Domain'].''; ?>/?tw=salir"><span style="color: Silver"><?php echo LANG_LSALIR; ?></span></a></li></div><br /><br /><br /><br />
<br />
  <?php
        break;
    case 2:
?>
  <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"  autocomplete="off">
    <input type="text" name="txtUsername2" id="txtUsername" class="textarea" value="<?php echo LANG_LUSUARIO; ?>">
    <br />
    <input type="password" name="txtPassword" id="txtPassword" class="textarea" placeholder="<?php echo LANG_LCONTRA; ?>">
    <br />
    <input name="submit" type="submit" class="boton" placeholder="<?php echo LANG_LENTRAR; ?>"/>
  </form>
  <span class="login-text"><?php echo LANG_LERROR; ?>
  <?php
        break;
}
?>
</span>
</div>