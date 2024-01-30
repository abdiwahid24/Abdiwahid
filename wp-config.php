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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ogmaal' );

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
define( 'AUTH_KEY',         '38a.-==b3XT{=hEAYJA?mXzbW`E6Twj`}iAp^9%AJni& eJkOE8/Hvi/23A&@9%g' );
define( 'SECURE_AUTH_KEY',  ';mL7skiSF_.E>kQ_Y.tTxB}s-VNZ8y@!ufFv.#NoM[!LuL~ r9_cxawVN&.8x~#V' );
define( 'LOGGED_IN_KEY',    '(/YxG# V*AV~=[,Q~;.&ZR,HvH!eHa;:,K,~VuyR!5G=h CDjg$#G{IS:DC&%.8b' );
define( 'NONCE_KEY',        'aezXJ*ad4[:<QCv47//]T,9S3k&#Q831o?H3$lSdp0_r4=~;Q3BikSq)2^Cn+BV%' );
define( 'AUTH_SALT',        ',4<Z(1u0k@6#%]r^D%aicRy3-EgTWhvuyQekc6GI$WVE2N2H9ZdRifQPa$0{)H!6' );
define( 'SECURE_AUTH_SALT', '0/(2$/OR8n/YFJ%1@y][j4|2dZb0Sp kZqPO.hD<;p%w+[qS(gO>B0FL[Iq OjCM' );
define( 'LOGGED_IN_SALT',   'x)DDuOyQ^n(1W2hKDKQ;6#`;(gjS0Pc5xa.NF&A}:Z*aJ]o*myv9zT>|y.y$rrAa' );
define( 'NONCE_SALT',       'Dc ]!<C(@;}$/r4v%I3W1}^leDq1U.3u|j>T~`%NxM_eFk6m3 FHW&wbE^/WU.J,' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
