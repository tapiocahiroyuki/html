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
define('DB_NAME', 'vagrant_wp');

/** MySQL database username */
define('DB_USER', 'vagrant');

/** MySQL database password */
define('DB_PASSWORD', '!lc7W)^{,dZ@');

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
define('AUTH_KEY',         'PrQ{ra?NC*TODT4l;JNGcvMT;DHQ/q|V|%R}Z/`6xjpXzl#P-Vh$e/*`%T;r._O?');
define('SECURE_AUTH_KEY',  '(/Jf~`y,hv*$F>LqZawvxiu;3<fMb`K#(VCS:xN2>Poug~b3s&`!8a<im>}4z|;g');
define('LOGGED_IN_KEY',    'DedaK[|zr1FS[?KcJ-d|.Q!|<o0Wh%%i`=7 s*zCJ%<DToPPPSUR(gs-t/(|KK}:');
define('NONCE_KEY',        'Og.4q|va7n[%8Vvkoms.Xz/4_0=~CB~%%5#RY,c3fjfs:CTZs}pBk>p#Nv2th{}=');
define('AUTH_SALT',        'eMHbb .@G1_REe#,m|]BTgnU3U$P2U3_0)XGm=Bt1qeLyWI(vJWoRx||Bd4CJjRl');
define('SECURE_AUTH_SALT', 'H:+DC)IX7|2Z)!u,#^ R8Ta?O#n<x!:c.Kcyz^M@:DCG{O]a;ik|4jkU6F/`V02r');
define('LOGGED_IN_SALT',   '(r0[&@_~qL*4+b%5Z~^y.>av{k^]:qE+27zEV|4QU-`=L2lR8]zN@H]PspmOIKg1');
define('NONCE_SALT',       'UimG{p@OF4P=SPGlGV/4!pi{5ri)LcwE$:Kk`]pWCfhNb%xmAx:3Myo}ut+S~_n^');

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

define ('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'test01.rdmsys.net');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
