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
define('DB_NAME', 'wordpress2015');

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
define('AUTH_KEY', 'G>>ggvMDKqo5A8{:hMI-&ot[U`C)00rbO1k|e2cu)w|?X9$(-jJ|@*;[*apo#CCz');
define('SECURE_AUTH_KEY', 'r>|#-*ncXFj*#=}[4Hdg=zh-jn`@D@{^)g@P_x,Dt3WYQqdl*j{=]9%aC:KHc??_');
define('LOGGED_IN_KEY', '|/5Q%!j1/)$bs(isQ*Ang2.P~.0_Kg;50ZE^`|f,,|XmfYn@|^kn.8)BfUlH6YFk');
define('NONCE_KEY', 'L^fg0U1T QMNlCeK]4+qcyhHc5Ehc}hZ!zV6#!AL+,}FLX]vb{;S{+ZSnOvP&52R');
define('AUTH_SALT', 'eAi(]fdw4o)6ptt=TW~DZD!1u Pbt-cA`JL1pLjWY2VQfLh+VGe=SDm`GGX|hmg#');
define('SECURE_AUTH_SALT', 'H[%zIr~uGn(mSQ$kSC*YK)gl`9<d,D{roHW0R<|}~- ggCN&tYQVLYC/4DqGL/vE');
define('LOGGED_IN_SALT', '?BRDuMYa,L9Hf;F^<A{ZjJM,Q:0J,1({5`mhi/Z$jn2cq5 Z{ f1rlRY m;~h YQ');
define('NONCE_SALT', ',3It(~F%>]/ezB-U=y(oGy/B-U!=b9Yh1O{b_+#F2Sii&P{,Y.N}?m>sL+%6A;$D');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'mj_';


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

