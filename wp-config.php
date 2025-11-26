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
define( 'DB_NAME', 'chilova_db' );

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
define( 'AUTH_KEY',         '#P-A1*5`H=|DUEN[<dj,j{I6t,a2!Mfdi}IEN$o-mEZvo>#L#6FL?4],w$=B^YV>' );
define( 'SECURE_AUTH_KEY',  '3nXIT-<7Ag4+2K[eK!UM@mbg>}(8D1<+xk5XNId:WI8h|M(i[(4.eaTHgx$Kp^/&' );
define( 'LOGGED_IN_KEY',    '4uILvBS</ad1<7e_!Q;}5X*%up[W`Z/Zvp`}lKvIgHjV9wKL>yW,( 1+VF]~e~Lc' );
define( 'NONCE_KEY',        '}q4+y~eAJXCvFLSBFJ34D#SV2GOhSV1+6fA9./!~Gic8G4uo#}Nc=w{c95MkzFQ8' );
define( 'AUTH_SALT',        ',_^ff9jx%H(TbJ-WDXEIN#RyfREU%5+:R>RMpBkBW 4JU5Lm{ndb1E5knOWG<:Ir' );
define( 'SECURE_AUTH_SALT', 'z51~wc~+5EEWr%xO[/r|o8joflO2 Y@1Cuhxfp7@bjz+uw-1b+(F^VGzuxU@W1O5' );
define( 'LOGGED_IN_SALT',   'iqofJ~C?k-xG@^~rAQ3cn]tuUdW]zROFIH-j*hL2fR]~2pa64ea@Cn5^==|X|E(x' );
define( 'NONCE_SALT',       '@e9 L(oY.YuaG-Ld.wq@z}HjVcOzba~$`r(J,II^W8.pt(u}1)f5 4VcvcctOVNs' );

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
$table_prefix = 'wp_chilova';

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
