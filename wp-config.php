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
define( 'DB_NAME', 'wpclassof26' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '!rD}$=s)xZ][D#Ou%fp~3Cfvhwsj-LUDLHLnq~IZw&&o[g07;<05agKV0lOBa]C.' );
define( 'SECURE_AUTH_KEY',  '>SH7h Ds5(-*>l$v(0,Xl)mji_S2Me$O]>Q=BgkG16H=RNZTKICnIpGZljYjFUKr' );
define( 'LOGGED_IN_KEY',    '5OZSx*APMy5dN)xcc]jXEm8^1dqV l=_|SP_,Y!WL?#C3~Co/C0.FS)F=OPn.qnj' );
define( 'NONCE_KEY',        'G@(;oB1jq~_-ku?9mDh7;Fu}-{stI*WLq!$x{+JC%&/siu^]LzzyVgFmxGT`VPvW' );
define( 'AUTH_SALT',        '4i]F_/P+jZKj`HV:77*V)O,pE~ua~bltJy2e@y.hU:{4ab,x^M;|zz?z-BGpB(pd' );
define( 'SECURE_AUTH_SALT', '!#2(uLI*P?PoPu0;E&wyxf|E,adSDv;Ock{t/bmUZyyZl8ggc?^|B.qq>x^PmKR=' );
define( 'LOGGED_IN_SALT',   'wLJsIq[?7e^a-TAq;0BS,S%U5mTOl{@c!IdWe?B@nf$XiW%@a(-TS:2A#(>>W(} ' );
define( 'NONCE_SALT',       '-,.~Q||R,r4cw%:7Hjq3]u8c|Zzm0FYJH~ZL.yhed~K{Afc[TLtWW>!b--c8iM2l' );

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
