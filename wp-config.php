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
define('DB_NAME', 'fei');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1');

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
define('AUTH_KEY',         ';`t.Lm_p.XquT!S^d4)<kr(0*|-7hU&_J54f068w>sw!<|`Ey,gfdb],pFnM%0H<');
define('SECURE_AUTH_KEY',  'yl&?fD(91?zZs0?XObXE{ u05F=sLD}QbL$p-1;P^vDUA(l(a**<m#%w>^6zh-a_');
define('LOGGED_IN_KEY',    '=m[-Om?!g&b1::q4b.1Y<<TZf6Tht_N6baq:E? >FVl3g,i2S{#UH-1tf Io#D^?');
define('NONCE_KEY',        '~=a8:*7j!]n_Cilsfjm!|_mQ[]$%(x``_qiY`E/4%O>4s5~mluRlxl/S8Faim1`y');
define('AUTH_SALT',        '{{T:ylOuMc[UecWd~iw`@U>Jbj7_F<u7>Yv46[P*5gla,94LqE#HVE;VnPs0Lo/I');
define('SECURE_AUTH_SALT', 'qiza`(E#C-W[RI!V~#IQC./x mn)[WK`i@>^9N04s fg?G/vAD_:&)qc,PMRfYkn');
define('LOGGED_IN_SALT',   'PFMD@^-4e3g{3|3Ulc_3EHmWL)xxi_d!_9)j?`<Hu-G&z)8M$.~)`&h:((W-)N}w');
define('NONCE_SALT',       'T<.%N`$pep}SEEY/AK{O>t?~#@un]NW?I,qq+O!3pSmd885]QMwguzPFGW!=%SQg');

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
