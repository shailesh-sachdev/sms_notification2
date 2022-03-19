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
define( 'DB_NAME', 'plugin_sms_notification' );

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
define( 'AUTH_KEY',         '3Bx8Cc|s&IY~{3KTp&ZhC=Dt0$*T[ 9!H.]qq|en=cy#gU&^A)esx%>lL:Cha--8' );
define( 'SECURE_AUTH_KEY',  '&ZWQi[_Iay<y8QVX0P4K,Ce5,]TQ9BGjda_Y<f(;3US(hL1d@3GvF|SX^_wN@T*M' );
define( 'LOGGED_IN_KEY',    ':74N2~03v:R`ps>]XP):QiU;5%isV;!=Ba)jgPn&;{a^F2fe6?G|_l(9de`.;:(G' );
define( 'NONCE_KEY',        ')r,W# !70x I%.dvSi`g-R%oUAH,?~18^6hVX<{~vBVE(i7$Tu5PuOeGOxO7bM8^' );
define( 'AUTH_SALT',        '_Y~Iu&>|>396s+Txah+Ly*e8X6nJk;K 5 ,t<;~VtiIIbL-A^N(!nx8(1K3Q%qY`' );
define( 'SECURE_AUTH_SALT', '1oX8TsRYWLa90^OM6?z}WmVMtM(G6NG2_fu#6nd7az&q)/JFNp!D{4[MAuz@m(~.' );
define( 'LOGGED_IN_SALT',   '2raC8 p-d`r,,YKrdTT}0?lsX=omg,T:z?IwdP}]N2b(JLr%pe^zktpA4Wul?j&|' );
define( 'NONCE_SALT',       ':,x&Q$$=z~,_p;h[*u@$txKwJP*u/XuNO*MW5?#9xX%<M$VBoxbcKM![|&%DF<N*' );

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
