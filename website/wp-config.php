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
define( 'DB_NAME', 'matthew_bros' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         ';;hUFM{qMz:^(4RnQ7XwmOT^V|T3T3giPXkE5;$mBrP@GW?azxYxE*_q.nCReDK3' );
define( 'SECURE_AUTH_KEY',  'C##$~ZdKtIurH,N-f$l)OLh}|U XxoH1K%F*oN1W[g|]|nO^bJ.`;y5{n~G{[3gZ' );
define( 'LOGGED_IN_KEY',    'Sc$9QI/^e~TCut|/5AWEmff00Dh2|lqj{XU1WT/j32kQ90nF?,h5P6g1?Cleb$u,' );
define( 'NONCE_KEY',        'WcsR01@@Jo_#2AaOS yLXzs7PNfnrBv+n1:I*n@yLQ0iF4.bw,ns|U>^{_ssUZja' );
define( 'AUTH_SALT',        '^(<_]y[|IT`|U[IIS,]yQ>^eop6uE<nnT8e{VNI@8u8eogdGE9bKWKi=gs3qq9$P' );
define( 'SECURE_AUTH_SALT', ',*NoIhMMK5>{7cJ??7xL^dbp?kW,*4+HF2}_1`8XmI#&j](b08[C`jf]R{XV]{9!' );
define( 'LOGGED_IN_SALT',   'XIDt9!B!tt .g}X6!bz;xvizWW(sA$lUiE8&oMsWcj*h:?AmWQ~xUjQq8SF>!N^q' );
define( 'NONCE_SALT',       '*},Qy!J+ DxNq$3 /B,^)>l.@I~D_N*f10z(oZ 5el~P50)L*?gj5.v _T*]63Dg' );

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
