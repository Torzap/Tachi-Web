<?php
//ob_start();	

include ('tw-config/config.php');
include ('tw-includes/tzguard.php');
include ('tw-includes/auth.php');

include ('tw-includes/functions.php');
include_once 'tw-includes/common.php';
include('tw-content/skin/' . $Web['Skin'] . '/index.php');

//ob_end_flush();
?>