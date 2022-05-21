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
define( 'DB_NAME', 'wordpress_database' );

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
define( 'AUTH_KEY',         'xC=Wxezw?NfotKIt:y3nSQIqf}%a!#^CP^pvSsm9A}s9cDN<#>T+Hp&!IK+E(buh' );
define( 'SECURE_AUTH_KEY',  'd~)*davYCW8|!,^/)v2+o`]**55:^np@BavW,*= yf#WJ 73Y:^f*[0k(-6n1_W|' );
define( 'LOGGED_IN_KEY',    '(%Z9/$53]a8eT,^_G7G8ichxM`|c|cxL]@kqe2+z=h9Ta8_cxQR0N>36V*f%:TH7' );
define( 'NONCE_KEY',        '/oHy~j0W*;BRyulaNQKs`-/&B__wIW`OY=rr`GMUmwf:=?abL-%0^^RUx)Nn,8p*' );
define( 'AUTH_SALT',        'P1w,ClEtfX!r.N3y=L,H!&_,/k86P|GTGo&aLe`Wk+Iit/5DR7~6o~CTs4#=Aw4K' );
define( 'SECURE_AUTH_SALT', 'DJ#O,Z,Z<X4.X&f-+*tj!`gE~L/=RqCmYC& |MF~ `Ru;7,O^S=ABR<G@N>S!^lX' );
define( 'LOGGED_IN_SALT',   'Zz6)6]3M0+At(~n.<G;%FPlMuHLk%|$}z-dFG1?LKz>?#VnlF)Oy:@KO{+>+f,}?' );
define( 'NONCE_SALT',       'FWN>Npb^aGqszdnx@*`qAq>-qOkeXw$8[%}x>H7Y8aT`EsOUTlXu`;?x$%z&LQy_' );

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
