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
define( 'DB_NAME', 'git-wordpress' );

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
define( 'AUTH_KEY',         'HZ;kjq/v1/TgMJ}4}KeO,] WuD_Ri]g_zA+@Z`)@qVE9&::gvHX-A_$`;wgLR4w*' );
define( 'SECURE_AUTH_KEY',  'nVWxO-A{H[4JDU7}A&vU2gVaZw.@[w?>pYd+5aTR4;h~p~GUwc=7[9.vd%@pzBQ(' );
define( 'LOGGED_IN_KEY',    '!G6RA0L{q5$_5_zee@!Tepv^MUo;[R ~h^teCc 8&)2*DFmZm^]nF8Hnm)G8d!S^' );
define( 'NONCE_KEY',        'C-h/jO@gM&j/Md{7k48SYui)Nc0N,qSh)a)K1^4gMLegI^Z-Aj.-@HIl6;g~([od' );
define( 'AUTH_SALT',        '__RvPHQ-`MDT3(E71=^.a#>DpPS2-Z*Z_iXl`*5Kg5^g<s$3FKD!qt|6pZ{o!|V@' );
define( 'SECURE_AUTH_SALT', 'H5A@|dfFCu!!5u8+yP(N=?WH_L/(}h[U )YO}orxeFxsl{g#UpLC?c|)`0wx{Fhs' );
define( 'LOGGED_IN_SALT',   '^W4|gMN=nS_tK`h!6u(~|?XX9TIIC6D)Ap3P/l1Gj>Zyz./-]rJ^KcQ!hC2AFW^)' );
define( 'NONCE_SALT',       'y#k!y`LcbT!=P%zY<SOpQu<]ZlB{/bv@.gjI!*@ FeIz>6Ilg,okO;[au.9B8>Mr' );

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
