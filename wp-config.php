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
define( 'DB_NAME', 'wscubetech' );

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
define( 'AUTH_KEY',         'Swg.&VtW8&.TU:0kT Ry.]%:BR7I$](77Tgl2RY8[h7xG=+RmAY0AnR;=FtY0(U*' );
define( 'SECURE_AUTH_KEY',  'r{r&dZ&E6?k>5,v|Afv(M-9d%`3(3TFe( n7EU9+,<T}kgg3oL~uR{V+;oI;ZHRe' );
define( 'LOGGED_IN_KEY',    '/a!P&.07*ANKA|KqdL.5 %RqY]1Xit0FP0%{$w#SBHT}>6_@k;Rq$Gf/kmkV$VX5' );
define( 'NONCE_KEY',        'flg/^ddfK=wq_6d@CQLv5mmwl0KofNcE]CM%5)n![.:2+0aBN7Mlyv0;7:9lh-j)' );
define( 'AUTH_SALT',        'WK:vZ%9]1_G!}oe.DI1gl%_r9_l&>%_$4+M0cI5_XUWRd[^[36l}jkNu8!8KFskL' );
define( 'SECURE_AUTH_SALT', '05mL4 7BU*.4+Ga+-5iG=Z@xinP s!>Me?VRa$~#V#;1/ [_1x437#o-/wJip&?Y' );
define( 'LOGGED_IN_SALT',   '[[a.76 }H<]sT$t`e{g3_rCOYEZ_(1.RkNh40am$9O~*it&o>n!moxaPKCz9~_9K' );
define( 'NONCE_SALT',       '|1:N7g5 [ETJDV=f|a3Qweo1 J136hW>?jF}g}_)iN1v Z$uMOKIokV:A<-p+s>u' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
