<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'bfnzR8P]F)l]SgRPapRx@sFt>@!Ac}c}7O.I%v=(Yu5toAzkO;*D-1%Iqr_1<9v3' );
define( 'SECURE_AUTH_KEY',   't~|#4p(b@d2a;zT#o<9<oDGB!Czt-u~16gf0WNlybLOf  ] *bd|yi+VRp%HE9s$' );
define( 'LOGGED_IN_KEY',     'DvE GScA^*yF0U:SL)!:al7K=Y%g=cFN7l^`mwL<O0{pP orb&wmxy+K/K>A^=:w' );
define( 'NONCE_KEY',         'a$`l0Mj[%@r=z%0)ueC(vq8|TVE?6N>8$pVti1~T- f!mH~Gq@*x;6,mEfwmh.z(' );
define( 'AUTH_SALT',         'TSR(M|EvV0vOnI/c?*SC|O2)!I)$!yAK;LVm(9=%T`@fi1v~h*9*kcRp@af7y8|,' );
define( 'SECURE_AUTH_SALT',  'rgWp;HFjZOw#rMH*XUHkEZk}Q=<bIpRp(v7/f?!TM<vVvrR8/c!.j`8N^1jSm6#]' );
define( 'LOGGED_IN_SALT',    '>300wkbZx(q4@c}bN^;#~j/1[dvOcG~=103k5p<Z{sl;WJ$>FO[VmcTeO{Sav$Fi' );
define( 'NONCE_SALT',        'q<5DI%IrbILwiv_k9uBwXKmQ:a*zKBr+0Q1{3_pWwthLxJ0m 6ZPh><o#wzFY;!J' );
define( 'WP_CACHE_KEY_SALT', '~G3}{%LfsIDoDgp)We;|GeHl4?%p-=UC3Bs!#Jde47Bu4ytL[C3 Y<-3[j#!(jar' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
