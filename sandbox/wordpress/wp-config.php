<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sandbox');

/** MySQL database username */
define('DB_USER', 'sandbox');

/** MySQL database password */
define('DB_PASSWORD', 'sandbox');

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
define('AUTH_KEY',         '(EZ-^|PZe|0?o[_9%tZgv @=2+F/bNB5_/d{ck<zPh]+|ByveT+C`F{CW[*NF[+{');
define('SECURE_AUTH_KEY',  'L*|NmvPa?MGVl~|CqN`6J9={%^$C1C _+|:o*+sD~7+?,}%D`N:fDG4pgWH@5>2K');
define('LOGGED_IN_KEY',    'ijN@hjWIj:3Iz2cT^-|,b,swI(k6u5a}xlF~+Uow@fSy0Je5JrD+x_bjlt3XhFjT');
define('NONCE_KEY',        'HN@N-L^k,cVKn.#IV(b[bA?{h{={#MAoIg9-WVsZx$bS5q&H&s-qyrnMg,iZM)nR');
define('AUTH_SALT',        'r1JqC-g}T`ViPb).@v2%wb<JP;3tD21R<3<naAfr(}4X=>4A+B1f+b4lQ`KN8Fel');
define('SECURE_AUTH_SALT', '7mQPa]JIN]W|2-+2UZwCuNq#s n`9iHiS?l1twl<*8lr1E4ohA7I2Gxfh=cm+,%l');
define('LOGGED_IN_SALT',   'vBO>ZR6AU`C]-k]Q$6ch#@>3aNcJ/Y=1s4*8Pc|:|Ka#{z7Y]usVP<C5m{I.W.Qk');
define('NONCE_SALT',       'Ku@7<8pf^}9/#~m#AzWeU;]CD>;UH61]b)*-|$<Fv:=sDhGL08m/1Qc02Lr01;z*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
