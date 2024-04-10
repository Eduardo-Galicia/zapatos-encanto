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
define( 'DB_NAME', 'zapatos_encantos' );

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
define( 'AUTH_KEY',         'C+)D`}VH(71KGwT_35(_jDcY#2B.;xa&+qE#*n[wm]TlGsQ-7fr;.cLY16qK7l9,' );
define( 'SECURE_AUTH_KEY',  'da(.$$5u}-[>9*M2IH9Km9A[l]7g-_)+4fruJ8]e&:*{wp_s^7Q%PA[1 ?],0zjk' );
define( 'LOGGED_IN_KEY',    '[0RaNB|Jnrbd&;~dc}ts{gPV><p};B1sAuG%2lg~eK$cY6X4=Qb=L(AS3zox%bs*' );
define( 'NONCE_KEY',        '5,{tamrD(*JZ&GTZwPz{2#W.#xo=D<f4liDM{X1jF<OR-W/)fST7K:$k`n@zKp^9' );
define( 'AUTH_SALT',        'F^==`J<{SN$~=Kh!}V<@ o;qrRxPSeUNUk{58AvY.4.|>;z,+!nkyjK;|oGbDq;n' );
define( 'SECURE_AUTH_SALT', '<N@97p|t0oeD<-x[MX>y,E:95D&|RJ)C>2m=5kK3Ov]LO>-1`EIqrT:.dQT{ZW;M' );
define( 'LOGGED_IN_SALT',   ',C_&.mhNab]cPAn$>PLg1iUe+0DbJTnc0C6}2%YD[G#XpTrn%rZel8)!lIY6bJv!' );
define( 'NONCE_SALT',       'K j-:2.MIXi~_Jc)r0$<]zzw!cRqAdSbJ8367|_J!ml$%^CCsw(1Y2}WZ:hqw;yx' );

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
