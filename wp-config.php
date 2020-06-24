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
define( 'DB_NAME', 'wp_task_db' );

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
define( 'AUTH_KEY',         '}GJEJ(a<WRGui+o0~=w4r}l2gGgyr$<[87^H*JJ!wd/= LF<=Y!.|:w.`$Vt>Sc^' );
define( 'SECURE_AUTH_KEY',  'Fe{($U,;3NN8 nw#3;:VFw*w&B>z@,U?ZZyz$A`b_5Jsf8bykJI*WsrWlj-NCrv1' );
define( 'LOGGED_IN_KEY',    '`_{5ti>-7S*K2tIcM<dPvM!q5aMY(_AKv(gz{KZnxg-Iods%jAly%x:Sx @#>];_' );
define( 'NONCE_KEY',        'g/AzAisJjjtyj Q<HGq#r[HYY>hIp`sTRu]kY4v)dd^=)Uy#9xgjq7@k]vt=:.FL' );
define( 'AUTH_SALT',        'Uu^8K4By5:i9NsdK+|/x8hN[Fw6#d6oVKSf2fmLJ!12sJK1rz6iq,ev(f:=gY|^^' );
define( 'SECURE_AUTH_SALT', 'cc8gY[Wgw3~e?T1ovM^|:X.U m68_~eBrt#:<=UqNvjb:+=-&El!{{HT`wvB#6rQ' );
define( 'LOGGED_IN_SALT',   'b6D<*9D)CS(!n1>o$X /uF0(lE- J.?2z>VWj&[[*QKNWFt<0DeV2*uYY.=X7.lu' );
define( 'NONCE_SALT',       '^D! H!#h5$>P>+2G>hQ7&mdOq73~aOaX>!TUN1_oBz8UjG+56!Aer}L<=]p*[hP!' );

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
define( 'WP_DEBUG', true );
define( 'WP_DEBUG_LOG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
