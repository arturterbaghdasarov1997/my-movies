<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'E{TFmyK=GB3iskJ&Q?7?M2<62gY@PO43>f&j0&q5.skl#,4dP|LwVk3 RO44h2?C' );
define( 'SECURE_AUTH_KEY',   'D*ts!FsUoSpDW`G>i,gGs4 `w<zz(Vu8]}LElFy4naR&i#)$?Xn%fZEN,Uxk~=])' );
define( 'LOGGED_IN_KEY',     'R*&dNI02:yYzA?1m]S8iL7xfF-fFwRnHH>VY]F:fUJ#_3=<X[;M,!-]$lyw20K8:' );
define( 'NONCE_KEY',         '%Uo,NOCid#4>F|oOw56TRSP5dQ~y/[El4,qNji>kUAI*L,ULMsO`slRm9WHc1Q5N' );
define( 'AUTH_SALT',         '*(s=HB}M^gw}!G[v| t&O5[zy$#^Gq9bR,cU:k>DtaNP5u^}!5>Llr{MVKv0A9{2' );
define( 'SECURE_AUTH_SALT',  '=y1_0i4l0qy0p,Pig[f`:<Wwr]6l+80p4zE@.Fq[/:PyBc??n2W_7Vc(hItdZ c&' );
define( 'LOGGED_IN_SALT',    'o*^juqC9/7]KlJ>O^x;}/Gk7!^EaAY?rjW.F}7Rxr{NlR&VGP# /VWIhrB@bDt4&' );
define( 'NONCE_SALT',        'p:<ch8Y^0Sg*kj(@o{A?!:U+QDnr=#lRe%P2|C_0^$_kAO!5KU@LJhjOyxO]W?J(' );
define( 'WP_CACHE_KEY_SALT', 'DO~shSwNbmiT1V=40uZ]3rw%(~`RBn7n;P mYV_DJy[5*n;|s~WRC?<uV,0a&cDr' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
