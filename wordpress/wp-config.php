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
define('DB_NAME', 'projetowp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'K,y:y@~QWB#>h3u2MN&8*qm4BX1waM@c~!eMr_Y1}1WZQ^?|`cty4*Ts$X8F.a~&');
define('SECURE_AUTH_KEY',  'b$?:;`_SHWqe*`V@=#-#f*3P;Dc+,l5lB8phe>kSwg};6L#U+CNnXo0,*ijbyy.>');
define('LOGGED_IN_KEY',    'Ms(`Y)WY,UqV7r8pJSWf<~guObD3:6baK/~e:S9:$-W]-i6-*l-/b#l5Rn^dv-Db');
define('NONCE_KEY',        ')7,5KrU-zE6*]KD@Fm/wR#Wv_@NQ*qhJ}nz,t:,DWd(p|*!gB}F#oTr4gvY:c0^`');
define('AUTH_SALT',        'l~H]8L2NFIx?{Y+_joS;1JxB<e8A=.O2] S5dtW3TPbDXIDh nY|7;1IZ+7Kb*L=');
define('SECURE_AUTH_SALT', '#$r  C3o<`1OSV6s{D!1_gf>GZrZgQfl+&x0{cO]3e$C{thxty]cR`zTNl!4 F@&');
define('LOGGED_IN_SALT',   'pMko/suxPQTH.[R30oKoo*272!BW6ZV/UI&l,L5rHn%,UdLVM4JSeq<0@WAB}F6i');
define('NONCE_SALT',       'FMMw:nRp]2SJ)41^V5]*$_+Ld+nJZ[n^P*!ZwSh{ow*sCy4QR%%*.zky,CfkKqa!');

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
