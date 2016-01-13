<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'ibeer');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '#hR zpk&=xTIS,^1,i1Rim<ep+{S(A.g?Z7h`/qaKI,9,c:C[)RZ8WD)&-J3^YbH');
define('SECURE_AUTH_KEY', '51~LmP=20V=tu5G]HD(%p#^63R#]M9jd6tP[jswlc|Ii@/*qL7^4CWvg@TJMfs6k');
define('LOGGED_IN_KEY', '6@(3[LkxB4(LOFRO;rjnuG!Ul5+[c]ICZB]l/y8*!,YU/M8/VWo$7^# z<);8$,E');
define('NONCE_KEY', '/+R D%>M^#ZzQCL;mn_`S/U}-0kzyGN/#0q1EJp|rFa Fa6MGc@K45/2kH(e@wuf');
define('AUTH_SALT', '3iG%dk!}*RfT<O83B-/<P5s:XH@lxAV%O]Z+mV `}MH.yhUeq7:`r)bTF=$>V/;p');
define('SECURE_AUTH_SALT', '?D`a0L>E^U%b}]Re:7qUX~OX?0O!dq]l|yZ%-M^V>@C_O{kgpR~,JNL`i~r<k#2%');
define('LOGGED_IN_SALT', 'zrH6{&m.)}5f:b.FQxVMM4=Qx~RKU)Lpte;2*f.2E:Qh2Y*]==rt:y`VYQ#H}hWH');
define('NONCE_SALT', 's>m]%,XRA|)4Lsf/9rib`:|GtYdc_xs7_agY9?.vu?jO `8{YwWHk(dAXaRY%LQ_');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'ib_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

