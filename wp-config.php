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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress.test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', '172.18.0.4' );

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
define( 'AUTH_KEY',         '_TPU~+lP09s<`kg3#O(2Oi=L<cc_`55kj:O2N*0rz]OECw5!Dm{<z:4 [dc&,bI|' );
define( 'SECURE_AUTH_KEY',  '.(:qG*QKETw:#R,-QJ;n6c^=.K4YX%Ewl`d!PjJNNYK^+m$zuQLL0^4~V_oq3%uO' );
define( 'LOGGED_IN_KEY',    ':]:q@HDS,HclCha~z8:_&3pwho{oCN-*$q[WkVpSZ,.+NC=:H0^=k[67ROR0X}0V' );
define( 'NONCE_KEY',        'Km)` 7gPt9@GKNV9xk!F[e=M/=oh]M5PSI$&[^GxC+yC^*XOxq]lcrH@F>, eWJw' );
define( 'AUTH_SALT',        'q@YM^~6^+e0gWD1fP&*iOb>eJ*(z0?YT4k@ESe#2x;x[1<2l:EhG:Qta*h6eP7{2' );
define( 'SECURE_AUTH_SALT', '!tsq `SOX8}[v|B_2<=DF)sO8UGX0.Pyc9xB2d DS-P#{_xccz74Ic#6xFvBGw% ' );
define( 'LOGGED_IN_SALT',   'P9Xg`-X?QrVFw?saC9+d EB>N``)60eF^QkW?>:N5K/_Mr3`=lW2|N1HEs+Z3=e7' );
define( 'NONCE_SALT',       '_LctiQ1*M@+9Y+TCDdp;Epc@;{-x]xuK}IkED@;*{KR3+{pST,pn;2}#  !Jy(Mm' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
