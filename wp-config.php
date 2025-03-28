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
define( 'DB_NAME', 'Nguyen_Duy_Viet' );

/** Database username */
define( 'DB_USER', 'Nguyen_Duy_Viet' );

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
define( 'AUTH_KEY',         '5yYj29.&u8{l&R$fE F($(B;<CJFLoet+!DC{bN#Z{kp+y^-~umF(5&hyE,3lg,!' );
define( 'SECURE_AUTH_KEY',  'E&5CKm{#d}+isGtldQAi.&Thi!Yq?V4<gBIP6ca4{(FE5.S|ZhXT/7M{^c0A2`|7' );
define( 'LOGGED_IN_KEY',    'AJ`W!74o hH5o&7kQ.%gKUiC_p<9U2U:ZvUppW]Xg/T8^LPw$:]LM_N/A;lFoMJz' );
define( 'NONCE_KEY',        '+hI`UmxOy.ti7|5Cs9kFTrcajU,1[`?4AD}yNxE><CL>;KtlVveOGU|&?*u6T~lU' );
define( 'AUTH_SALT',        '{n_V]S.fQ@mp1/lgh@s&)A4bx#V-WFv`~y.a0U7)}:Bt;y7`ahVHmz;de@wq>S5{' );
define( 'SECURE_AUTH_SALT', '],/?37Po>jSjnh.}aR@j<KmxGA3cO$-/|-+E,9`F@5H3.9Vwe&[)O@XIEs<+(-;u' );
define( 'LOGGED_IN_SALT',   'mH~0shT^cXRMNcD}Kd}e v(LO,;(sM_g$AYLvm-4|_^6%V,KFXHumMV@l-e7Fl0z' );
define( 'NONCE_SALT',       'i(?%x>aY3>$S50!ve+*<DSI F/5dK^0how-VA%w^!,ttg%0q(6-Cgo|ne6[fqp+|' );

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
$table_prefix = 'wp_admin';

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
