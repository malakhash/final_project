<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'collage' );

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
define( 'AUTH_KEY',         ' SXf9Z?<Aw)J8xIOFhq>?=saA!>M|H9&rsNh&D;%Eg/$jkZC77aNZU+Du,8J:CXQ' );
define( 'SECURE_AUTH_KEY',  'x|%MsMWN^bOcr!Yz./fo)tl-Rp|B)lPNNhV+}3Hp))eLG4OP` vAD:iot(6OblD9' );
define( 'LOGGED_IN_KEY',    ',uk!pwlFs($7]%yTZWCmyI=+=aVFP#HQN3>..b-00B)cCHZU#@Z$u[dLa<@oMW:E' );
define( 'NONCE_KEY',        'e)<ISd/ W5_$B(LdL^r2]DR4[y`8#B*%9vcE.~PNceFc:z}cFW4xen,qVCfQ%qG0' );
define( 'AUTH_SALT',        'pF;B<$FbO&>.3Z3q T0U7U{BmCklMZ+BfXB@U)`l,U+S,nqt^|__1@yE9KvY#zcq' );
define( 'SECURE_AUTH_SALT', 'OL{o!Ov%7)EBp?)~C(7<EEAxu2jxFBj[eW *8kHXs?Ej OY2N/,Q!p%wFVRr;fA4' );
define( 'LOGGED_IN_SALT',   '!o1YYJYF01Mij[g5H5>%l^0koWy7AN)w)eDv~h<5I}z?x|F9uf$uh5IygT%/g1/~' );
define( 'NONCE_SALT',       '?}Vg=GjXS- =|_jS,lE[t/D.p*<(yB]AZTdYID~N)bf3MaA#}OXy<)XFzYo}ifMq' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
