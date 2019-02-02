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
@ini_set( 'upload_max_filesize' , '256M' );
@ini_set( 'post_max_size', '256M');
@ini_set( 'memory_limit', '256M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'jagblog');

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
define('AUTH_KEY',         '*Gm@xMRgPVoL]e$)j*&C}XY{CWN[!Zv6Mgq1fQHvXNsi_*#uh}.,T|o%%{-WW&19');
define('SECURE_AUTH_KEY',  'p(9V{o<|L7x1pn5b^XMSgisJ+u{wX/,+=UWh;1osddcg(pRC/@F[4ERm-~?x-zzl');
define('LOGGED_IN_KEY',    '+?$OV/=lPoH?ouwg`w`oz-^PW:j_tG8{?M3dE&Z!!qJ^x:0ndB&WxH9u{e6(uN9Q');
define('NONCE_KEY',        '/BJI+pKW*l0L`Ow0 vIq67_G1)EX@Y2idf<|=3.Gl?=EV_6%aF<uM=%gWamcO#L:');
define('AUTH_SALT',        'z-Cw*}s1f)(.KqdxN2ZKXa>LmH&kUY{_/,G@}xy}M4A{(Ra %I9$iJblUW$AETz_');
define('SECURE_AUTH_SALT', 'aE@11hUOJ5_p]I5A]:F*x4MizrjeT{`nFED$tbI6f3n)j88l4+@[Q>;#1xG9Z!<*');
define('LOGGED_IN_SALT',   '.g=WdWXYdT`6Z7%UY,H^Ile!JM(ebQ4rFJrW9Mpya_!N{c$cj6*,C<r0,.? Y8vK');
define('NONCE_SALT',       'v.eJ?[U$vDK:z)0wT/9`5`*/LiO`1)@PpSn9RUc6^Y9B:Jf/b@HQ@oXMV3{]);[R');

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
