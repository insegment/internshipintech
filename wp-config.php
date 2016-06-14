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
define('DB_NAME', 'internship_db');

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
define('AUTH_KEY',         '@%9.ueMPh`/A6M1e^Db*#Idg*/ZFiXu(DS*v:J^X8(LE=QCK,y`v}fVLaoxf;_WB');
define('SECURE_AUTH_KEY',  '*0;9wtMCw[ODRpw<#+k-n(p$m[18]|6jBor!iLI6L+2E?$bOKI^/%1@@@7H)ZuJo');
define('LOGGED_IN_KEY',    'Kp=<|#5*d}PUv&TcxtredO~Ug438u ~mXedTb*04Kq~VXj;r|n+x8.}7X6HcuwC9');
define('NONCE_KEY',        '~NsI:yT.]x4zH:Ed/s7bE<1 bcz`0-t:^gpv##.Cv/4Q|O~^T)aM8&_sJhG[d8Y)');
define('AUTH_SALT',        '0oRSg>70[M -=t(IY@?X(M?2?{,h;*rC^E>nYYw3;HAc_G53c(dxQrlyX03x,n%r');
define('SECURE_AUTH_SALT', '#f>VJ5Sy$f2WbCd+Nrw;=JfR`ZX`@U%SJ|&jLAkXdhK|4.DtJ:+Z*-DuDdUr_2w#');
define('LOGGED_IN_SALT',   'T(KUkt/F4_{FQ7<VwP@qnZ(Y}L|j$^ 0So3L7M#R#N-Y74?_HVeH&3gjduY)~9q@');
define('NONCE_SALT',       '%Fv32[C-?t`ziSxuIEAhO+rwRJ-pGS)geqmrjv@%j_E+8s_bQT{STGGYN*^]!Jzc');

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
