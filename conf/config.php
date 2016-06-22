<?php
/*======================================================================*\
|| #################################################################### ||
|| #                         Tachi Web 2.0.0                          # ||
|| # ---------------------------------------------------------------- # ||
|| #                 Copyright ©2011-2016 Amir Torrez                 # ||
|| #                   Todos los derechos reservados                  # ||
|| # ----------------        Configuraciones         ---------------- # ||
|| # amirtorrez@openmailbox.org                      torzap.github.io # ||
|| #################################################################### ||
\*======================================================================*/

/* Conexión SQL */
$db['HOST'] = 'Torzap\\SQLEXPRESS'; // Servidor del SQL
$db['USER'] = 'sa'; // Usuario del SQL
$db['PASS'] = '123'; // Contraseña del SQL
$db['TYPE'] = 'mssql'; // Tipo de motor de base de datos, MySQL ó MsSQL

/* Bases de datos */
$db['TRZP'] = 'TorzapWeb'; // Nombre de la base de datos del Admin Panel
$db['BILL'] = $db['TRZP']; // Nombre de la base datos BILL_CONN
$db['TANT'] = $db['TRZP']; // Nombre de la base datos TantraGM
$db['LOGI'] = $db['TRZP']; // Nombre de la base datos UserLogin

/* Auto debug */
$wb['RESET_Z'] = 1; // Zona de envio al usar autodebug
$wb['RESET_X'] = 489; // Coordenada en X de la ubicacion
$wb['RESET_Y'] = 193; // Coordenada en Y de la ubicacion

/* Servidor */
$sv['NAME'] = 'Tantra Test'; // Nombre del servidor
$sv['SVIP'] = '25.2.164.164'; // Dirección IP del servidor
$sv['AMOUNT'] = 1; // Cantidad de servidores
$sv['MANTTO'] = 0; // 0 Si el servidor está abierto o 1 si está cerrado o mantenimiento
$sv['ACC_DIR'] = 'E:\\John\\Tantra Online\\Server'; // Ruta de la carpeta del servidor

/* Gamelogin */
$sv['TAD_DIR'] = '/etc/base.tad'; // Ruta de la cuenta base para crear los tad
$sv['TADL'] = 0; // 1 activar, 0 desactivar creacion de tad con gamelogin

/* Ranking */
$rk['NOUSER'] = explode(',', "Tandev01,Amir,Torzap"); // Cuentas de usuario a ocultar del rankin

/* Web */
$wb['TIME'] = 'America/Mexico_City'; // Zona horaria del servidor: http://php.net/date.timezone
$wb['SKIN'] = 'Default'; // Tema a usar (ubicado en /src/skin/)
$wb['ADMIN']['NAME'] = 'Amir Torrez'; // Administrador de la web
$wb['ADMIN']['MAIL'] = 'amirtorrez@openmailbox.org'; // Email de contacto del administrador
$wb['FORUM'] = '#'; // Url del foro o comunidad
$wb['SUPPORT'] = '#'; // Url del sitio de asistencia

$wb['SELECT'] = 'false'; // false desbloquea, true bloquea seleccionar texto
$wb['CLICK'] = 'true'; // false desbloquea, true bloquea click derecho
$wb['DRAG'] = 'false'; // false desbloquea, true bloquea arrastrar contenido

/* Rates */
$sv['EXP'] = 'x10'; // Rate de experiencia
$sv['GOLD'] = 'x1'; // Rate de oro/rupiahs
$sv['MP'] = 'x1'; // Rate de pundos dios/master points

?>