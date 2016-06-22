<?php 
if(isSet($_GET['lang'])){
        $lang = $_GET['lang'];

        //registra sesion
        $_SESSION['lang'] = $lang;
        
        //define cookie
        setcookie('lang', $lang, time() + (3600 * 24 * 30));
        
        //busca en variables cookie y session
}else if(isSet($_SESSION['lang'])){
        $lang = $_SESSION['lang'];
}else if(isSet($_COOKIE['lang'])){
        $lang = $_COOKIE['lang'];
}else{
        $lang = ''.$Web['Lang'].'';
}

switch ($lang) {
  case 'en':
  $lang_file = 'lang.en.php';
  break;
 
  /*--mas idiomas--*/

  case 'es':
  $lang_file = 'lang.es.php';
  break;

  default:
  $lang_file = 'lang.en.php';

}

include_once 'tw-content/idiomas/'.$lang_file;
?>