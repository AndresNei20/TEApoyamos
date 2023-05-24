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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'teapoyamos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'h3LigBwjb-1k{TIm! {b]i{8LCYGA6A}H$=<hXQ<1z-PSp>Z ~z=qGXjd,*f5rqw' );
define( 'SECURE_AUTH_KEY',  '-&<ISp,|xCgHD|O8Aw4A4k6omUt!<)a5D,Vb@&.+I%4!.!RaNU%;(v/||W7jr^S4' );
define( 'LOGGED_IN_KEY',    'TxYt Q*ZH$Ms]/<[n&8;Ot_@i*VNX{&94JkN{3Pk[S265zdNY?GO*DXV<.TQRemo' );
define( 'NONCE_KEY',        'p1fU=8??X 44hI~zjDb/yKr`{o|ZvUKSqCz8Yln2y&a1~.]=$lpv}2q]XZtwwAC*' );
define( 'AUTH_SALT',        ' yAOmd2md*_0g=t-|caJNRS4Df Pdd]`s6tvI-vh79 M(kml+.R_}sH@RGlC?Ca&' );
define( 'SECURE_AUTH_SALT', 'vne(L?Tq{0~zm12p<SS|^M)z+x?H$,o_ijhEh)>~=q&je*7PQ!T+)x)UwK@+,@bB' );
define( 'LOGGED_IN_SALT',   'Qs_-6pwt>h$Xd!U+?f#0c_HMei>L@L>o~X3Lp?,pErQoN?Sp=w%k,~;qA4*g8K-i' );
define( 'NONCE_SALT',       'HT/Ugz!<h|sv?r-}>EGTughFwdp/U|JrCZ~1`*XN6<O.A}TVlof+^!`Vg:)_H_oM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
