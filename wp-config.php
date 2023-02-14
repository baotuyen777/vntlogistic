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
define( 'DB_NAME', 'vptrans' );

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
define( 'AUTH_KEY',         'r#Y:cQ52?{`lf~@@G4.nG8Py9Fis[y*^dxa]Sf=MA^_[bYN?xF$6i@{[f#t6N/[?' );
define( 'SECURE_AUTH_KEY',  ';VvSVk*ynMx+z-?41+^rWhqwrhom]Q)v]B=Dwre30$Sb`P[!4A z HGc~y`DJ:Mr' );
define( 'LOGGED_IN_KEY',    'Cg*AU,a@~S;x8>_]6z~|uQoW4?&Ri33;HP;W/3I=C!nE%[$0Pden8Zpq|#Lkn<<!' );
define( 'NONCE_KEY',        '/=Hf_hS1Y<2<@v66<6nb}&qEzLW+GcaU~4W6#fGM[,1j/UJ`*0>m=r$!tk0Mp&/^' );
define( 'AUTH_SALT',        'Fb<ZmvEvl6WSoxZTwSqOC}Bx7IoYvS,]xX~_JL3=DRdUgIA/G98T7IS2ifO#PNWF' );
define( 'SECURE_AUTH_SALT', 'gI 6 ?.dsYYWtt7FA-Yj^U^mTzil{2~5l38)*v}V_AFkCwQRgprt2yD5vc(+vL,I' );
define( 'LOGGED_IN_SALT',   '|O(:yRu;}eyA@,@h9v(b#>r-Rr=2-7SNeu2e1x`@?;B*mSgdDEK(_3!*X{q;NLf@' );
define( 'NONCE_SALT',       'X8Ma)I?RJao*IMDK>+=jY75jkmFQcj$N8F.sg4;DSj wIDg9elrTyDJ s=!:Fv9M' );

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
