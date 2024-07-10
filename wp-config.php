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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '?I5q`4 LV,-9(Px!H;+W=$!f1Yl/%$elJFC5vtg@Pu{VltCcr13/l=4WyOXY0WI-' );
define( 'SECURE_AUTH_KEY',   '0mrDT>tg{nHLS1Cy6rA?QAUI4EEv}i:sF-S+Ai/,9Owoi<@A0p3%MlAWI~}/sM;,' );
define( 'LOGGED_IN_KEY',     '8mWb4} 0T5`/bdVdt<cc*xrbk&^@p(`!,mg;5wt$208R:9WKoKY&E,Xt0tOT{U,2' );
define( 'NONCE_KEY',         ';7hW*D~,bl7]7/YKL+7j9hr&zwr1W}F=RGL!&8Q`}h( $e;>;0Z*K{r3?*1>jQ7F' );
define( 'AUTH_SALT',         'A6-K[S]+~4}8F.cy7/eK?%=X-;NnlAJ(vTl_=[`i!R#G_D8(2q~rE;c~Ywm[LEA>' );
define( 'SECURE_AUTH_SALT',  'VV7ZM!e&>+`HL:2kMzd#XR-*%<NL[sgQH83,DywY v.!g#?1rn%s{NhY!8[Q#~Rj' );
define( 'LOGGED_IN_SALT',    '{R:` O32@r~@tUKidf^)2d]PrvR<>mUuqWF5Rsfh+5>l/QKE<bG}lh|UAZ]nS43!' );
define( 'NONCE_SALT',        'a.O|G1h~{t.uXSyeQicLafbm*chWG5l9{5+%Ly6f>4-E>`V)xAWH^yL*cakx,:>L' );
define( 'WP_CACHE_KEY_SALT', 'I7kD1PzIY^VPZ,,16Pp97YhIzED&(/1:.F^b!~rNE(lYqxr+-(<E3e?~@J@#bAaP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
