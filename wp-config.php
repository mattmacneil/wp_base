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
define('AUTH_KEY',         'Pv|SB<2nc+i=Gx6_:qCiKX/#D7 *l!ZGB]!,!<VFK}z)*kY@|C*A2+UVVEdQ!e?>');
define('SECURE_AUTH_KEY',  'l+uf`*NhN-Srx_|<=w810Q&l?(,$JnXl|si{X`&2Q4&doEXVrw 39x^<hAL40$pW');
define('LOGGED_IN_KEY',    '(x,q:nvy{XNk5-UT<pq*:^^74?v%`*+v$>T[]}];8(+-)lH;>&r+=Hhwnm?}Ot>8');
define('NONCE_KEY',        '}d#qFUVpd)UlcEi8g*Fo#DA1I@I!_Zi-_HE7x]Dy?+Fb6-3^-h3A^j]Pm`j_&<lt');
define('AUTH_SALT',        'fulgCz&>l.* 8?+X7OAY2.|_3)7z9qD+tlDr8HHe>,{2@AcwmCEW1f*`Ud>R}+ZZ');
define('SECURE_AUTH_SALT', 'Ce$ymN<q=Sa9jY:{N7P`M/_zl {s@nX&G[;:9ha7H`==,.7W|G2W(n7)`+HfX#<(');
define('LOGGED_IN_SALT',   ';@v779y{2#BNsbu_*W&y,8WQ4(TNPj%yPb{-p7n`%+Iu {88dB92w=L7.bx/`%Rd');
define('NONCE_SALT',       'J}<hOu<b<VyY+EP+OaQKbL:,kvgF.#M|YJ-TqDw3WNPC}>kxvPPY#-w+jt,%o,GM');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mm69_';

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
