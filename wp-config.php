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
define( 'DB_NAME', 'marco_property' );

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
define( 'AUTH_KEY',         '>i4md,L!J1&mNnV}(Y4Do2`lZ|5ov1BWvU<FRG?CX}u!iE/b85dr`!GPd~]j&nV%' );
define( 'SECURE_AUTH_KEY',  'h]>>?uw^wd,cl.NBiaZzfg$p%*A=m}~s4`aOy+]gD|)b$,1^Nkxjw}+0K)l+n`OH' );
define( 'LOGGED_IN_KEY',    ']_(6(Oa/iL9P$^/MK.=^lyJR;].nxP1%:Y(Q9D-Hsp[]cHT1D4Y@s -gEsb(^}ZT' );
define( 'NONCE_KEY',        's)[`#zO.n:n8qtX-_bF(5<zUTA8mRTs12>VX7#Z`f,<.YGRg27Ic-)(%C<PN9t34' );
define( 'AUTH_SALT',        '#t!x+E(bOf9e7_i?x7a=1Zr=}9(`gE:Ffvxx43VzCl;b(z>$*DIa(u~aY2wAuD|J' );
define( 'SECURE_AUTH_SALT', 'DljK7tt^!c[)[x.FKY:15@S>Gwr/fqo#7zr;T$*1=>z8p>rd<w{,N*]o-s($lDtb' );
define( 'LOGGED_IN_SALT',   '9JQ!| V)u5NJAlyaVT?f=v*VF$Oz{Qb+FN/z?*/h:Pbpp(Kh!/[<X~s5@uOX9<W]' );
define( 'NONCE_SALT',       '_[h1CX kDZem,B$N]ly0w-B{5ukr2nsJb8A4Yo`dyke[WT%L.lS_Ax/Ac_X:-BP5' );

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
