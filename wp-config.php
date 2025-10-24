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
define( 'AUTH_KEY',          '=9Mo0:mh;m WL`W<#ta$P{S2uM+;%rMAeP9G]aOK)I+;Df*[xJc::pig+2M<Hycb' );
define( 'SECURE_AUTH_KEY',   'U )6n[-x#6&C OHlYp5Oj[JpT_|,SYR6:<6+(A.,J(|}7y:Zk$hY(Zfd2[P~m3dK' );
define( 'LOGGED_IN_KEY',     'i8q;#xiRo%suKun0pCP.6n:rrKOZ/}-N<#o(v1u@!4?MYV|n,c+FGq6[JjNC[XG$' );
define( 'NONCE_KEY',         'bMF+?hlnF0c =v<Cg|w?/jieD7j(5qa2neNVtsj@g(!_O;Z-YH-<hupPQ4XBxU,F' );
define( 'AUTH_SALT',         '4NxiTgl=EGmyuda~Tyj;`Mnj|FrD0y]|-475m4`0x)4Y[^}0VM@Z0n2+2fF3_N<X' );
define( 'SECURE_AUTH_SALT',  ']ZCgA6^rUCq&$-g8j6 Dl16>EiBb9~RKb$<O;YaO[dA:D-?d7^G|MF 1e:.WA3{L' );
define( 'LOGGED_IN_SALT',    '6a/Fit?)F7Bz~wr0mQ6C-wb/2k_8uY%HT6> fL^zLSTf-?ZhW<[B}I]H lGwm_l`' );
define( 'NONCE_SALT',        ',O>z HrSx*h^}Y|SQEx18#lzL#;XZAwrjRf[UcMzZ])z0Bp=yyJbG}LFN{ESB~jl' );
define( 'WP_CACHE_KEY_SALT', 'TfwKM0?YV~fNK-#SA}]TUsg8}^jdK)A8v{G.`4H6?_^hBL)~:A>4)2V(!Z[SJcn%' );


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
