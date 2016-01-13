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
define('DB_NAME', 'wordpress');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', '');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY', '2Ohoi2<QN?[zJGK6daOrdcRKBa+;%/h-:^</LVre]0@;:=s!`^aUS3gS$L|-]T%m');
define('SECURE_AUTH_KEY', '<I+Z+8+|tp?&EVW+|g08BXv_nM:|RZx@+/|mVWs3:c3VQs3yPP>Z/z7+WFb0#qwj');
define('LOGGED_IN_KEY', 'bI>+a5e+Q(#^; !psq.=)1f87-CDB)1#?)9NxazbyC1[:B|S08Y,.RS|JE Pg@_J');
define('NONCE_KEY', ']}r5cg~FiY489)kQ `?%vm|/$!GV!l}T.o@x|WPl&&=)|/b-.91kGZ_|u=#oZL-f');
define('AUTH_SALT', 'hpEiyQI@ZZfKe,?7(;jz;d_TL2p@J:|)Ag~/dgFtU;>9:Be@&--ueVtI|dgI-$wV');
define('SECURE_AUTH_SALT', 'A`9{-)}Q4#Xbi3eV-(|5{~F)(jT5^xdoHJwB*Y))usi@s!|Sk3-m`FYt+$z{sXD-');
define('LOGGED_IN_SALT', 'bQ8VNj7Fz%)07W# 5cP6`FV_$26X%U2G1@,_`LAD&XhW$+ Xp}|t)z=L9X,-!d!%');
define('NONCE_SALT', 'W|TnT4u)Lg1#Kd$C4|j@1659Yn<2vb|h%_MrDS[Ey?u+DkdJO9b,#6|j0$*2 :a8');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


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

