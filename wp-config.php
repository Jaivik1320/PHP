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
define( 'DB_NAME', 'jaivikblogwebsite' );

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
define( 'AUTH_KEY',         '^n6vKd>f{M@6,u*Pw_,)uLYmU^WJB[{O(wL#$Fpz^O-k)2jS 3eS1&>&K|%1q`&~' );
define( 'SECURE_AUTH_KEY',  'Yp#mmL06a{ba!6!D[M>o`Ch%bfYTK0@q3iHYh9l)h1Gtw2d%d<.`}u:k0eRqFT)c' );
define( 'LOGGED_IN_KEY',    '.fDW t|A)5V[7Yel1}5/vj{!P,:27C.2Gmt.kNL-%ld!~+H#8sYAE@Ee{P9Njr5A' );
define( 'NONCE_KEY',        'ky)G%tA9/>kp^tKl}]NS=tp$OjSB{U8pbHF/]$3/u;[31QT0}_.F^.%%n+YdMF*X' );
define( 'AUTH_SALT',        'RKb4r?px1[g8*_HB#t3^_yKv8aq?KU3)k|R< fggqROUULCF^B+6;D}!30##hR^A' );
define( 'SECURE_AUTH_SALT', 'eu7Z<j|Pq24aFRF#Xs2LVH#Lm6NnWn$ym+~=_]dMoI17oUU6FzHBiK8U#/Lzh+fH' );
define( 'LOGGED_IN_SALT',   '-i_-dp_ui9s/ifL1+;Bqbt<{)}>.g=Y<lU@@^/dg]/I+/c^tc~WTD<iya! !d1xG' );
define( 'NONCE_SALT',       'V&^U`bt6<L%PG5ZbLm%dtSu<sLWl+655;=g^=M.iW3CdJP2_z%xHEJyv07CwRu1A' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'blog_';

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
