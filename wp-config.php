<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'basewp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'NWIT?).*6S4Y@%.3rS<Cix_ZEB_s+H(60?:G{McbLR2V)-8WHqV;d2/0}c3n?Z:S');
define('SECURE_AUTH_KEY',  'W=9mUv;ura-[W@aaS-bh]1C3bZTsx0gv+bbx)r[g(oVKPIyjt|1TIC1y_W`es9gZ');
define('LOGGED_IN_KEY',    '%i=OO0Y#:Ot 5V(jw{|aFS_dTQDf,~KEUhz8I3| z3<qwO8](Y0t^|T9U*wV}9P0');
define('NONCE_KEY',        '$K&%6Vii|<q>_N-yg:?o~sn?tC0.m)RmXCm{KvN@/B)iu #PDKPX?$((6k!RM%lD');
define('AUTH_SALT',        '>~e5]0MX)n0~a!}&X9;&o?HB[|_;AXqT#%3^-J$#1?SHUh#I=w)< PG#&A$!Qkxu');
define('SECURE_AUTH_SALT', 'S_DG7b[gZmkXdP4dc/yj;7#L-QcAV|f_Y;<u#KEJ}+DOL )4*mq3vJ8oYUw!uf:U');
define('LOGGED_IN_SALT',   '}L+rK}/~oEjugIIgw<E:X6V%PQn5jlp*,mF<Ak$Rl<HUh40+ySIkx <4~5T$!s%.');
define('NONCE_SALT',       'qh^1,kN)oaHf3gk|B`YQU~QIV7*+xVI_MFaa+jPC&HK&^$3[86N>LaEA5@t=fb6s');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
