<?php

// Incluímos a Classe
require_once 'class.captcha.php';

// Definimos as fontes a serem usadas nas 
// imagens por meio de um array
$aFonts =    array( 'fonts/VeraBd.ttf', 'fonts/VeraIt.ttf', 'fonts/Vera.ttf' );

// Instanciamos a classe, criando uma nova imagem

$oVisualCaptcha  =    new PhpCaptcha( $aFonts, 200, 60 );    

$oVisualCaptcha -> Create();

?>