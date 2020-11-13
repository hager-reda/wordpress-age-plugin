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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'age_plugin' );

/** MySQL database username */
define( 'DB_USER', 'hager' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         ';]qQfJ^uYyC1.OuLD[}%cQ=?Nw[+2id5nML,M.&51+y~,3{;{BwdA@H+?Ybz}FGr' );
define( 'SECURE_AUTH_KEY',  '=03Kk1Js2xLz3>uhYtjv3k+TJF/~i|sFrAP#dk{&H-L*%[iBJ..9;?$CoR&49PN$' );
define( 'LOGGED_IN_KEY',    'DM(J#H18O*=Zuk(0?Ke./;,N@|XhET9k~k5I~,%!&UIOG:%E3yPh<q>[2G&o/xX}' );
define( 'NONCE_KEY',        '*/%1M<sk Cn<3_-$bnarqO$#%~OaZvOx9f*y-Mi)[}Z&ol^0X]_3bn[Nh7|>[U;o' );
define( 'AUTH_SALT',        'iT]{CWHqJw_(r n;fPIWtc}i$%?j y04q;#E{#_ry}h#:#zBZVkJ=l6.~1:GY#@/' );
define( 'SECURE_AUTH_SALT', 'S)YsgR1dq6it=9#j!{v~Ll!fk2,O|JdTeE?C1n82p{Fa- 13LED.fEfCup)ik}f,' );
define( 'LOGGED_IN_SALT',   '2n9<~K])yt/`*F`<Kr;B5]fR0HG~W_ROv?XnJ[xs^A<K1`scmu$VLou{MPiyVl.O' );
define( 'NONCE_SALT',       '/#>kmMT6}K}nJoJY,fe{I=O3+6ik) 6N^7f_zE()|_{ZJM7e8Q$Ga0o~#gn%8!9[' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
