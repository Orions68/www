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
define( 'DB_NAME', 'wordtest' );

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
define( 'AUTH_KEY',         '(UTE@_KIzN4)cw`$-v,6fL,xk_Wa`j;H`pi;t~%k%Sl1X[QQ(qLUa/{l_cmD54+C' );
define( 'SECURE_AUTH_KEY',  'e0rAb^{t:Ts8n/+E+*[Vg9<,xB<Z>X;W >2CWM2P~V/(y%,2M-H7P-v+_#{g<&lV' );
define( 'LOGGED_IN_KEY',    'g~Sl&j0p6U2|^ACP:=zQt>%fCA;@[!EYvNzy {XQpm$oB<2??n)a)42O|~IMj3tn' );
define( 'NONCE_KEY',        'EW4@:f2i>~w+p7-@m/LExLv,/DC CGHa4;FL{n(Bw]K{_490,)@ByZM-! sOzI!y' );
define( 'AUTH_SALT',        'B-(Op04?Bq75Kc(I14Z/5>pW=MkVo%rLX`8RXOi;|:<!$^mc%4w|w<e~sNN^*~5|' );
define( 'SECURE_AUTH_SALT', 'vXJBL5D^?X+ki2v<4D2C+#X)d=G>`{m<B6A8YgLl@~xZnL446y~?SK8,;k,Kl(Gt' );
define( 'LOGGED_IN_SALT',   ':*qv^Ec;2BAK|u,0P!?7}sS>T;9Z7rh+Fi?ThuXx0^tBG6lv~u{b}X_c,.NWj:uh' );
define( 'NONCE_SALT',       ',X<GAjk%#rMD~,up^v>OG I-jE]i@5-d|E^@6|x54r<42g?lxUD@4e,UNQG`F^!;' );

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
