<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'wp_insurance_calc' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'l*P[_J%J|Dd{v)oG}tU/CrR:1TAVGJ(H25rqU.E37q>Z*>9j&/3G1( C{ZSy2/X%' );
define( 'SECURE_AUTH_KEY',  '2PxQ.OdVuT_._oAPTMQMFfCqAqz9(/giK?t0#=/(m~_.XO@p6Ign;pe;{wvSjrZ@' );
define( 'LOGGED_IN_KEY',    '|i 15VTs]H8HI6->${O@9//o8:vQUnCw?Uc&b-^7dEVHKD!7.EgzTb:h(+H6<j8z' );
define( 'NONCE_KEY',        'DMZ=vip8b58A2OD`{mheSFWRZ!ts-8VP0LbG&2-iBO?NY>|Tgf{@gDk3XbsUoRA!' );
define( 'AUTH_SALT',        '|uMr^EqoR*Nn}]^o-i8O!I[KWVJi&c<0qY,~x61HNe~+%92bbc$Nc=JZ1x4bSVz/' );
define( 'SECURE_AUTH_SALT', 'p(7C723!k,$t.%]:e^r2K9x_:q__ ML>@LT@k0hQ{W9@E|,!r-YXu;8Kqf`Ww{p]' );
define( 'LOGGED_IN_SALT',   'j~t9Xn_-N zHc`eUY^m6Fp4oABEa*Y4*!K={AJpXz<E_As|O9}+~>N/oG09fP7gk' );
define( 'NONCE_SALT',       '; E}3:T`<!fiqL-[(-h]{$,y6(%MTrd.1s6T<J+iNQ$8aUkaRm|2D~O2|Kkg+;ye' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
