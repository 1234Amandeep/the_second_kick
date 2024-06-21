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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'thesecondkick' );

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
define( 'AUTH_KEY',         '6S]ac2:)ieWxtsAxm$3 WXe:d&rolr=|7;)3xsNKh 6x`pJq?mhAl)wni*Y#3N&4' );
define( 'SECURE_AUTH_KEY',  'NiO6AI G?rNGsT_,ren[<`8*@ b%Ga>GtcPXS0r-Z{2w-!!%#.AhbXF#<DD0U~3w' );
define( 'LOGGED_IN_KEY',    ' Nqs$8L`]H9-KjoI#RNExv1jj.3(=8>Ju{Vbiq{L{~c._:2/*XD|{W&6[.,:E9S|' );
define( 'NONCE_KEY',        'w$&SNXsqK2nt*v)_%s*]/:mqt_(BXq8?B4doGOR&]Va+|%67>~aD d%)%*?!%_.h' );
define( 'AUTH_SALT',        '1Uz~!g9Q=2Lq;Tff`;&nh8{wZWuB$<}>H=@y)(:D}1GgS3{?O*luGs;t~+[ 7;PB' );
define( 'SECURE_AUTH_SALT', ':{13?`t]^AhGK&1R(yUylK$3m>eeo[FCR&8LBgby<7<2+[TL K.WlV/A{!?YLi?8' );
define( 'LOGGED_IN_SALT',   '+;t@J<vpz%;=N`G.8FZ+UNQJ4 &B=#WlgkF6{j{e1m[N,..VF)(M>gVN_&7[#{}*' );
define( 'NONCE_SALT',       'Bz)-DzSE6D`fxr,il)?c+D1?H/R*QcpV+hV)apa%+DrA5w.xlLeht%VPXY E~8v@' );

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

define('FS_METHOD', 'direct');
