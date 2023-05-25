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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'KA]?2LCvvxd1(Y<ZShSI%GOf^G0?:@O;c@V]bP~(~l{)0-V_e*4@3r9Yg=7?;cvK' );
define( 'SECURE_AUTH_KEY',  'E5{^VB$XaS2P]?OR&-N&i=@Tv(A*nT@RXk6p^RA`l,Eht|nKyY|CbR *G%_-([A6' );
define( 'LOGGED_IN_KEY',    'A?YLnwO@%w*JgAf0>]$Qjlwi1}y[EC:Cwj!p^3<(IK8@/M4k8ZRDIG^>afbd;D;e' );
define( 'NONCE_KEY',        '1#Mmtk$m0#6PKKq(3PR$L8bD1Phu2#5|ynup/E2PN*TPM}QO>GC6]4]Va@_56@L|' );
define( 'AUTH_SALT',        'K2{{1h3mH#A%UJWyB@}?!gNxhM_{$`KC.m0W~CpSK`W.>1SQ<A!k)9P}l$[j6q$N' );
define( 'SECURE_AUTH_SALT', '4~HZ@:#.zQ+nI*9otNk8JR5_cc5t%ZDr97(Syoz`ExcpR}4.)3u[_Xg$7E[[1LCp' );
define( 'LOGGED_IN_SALT',   'q|e6>o3+<EY4<}kID+X^[Jy)2]ZQWJnr}5IKiyl6cRGMwAew#]u jOMb&>lNaeEO' );
define( 'NONCE_SALT',       'AhcS7^3iT^z_1d^4)Nm>({?WQ#>QxD1{7%sI[X5:1v&X-`Oq/:-G=[!pZDD8ZVmG' );

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
