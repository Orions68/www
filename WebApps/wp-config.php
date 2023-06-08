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
define( 'DB_NAME', 'iaw_wordpress_1' );

/** Database username */
define( 'DB_USER', 'iaw_wordpress_1' );

/** Database password */
define( 'DB_PASSWORD', 'iaw_wordpress_1' );

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
define( 'AUTH_KEY',         'NBwtwIr~IG1qP?{s`4(X|]v@-tb -yct3O4SihNcgiRQLYDOt-(]&5BE,~EgUf=X' );
define( 'SECURE_AUTH_KEY',  'Sy7`BjL@-PE3Z->RDC6:^0@qX8QiMky/V6@JL)q4Ba+R<G]JswY6gzQqKWVwMCoE' );
define( 'LOGGED_IN_KEY',    '(Jb];p$r/&M+?wltw)x+^gT%t;9mHRx`2-wK)S|h9lx]bmi2rosYp2uS`@Sx|g+#' );
define( 'NONCE_KEY',        '|js 3%RJh:4RJ:BfH.jp-VxLzuhS~cG!!7:Vk}Fnlf2#$pw[(Kba[qTpxRKAxI#r' );
define( 'AUTH_SALT',        'X0Z+SO(}+O.Wkk@wpi3pSz}p;|d.|6SuD~y/CF2>^G:f,M-X7q,@9R[%Q)ME= N6' );
define( 'SECURE_AUTH_SALT', 'eT T=hgC!@S^TjMM3O^IyQ<g-9dH5-kOqdyK][@gVKuZ6ne:?r0Tfuod#M+e>P)$' );
define( 'LOGGED_IN_SALT',   'hvmzbqa:6 RL*5LgZBy,F>D0,96v =vgOokKjA,wY, ytM1osr?:2YLj=`Lh![<o' );
define( 'NONCE_SALT',       '^jbp*zw+]z:{pPN<U6=$8hi$a{2M~u@wHmmAl!g/mCT{%E95e8_lA|$Scxl|RRYc' );

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
