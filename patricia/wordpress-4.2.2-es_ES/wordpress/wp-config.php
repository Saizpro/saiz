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
define('AUTH_KEY',         'Sv#8h@%*gv3x-;PrDrdG`C/Wer4P|./OG#pg7F<h[xW.-@{zG-FW|6E,AFp{[om-');
define('SECURE_AUTH_KEY',  '8z/Q/IWcv{SJ>=Dv>0aUx 37c(WVNvDXajn+:yJl>(=&/$BNbxOof9yV.2RL#n*[');
define('LOGGED_IN_KEY',    '.1?*MdOo/-WFQDv#bZGwW.?`(D_>%f+<2ec@?M2--x/3EiA4E.hmH6,|ezA_A_,v');
define('NONCE_KEY',        'i@y~|aN:zfoS1@Y|psLo{(~Zfg8/LBTOa*3b>`XNC@P)uFm. M|$A&p5YHrfqeVO');
define('AUTH_SALT',        '$]%-g@J;h5,Io*smL;D5K-!S;-BZ02asM:1S*1oJy3B()w]C1uf.~d1.h{vD {&1');
define('SECURE_AUTH_SALT', ').0J&LB+b;Zd3lKV}NgH-8|$XH#L[)%I]gv%~ai:|%|q/d`m4~_iH4yYx+1cH2.$');
define('LOGGED_IN_SALT',   '23pVQ`a:yTI/5a |a&g~BBwL|(}8F-|^mG}(~:y^+`Emlx3>h$V&*)PH>L.$%FCp');
define('NONCE_SALT',       'f?EZALNjK9|FWS>^xmN.8b/Pw-Y<If#iA*p^Gg~bvw>mC&-6OSmTczWb+9qn#RE`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
