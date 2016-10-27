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
define('DB_NAME', 'wp_enigmablog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '4646');

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
define('AUTH_KEY',         '<6+>>ILDJ|mH#y:.!%F&(mfd).#%{*_b+lGz{++/kw$.lV89bEM>^+rvOE!9jO59');
define('SECURE_AUTH_KEY',  'DIn/uPaW.1ffvdl%k5]L_`XifuRiftS+JK}lOI/n@dv79ltF*VJ[RGzW&M`znC;Q');
define('LOGGED_IN_KEY',    '.bB{E*pX{;Cyk[$/GW:P`0hgk<BEgZ&%{e+#u3]Yrllo-^uk&QHhP@crkpZpfCga');
define('NONCE_KEY',        'ua;ySFs!;qJ{kgz=;wtKa T^P%x#6MFwf0U+EcI^7f$N-F{2L`lwFrN3LL_43P8<');
define('AUTH_SALT',        '{V1LQE}{uF1&VlX._<FLU4Li2u@_$`0bcs%D4tE)-K_,$;q+w(f}/;iC7WXK<KyB');
define('SECURE_AUTH_SALT', '7)[pGY.~#$NO+!WFfV1L^hs*]G&c83,Pgtiw*vMbuI bl=fRDYMDZt6S@OjtKx;3');
define('LOGGED_IN_SALT',   'H3@{(n+L|q3{=iI@?w`j5c:n^8-Piey}{ie++gA!6?)A@d@Bx|$Sty9z1_jev0>c');
define('NONCE_SALT',       'Z!ywic4KVESrdOCfkAH2r9~HQFnhj0}q~bXkVlKF>|eW|bU~kC+8t-}wg7(-bn73');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
