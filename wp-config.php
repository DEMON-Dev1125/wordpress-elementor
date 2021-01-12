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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '{==>Uy9PqwJqks]6s3$2RU#&xe=-o{rP |5gNU=drp%b,$zwL?#dlxQUAN1_~iV!' );
define( 'SECURE_AUTH_KEY',  '0hAJDwf7?hp^E3&/[<~-zoHg4OTdi8^Tf1~m1LN:+sArBlQ.w&MISp{7&h$G|h&n' );
define( 'LOGGED_IN_KEY',    '<s}Qj|tmpq5W]XKtU$z7E!oxAn5$V1&cg+apN=9YXfV!^;f5B.5DeX?$MGLbKHK+' );
define( 'NONCE_KEY',        '#;ls9$Idxf1qkUerY?mTmCS/n~5>_H,i2CKY0$`wa/+TrdjDuYJ5ql9ml%Su@K<q' );
define( 'AUTH_SALT',        '/8!~tbQ~gxz)[U]y1;8|.i>}e^G!!5, bZSEAg5R|?$s3D9f3!(Wj0A.#Ar[w[%C' );
define( 'SECURE_AUTH_SALT', '$v:,P0Cgjmsesgxd#+ai0E[8ZlU6A]}t: ,O7!n}cE}qtGg&+FU5>47if? J(2LN' );
define( 'LOGGED_IN_SALT',   '5nhLxO<;-+2V,op2:XRCsb , |x-u;$072wFoe+D04I8gkzGaG5mugS3o.A:0@91' );
define( 'NONCE_SALT',       'b6-^x.67=6]b>n0Z!A5+y:uKC0fCXw_5Q|4^}-pGR!*dwp~<4.%`=y(Bm<zUqy8b' );

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
