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
define('DB_NAME', 'mjwordpress');

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
define('AUTH_KEY', '[syjSv3*lo>sy_v9U9%B-[^[[/>qdA>a:;l`]dW Qy~tL)f?X5#)$%.(s.Zi>kmi');
define('SECURE_AUTH_KEY', 'RiKz(?,vQd[vH;!L^2>80pe+#u?qG/}Yq9!6}ekeW[1| %b0#[{. Lv]Ux7#w##B');
define('LOGGED_IN_KEY', '[(b^T+o5d,Zd=Uf..8o2:0D!:zqk3R$<TI_QmbS_Xt kv?@.XQp.G&U89[p;N.ry');
define('NONCE_KEY', '2W^+CssHx %zk$!tfHNDL(1I}af8EP,KOyyFX[{C<prvOnNLx.A X?Au+DXTn5tk');
define('AUTH_SALT', '3ZPx;?5DDror@[._onE=Rb3P;cus3w@B0OL~[,7Rj;~F(Q,&%[=}~u<VP%2S-P{$');
define('SECURE_AUTH_SALT', '&?YNAKDz?AzptQE;e|f3Y$cs/+B[yi;C@=O[G4j0Q +e##b=NE$weSTrPqnNv@Hj');
define('LOGGED_IN_SALT', 've Vy/ZI<&pj!qm!SOc7*gdZk8Lk#k!#*6`J4xAjQQ`_BK/:*<g2bAF/*C0)OqKh');
define('NONCE_SALT', 'f2!W>jzAd{bO@l[H*< k~V{&i,}V0N3(mDP3JRsz;2OcEM,?$lV@B6 Q2o%_z=gX');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wpmj_';


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

