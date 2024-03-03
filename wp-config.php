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
define( 'DB_NAME', 'wordpress1' );

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
define( 'AUTH_KEY',         'I6^EHBVLcQ[Oc`3fqmWLzIx:r.7 _4`9xsNux0:dU|2x>326?BLAdq[#ux@}fTUe' );
define( 'SECURE_AUTH_KEY',  'sCU~&Q4~Ba@Y0qky>-x%~7,^7;W|w@AuJmG:qQ]u,J.*4;S20S7c4w8],U`49f9d' );
define( 'LOGGED_IN_KEY',    ';3coO17yLd^px2ooC-aTKp8E0tDZJXf)s^u&KN6mDRw]ee+4Y*?fqxDzWpfUR|)H' );
define( 'NONCE_KEY',        'qOy9)XZ1_<Tcy`BcQw0A#Mg/;vz2A9e+c2-tp.+THe?q3W`4yOz6 (0+c9]%v2SL' );
define( 'AUTH_SALT',        'S4YrGoL+=|TzcV]BHW0]IG#UNbq*)>H[P>6k_t{@z<iKB/@BQLRbAC^qo?sX^nmk' );
define( 'SECURE_AUTH_SALT', '@-<=hHd,~a(~CD6[5]OY.d!WhzRVyrXl[y396j44ke$QpzRZH-3IR%u<jXJC!;c-' );
define( 'LOGGED_IN_SALT',   'h=Xgz!EM8/T>P!pWYGAYf9wKfZgKg;;,a]~/:!:UX%Kh,^yE&-ZIY?SMq@2y?N>x' );
define( 'NONCE_SALT',       'C0$hFx)UBi4E$bWyVPB7X&z30}LSzsq:#`HV(9}QP)fzLNV)|@=yY*jrIPm nKDZ' );

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
