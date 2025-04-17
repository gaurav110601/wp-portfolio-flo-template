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
define( 'DB_NAME', 'myPortfolio' );

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
define( 'AUTH_KEY',         'oSpA;(a*({NJ_$l7 gF1drZRY4J@V1K|YqR-|$*|3|:5S:dv[fps+n79}Bbr+iXE' );
define( 'SECURE_AUTH_KEY',  'Pjcqv<K03h/ZT[C6=0g<n-lZf2zHIg>HqJ.Ax8xq$IWu;IB%8Ek{BbZMs}6F3{0k' );
define( 'LOGGED_IN_KEY',    'rVD%0q,-1L$c$@_,=nIf)#GMyt18 =Sy5]DI0JdvaWKY5NT2VN)J^vn(T$ksVVG#' );
define( 'NONCE_KEY',        '2FLBRd@X`|X!2$R q3gS/@`b_Vf}EuhiH9uo;MtT#(+:{%v>$F^!h{;0<PXNQW,e' );
define( 'AUTH_SALT',        'X>G~WO9/O1Ie!od^S3`AFuy;Dd9e+K ,mhcFzG#iou2?#6z_WIUs4{`Yj]h)]@`1' );
define( 'SECURE_AUTH_SALT', '_GBlGor{aC5 .`9zcFc^o% A3ER*0<oAL{C[-`K_F C6N!zI>Cq$0xCsDznXg{Vr' );
define( 'LOGGED_IN_SALT',   '1;p<HSb#R#o^Jy;v<S!m7[IT<Zu{v!uwpuk.5pM }vmCVV.&.9aRAv/l`7jbi2DE' );
define( 'NONCE_SALT',       '?kNNfhqE{!5_Gn(Q4At26!td0i>aC#z3OTpJc_F.*?8xHg3EswoP+DS7t[@pE|8c' );

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
