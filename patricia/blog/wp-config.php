<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'patriciaw');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'tBLVesxkDRd4}`S|=nm{hz`2^869i:,DMY$!i3I0IUn>!B,;mNe@X)o_4[zPIGWa');
define('SECURE_AUTH_KEY',  '[O||z%ny?AArj[]Gb+P}|e6wmDD:Mq&=5j@G!&i^*!>w6sgVb]&vQb[hu^S`x7m%');
define('LOGGED_IN_KEY',    '(Ycg{| LE,WdF!>jwEtx)5)N5B-9l[%V;pi.0-+|!1VG5pXb(H+!;X|&)-(dvSg]');
define('NONCE_KEY',        '{F;$A}]+@z+5ERGt#-rvL|Aor{^mz528V[!-o-d{//Ne~-P`qUV3:ilx?U9!.G>f');
define('AUTH_SALT',        'B9]3_A+SwlaFB+f#%5v<x(rtKo=bL<?R>>J}w$H%d,BV@v~q-QrI<.{5T4!|`3@?');
define('SECURE_AUTH_SALT', 'OP+JO(^/D hHFF&|09-YW&!HII,hU}KWUG]HpF$|?ggq:6EF77- MtI.d-U2p^1.');
define('LOGGED_IN_SALT',   '7Tpe||7|X-&X9FBmZ#8y3P14_!>#c;2_{>Buoqq,76+qF<y5d9Ik`icOXE|wEACB');
define('NONCE_SALT',       'oAYt5cTkZ&@O;yGpP|!sTL<7++tX-w+,/:jMF-E-uO<<>AjqAX^5PU&ph,rw#_1r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'pw_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
