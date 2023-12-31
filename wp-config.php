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
define( 'DB_NAME', 'Jade2' );

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
define( 'AUTH_KEY',         'Rg?I-.3T$bq-E?Bq|&hHPh@^B[=lltsr_4R/*j@&S6[k%l=c|4JsPh{-82+Immf=' );
define( 'SECURE_AUTH_KEY',  '.b Am5@g>>9G3Yg^0FWyi*U=#4iyMw.>OmX[XEysk3x7>z(M xw4mZbP_i-16*tb' );
define( 'LOGGED_IN_KEY',    ':N}51k:MFH>K`$c]hzzlW eJg/d)|K;yLOPP@yHIkuutl(I*t(rEI^;D6NhF50k@' );
define( 'NONCE_KEY',        'd-]LGPcfdp<Kj[Nd|-l{ywP `BZb4tWg#`55KYCnC6eN)l_vyIi`ZW)h=t{5sz*j' );
define( 'AUTH_SALT',        '-4u:&(YpQ]5t:r=F8cO0N*8fyiT})tAF-&,rBkeL]}SB~tC7H^3NPcrkWLrpFY)Z' );
define( 'SECURE_AUTH_SALT', '?1igu,Bfx/<a<CS:C)!Rd4=z]}s0Wa$c znPSMee;$$96+aZUr9`pn`DzNk~lBF;' );
define( 'LOGGED_IN_SALT',   'AM!_4x RnYM(ciU^U@JT9Gy+o]:2DIcjduhzZ^[+rl1ZJ?g_R%)gGG>S~<jDWf.S' );
define( 'NONCE_SALT',       '^x/DdF9s2H8g%EP7be?I!WIu[~2)/DM)~^ez-4@( Tl@t?v)&`b}Pa(hCk;qo}2Z' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
