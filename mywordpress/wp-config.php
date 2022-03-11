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
define( 'DB_NAME', 'mywordpress_db' );

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
define( 'AUTH_KEY',         ']9(g6u|jH4^jSQPhTAYx,{QKXF|K>+%!rO?:YL!7.m<pkA.@V1pEPt$u%LFgE^R@' );
define( 'SECURE_AUTH_KEY',  '904pZ3A,p0o*ds9?_?XD1Ov+.j7)LbPJzt]H^r22VLX{TQ_hWPTzE-slLo~2nP(A' );
define( 'LOGGED_IN_KEY',    'vMZ:&SN3Y)y$]A[49KTU0{5I<g 2$t{Jn<9K*NF2acA(!&Un[L>aE}P+b%jw*K&r' );
define( 'NONCE_KEY',        'd|yL;+7zci*k3fO/C(0t`.rdL`ffNneyWg@FhKn&:MZFosnb{|mmgc(cJT|MAl)n' );
define( 'AUTH_SALT',        'NZ>>H%~yH0Or}Gn_UR/V^9.#5@QHKIY,iyYv@y[|3l@zYw=f*&[8mkHMUS-7&I6`' );
define( 'SECURE_AUTH_SALT', ' .JULVAqww7{C-TjF:@(Ym|~]H*a .y%F#eqh^rh&|o.)%,q}<Kop<yZfo[H1;]6' );
define( 'LOGGED_IN_SALT',   'l~;?)MJ.3;:y@(=5=!^GL6en]#HdoHp_iepPDXdif]5zeXlgWM7Tk$*pKArG!:+U' );
define( 'NONCE_SALT',       'ZmuA@:lUPw%#%mWQN)dJ]sNef<ZSIXuMWQZQ]e94nu2G$3q[([8,vsv<4kWI(TyS' );

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
