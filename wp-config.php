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
define( 'DB_NAME', 'parivartan_dev' );

/** Database username */
define( 'DB_USER', 'v7web_db' );

/** Database password */
define( 'DB_PASSWORD', '2G4bDqS3TK@' );

/** Database hostname */
define( 'DB_HOST', '172.17.0.1' );

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
define( 'AUTH_KEY',         'ZEWh>`c5u%c)[onugt])n?zHboQY&=$8eU/D_[JH*0ad9oNh5!t1>10)3oi.##}+' );
define( 'SECURE_AUTH_KEY',  '#*+p4[|hg>NZ]TxS2XU+a_@+(D^Wrx[^TbyULUO<.,yAi:qz~x,]FP`%,OhEZ/,7' );
define( 'LOGGED_IN_KEY',    'FE?3B}w$r<n,8C<S;9MIS&g#msVtOz}]O#4)wMSbhLEi<r$4}YUey/Q7q6`lz$)n' );
define( 'NONCE_KEY',        'A<-nhJwDH)E;j1;S!E,sAXhS.2e%w[#:UYW:A<N}uUK,ix(<Wvo`@F-_h%I{0QrH' );
define( 'AUTH_SALT',        'Nxlwt-:AX2Sn`6?,Sqp|Sk#H, 4nVNx.ykkbEPCIfjrFerG=yFz~1)Sd>jNh3-*U' );
define( 'SECURE_AUTH_SALT', '/f;^^sCJ=qS*8!/r*7dGqD^c R`A?mG1?25%gUbPWT#oVIuDenPohn6b~2TJW[pa' );
define( 'LOGGED_IN_SALT',   '8VuqE9(~&SobmQ=<!q$rNnraZ 3bM]+3DX6kQ:8o:hK<p9P*T.NP[0O3ptn?QkU7' );
define( 'NONCE_SALT',       ')i*p{7BD{Bk)JQ&Ut#?0G7-_@c`G$VEcaq>h%d6fld0=2EPQcm3OjW>*-^pS+5F)' );

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
