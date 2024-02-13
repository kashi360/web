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
define( 'DB_NAME', 'admin5_db' );

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
define( 'AUTH_KEY',         '0UQ#)iEVL[Og(Z~c$M,;KDZ+a5x?.Ei}|,f`)j_&e{ rdXk;usB}.z(w:-g5g_~s' );
define( 'SECURE_AUTH_KEY',  'U9z{F?pFq&o5|Gu3<63}5s}^[@Thz>vH8U=RB!|<*zZh00LX0ukES+fh&x(`})5v' );
define( 'LOGGED_IN_KEY',    '/fF@nk3OO(f.M:><Vw$*X))8&lUDkY$syuX*Ex&G[e}@~J$NhV|^cej:p0#r>D*=' );
define( 'NONCE_KEY',        '.!O!Ki^NtZ0riSDVUtC0(pI%Ox9QT7[:ajb>^!uY0mTW-1zeXEebsOkl2if#a)V.' );
define( 'AUTH_SALT',        '<7Ym2ip8g],:T8HtIzE~.xUPdkt#m@WCDym*Il$iHby[2g:.<~V<i=n.qhf<q|r6' );
define( 'SECURE_AUTH_SALT', 'L7LkfZAN.<A.-[[hRA#aBv5IJ!eHuS^Qxx~9oRc8{@_L/7F;+F`r)*KHKd71K9^:' );
define( 'LOGGED_IN_SALT',   '=*j%gk:pBk2Y,xK+M=ag>A!_wcIAmyAA,c=P.`YoXLOlUyM<xxh}T.[eVR>*PeKw' );
define( 'NONCE_SALT',       'Dl=m)b3!/Z8Be,[RMq!B9b+]Xs*6a(`=tXU@8n.)7ir5wckIi|{>VO;;/=:uSFHp' );

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
