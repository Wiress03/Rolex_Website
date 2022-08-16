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
define( 'DB_NAME', 'rolex' );

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
define( 'AUTH_KEY',         'etKOl.SUU@loy%{%i>R5OT&F)Er5ybdhVU_}H=Ist_/rjC}(o8o>~Su>:/T}?#[L' );
define( 'SECURE_AUTH_KEY',  'z)lb]q`||L);1z$?tp87KGg2{<e&)wp.6_6i~8 {zOY@gKwVJZ7S)pfpwf%<A3v$' );
define( 'LOGGED_IN_KEY',    '?QON9ROlwRe/,3HbB,Rr]R%?!gR]P-:k_>keS/j]Nsbu{t_oQR?!WN?~&s|T5 Ur' );
define( 'NONCE_KEY',        '9P555IaYTk!3>`%S+M-z_5TrO77]q(a-wRK]L4|s+MYY:RG^*<J/:nU[Mb 97Xfy' );
define( 'AUTH_SALT',        'esSx9e/~pqgnrSmh$3sqraQ<cPl9l_q<x)pK6/MR3N<b<X1 nN;kp[WLgGRt]EjH' );
define( 'SECURE_AUTH_SALT', 'B.dw!Xatdu%S_Fq8_tNsdR<)QR*MYS6AP2ej:cM,gUGZm{tsOl-3Dyhvs^oF/s% ' );
define( 'LOGGED_IN_SALT',   'Z|Qdnh0o  v72lo0}w9UTF9{At(Bl7G<50FV^GW0qvwhL 4FK,v~aVQTQ!~|J27,' );
define( 'NONCE_SALT',       '.$<#&K^tz#Cd~vG (_RFPA-ZdEKFU?mc9y@L62G)82?g;se7&H,?Gr,@&z7u[8Te' );

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
