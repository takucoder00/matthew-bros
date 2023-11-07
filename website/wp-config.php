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
define( 'DB_NAME', 'madondo_home_care' );

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
define( 'AUTH_KEY',         '+v70 yEH 2iuPY9q XSvQ[V_:k&[fV*g_J!1U?01_<@#=M<*FUx(m(Yv@^,*I6na' );
define( 'SECURE_AUTH_KEY',  '2oq.~ bGp~KA([A?^n`WK!uSDFNB?QcFNS!;)DQ~,AML}F6)q:kPf)bd# 3@J6ON' );
define( 'LOGGED_IN_KEY',    'J.;)mW{>tE[1^u9fz)[x:VBWRZFGmK&J5?*BiS&i?=v+*h;J8KU=F{B{L?M#cdmV' );
define( 'NONCE_KEY',        '=P^#ETo)mW&8}M3,{2J3b`f1zbhC3m8]}Dk5}3vHh+B.q+?zydwJSGBWE58c,)4=' );
define( 'AUTH_SALT',        'h1z5A{4(aVoO7{T#mt:269qcCtwkX#]+Q9bO|G-jWNVPFX~[1tnnkb+zYe{ldU3L' );
define( 'SECURE_AUTH_SALT', ')pyKN)cKGSA8syWP|eYB,nPQCd=vCstVz{..6#oes/VEhorvW}XC.~>Di/.<e_d:' );
define( 'LOGGED_IN_SALT',   'djPr>x(.xKV#z<ddpz:+>1)l1lywV*G^;iB5iV_EfVm=/Qe)<_RDVusJLr9RQT>o' );
define( 'NONCE_SALT',       'y)@/QekQM?y,g(vhMv=H<;oNHv&{0Bd}q#M<uhQ1:F#5ynQ*Rw?kJ+_;BahL<,0Z' );

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
