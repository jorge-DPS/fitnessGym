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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         ']{:Ql449 |TsrNDOlL7lM3uEtY^L^+>E(#eA<pNBt %;m~1@5*s~!ZB4<}d@]5hI' );
define( 'SECURE_AUTH_KEY',  '*lEo=L@9!_[ovoK(aFWEq;uf&$L y~)a`Z(c.v@.?s#g}]@L}<7EXMX-S<VP:|c-' );
define( 'LOGGED_IN_KEY',    'ib7j7p~*_6R RMh!;9f@;2^$C)1j,54;voIHE1OIZ3Kz`n+x/iT{e9nE-4qV%alu' );
define( 'NONCE_KEY',        'ULl*-rMd-Br|Y%Ak{:g5ln5I0wZ|*.F_^,J4_<{>>[[L&X04tda$3#y=Hoi7)XY>' );
define( 'AUTH_SALT',        'udcB 1e0RsZRXa9~uW[i2R?s!E;UWmkOt Y?^i%Wcv]<?nf4gZN>|LscjQ!-@._r' );
define( 'SECURE_AUTH_SALT', '38;2SQ^[?B8F{XokN}NaaQ^`HOq&h=roB$}*Bz=zDeRxnPYE4=g_;4<7WMu-=yhY' );
define( 'LOGGED_IN_SALT',   'TP35q$@hTG8-7H)M}N.d|v<Oyi_)tGD^Rr=W4s;2^+n95,5-oe#ddnA51[zVFl2M' );
define( 'NONCE_SALT',       'yiaSR#Rm2hb*j*mzNF]jtX9x/H0YJ;tAKP^A433|>Ue!|4,z?9H)a,X^]UyZ=yox' );

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
