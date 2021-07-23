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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'm25563<1*Q#?E`8LJZ,?%a:+}UF2<C#P|HK^?hgnqi3tVh?%eDWb&jenC n&?d9A' );
define( 'SECURE_AUTH_KEY',  '^YF;G}55|s]/NYF$pl#wD#uzhcVRZ$,PJXwPIn3yxibWP2a7AsAyA|wI!])B^Lec' );
define( 'LOGGED_IN_KEY',    '&!wq8^>P9Cg*[-@s(L_3J+5ItfJTf<.56w{V,-(+:dfvEpC4xjw?h&Ft-.3}o/x@' );
define( 'NONCE_KEY',        'iHaeEnJOn3kjP6LE81e;Z%aMOn`F{cPo?rHYu/Bn~s4DMrz(}PU^81vx=A;MxYoe' );
define( 'AUTH_SALT',        'RGU}zgqB=`b8Py$*G5s3lUjrRR-~mJg:WPIVF:# m~Tq>o~F5/WP*j!<vf$eAzF?' );
define( 'SECURE_AUTH_SALT', 'VWFa+rC71~jUBdyvvW6%Kx^:GrI=hDex!HVS|S_xQM+QHzU8d]t39Uo`_(v=VD.K' );
define( 'LOGGED_IN_SALT',   '8O+NCiwK9e>Yp&EvPGo,>Is?<5S9M.CZAEn>a0w5h1*EjY6G~IS:10a;0INc-D6_' );
define( 'NONCE_SALT',       'FC0djQ+ao?%c4Dm&0?Sqz! w?Dd;ls;:FHuBr}jLUY[p<D|@v3Q=l=mMs5FHBpFz' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pf_';

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
