<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'newtestwordpress_db' );

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
define( 'AUTH_KEY',         '$A|n7iK5Txts_<M$]3yp,|9rMi0Bm5,n eYoQ#epj%*ujL%4:1y MEEi@BWkgcYi' );
define( 'SECURE_AUTH_KEY',  'Y9PK K,4#Kt=,%)1:/I;2@8OK_-El8dE(^4SQ$,&r::CFleV_RSGxLb $2tBmk8 ' );
define( 'LOGGED_IN_KEY',    's?;GSx,m+)Ex:r{t|/0c-GbR?Ke~52=PIiXG&]CljgyKhH!NdwRas(RlJ6#~7uf6' );
define( 'NONCE_KEY',        'nPIuO0eoO*kIg<%RVvpXYc8p}#~?&xxNGhy.oza6z~KSwcysYzD_K)`Yroo0$<.E' );
define( 'AUTH_SALT',        'aR|ysAfD/eEI!wdn:APm#WPt>:p<<.=v[tAOjKqP[_H^>_`)>wTqvl0aSYco^TA~' );
define( 'SECURE_AUTH_SALT', 'myD<]Q(nSydK*dDz0U}M%5Z]Ok]1_[^`Mx%rmk}OcJ2*O9Ql+p<z%6y>oW;Zm_-@' );
define( 'LOGGED_IN_SALT',   'QVj|sO.HmYoloNtvM-Dp/0Q|}=oe{66-;fR9r,5D}uTh%tt=OlI1X+cpF<s$GAdL' );
define( 'NONCE_SALT',       '/WzQs};T8#nD(-W&GEU[+:42K6s_n>KZ5cGU+8?[,{Is[k{X]5q/b_v^W:.#{a(t' );

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
