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
define( 'DB_NAME', 'wpdb' );

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
define( 'AUTH_KEY',         ',Q{9`({mnN2wRQ&;]te4PsO=m[,53L,y?-n&>WC@V?t1cL$#p51+/Lvp|)*^}9]c' );
define( 'SECURE_AUTH_KEY',  '00t(k1Rv!J-)E04w/R+oN7^2bh^`VzB;/}5w-5w<N: c6/?}N;ZOLqm[7j}Mi%Wy' );
define( 'LOGGED_IN_KEY',    'fgLDr;_TtR+JfM@`49moNDA~`$60+)K[#1!)L< Mj>8oRW8Qr<Ci-.!^mdFwB{=L' );
define( 'NONCE_KEY',        'TbOP|,^/4v(+XtJyV+WCRn =D*N8S`Cgw^Kv#BR<uVUcdlJ65Y*n#k.FSeed[Q-k' );
define( 'AUTH_SALT',        'qAF4f&DELxo;LYIy(@=&iu_oVZk7k%Y,NO$J`!wXko-WlVz=+*K.WyuW%}6jb|KB' );
define( 'SECURE_AUTH_SALT', '(^xp/F%=n~hw ygt&riz(C7_g*IUt~%Y$Rsr}6W+[%}3> Ya F3.W2p7Wf[q|#p ' );
define( 'LOGGED_IN_SALT',   'H]vdPY3{B&f?vZXJ_(Fpvc^._qAgail?Cl04S<T4&^uM4,@8r;G;{b#SWoenq7Lb' );
define( 'NONCE_SALT',       '-wEf#;Et4NEt(ruv#9UEpw))?8A{g4~fRG,>Y@RiMNN[X;wJ%r9X8H:2xajgim@b' );

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
