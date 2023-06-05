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
define( 'DB_NAME', 'anubis' );

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
define( 'AUTH_KEY',         'ub,(/ml8*w]S93(5%7}*SXMRxg2>]En/q?t<CfDl7P~ _5 T]%J~xt(v2uW7]M-[' );
define( 'SECURE_AUTH_KEY',  '/-ZK_P(1[$^:!/=z9[D8iYb_anRmA<YxyQ}wc:Mq69b5r:NoTiw 8/mN_)*|}%s8' );
define( 'LOGGED_IN_KEY',    '}n)mW-SQS?/Ow9HU{(.N^0ICpJx~JQsO6~0_HRrIn%uBYcSeJf2X*ElWfTZzZ[Yk' );
define( 'NONCE_KEY',        'U.EVQoa 2<i~5j)>;!yZgC^~#EY&RXuY=.RX4{=e/L]{#vvE1,# 5CE]h]`!e6~A' );
define( 'AUTH_SALT',        ':7%EqqEb.PXyAej. l%vP&(ZCjNzA&D%] a {S&U_oy2uSH?:q|dB85uFb]$,@iE' );
define( 'SECURE_AUTH_SALT', 'zEYSsAMD!=`/tzp__~[~f1ig@)9F.dvRibRCiGTlDgDu|P-Cv 7|]vn6tt6`)tus' );
define( 'LOGGED_IN_SALT',   'F?<ruMFe5](}:qi]oTS9Nn6]}(e8dQc)v0UW6@y pqqV=Za806%bRaTx[eM3[cw/' );
define( 'NONCE_SALT',       '=F?3-S9j@{ycJ=[n^)BgUGv|?(L:^2BBM)1D=jPfDDiW%bYk@M#f$dme-6e@Q,n(' );

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
