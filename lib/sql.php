<?php
/*======================================================================*\
|| #################################################################### ||
|| #                         Tachi Web 2.0.0                          # ||
|| # ---------------------------------------------------------------- # ||
|| #                 Copyright ©2011-2016 Amir Torrez                 # ||
|| #                   Todos los derechos reservados                  # ||
|| # ----------------     Función "Motores SQL"      ---------------- # ||
|| # amirtorrez@openmailbox.org                      torzap.github.io # ||
|| #################################################################### ||
\*======================================================================*/

switch($db['TYPE']){
	case 'mssql':
		$db['SGBD'] = 'mssql';
		$sql['error'] = $db['SGBD'].'_get_last_message';
	break;
	case 'mysql':
		$db['SGBD'] = 'mysql';
		$sql['error'] = $db['SGBD'].'_error';
	break;
};

$sql['close'] = $db['SGBD'].'_close';
$sql['connect'] = $db['SGBD'].'_connect';
$sql['fetch']['array'] = $db['SGBD'].'_fetch_array';	
$sql['fetch']['assoc'] = $db['SGBD'].'_fetch_assoc';
$sql['fetch']['object'] = $db['SGBD'].'_fetch_object';
$sql['fetch']['row'] = $db['SGBD'].'_fetch_row';	
$sql['free']['result'] = $db['SGBD'].'_free_result';
$sql['num']['fields'] = $db['SGBD'].'_num_fields';
$sql['num']['rows'] = $db['SGBD'].'_num_rows';
$sql['pconnect'] = $db['SGBD'].'_pconnect';
$sql['query'] = $db['SGBD'].'_query';
$sql['result'] = $db['SGBD'].'_result';
$sql['select']['db'] = $db['SGBD'].'_select_db';
?>