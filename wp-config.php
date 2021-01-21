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
define( 'DB_NAME', 'myportfoliodb' );

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
define( 'AUTH_KEY',         'gE+XQKtiuCb.:z4?Y(ShMRYL7|7](5/(`!ibn$/cL*CaIZ[j3S @<FmkOon.Ibfa' );
define( 'SECURE_AUTH_KEY',  'JA1[b*iGQr7O%lv[Hdzw7Xbl|6Cyh<)W%BGbV]v6lA#_8msr|2;Q&%(k?.cyHY({' );
define( 'LOGGED_IN_KEY',    '9ljJNTq>_D[e<KT L(p+9<wT#e+9-*OyHtqG~sqrOZ@@At`4bqDK;q4|eYMFVGd/' );
define( 'NONCE_KEY',        'Rj5s*&%E,SX2Up,@x4Bu&>h-M}!p4KSX<7kuPs:0s5}9Z:>|l1nct-3U 4-i%B}V' );
define( 'AUTH_SALT',        '900[?Mn#xpzFs[(+gQ=^vhwj2%CB}Q@9xMRqn6R`.L_nafRK^AT%(c.fsy_6tG0H' );
define( 'SECURE_AUTH_SALT', '~|&ww2be~lo /sE=0>B0 _ K,ahD>Gzuy7*VD#xS0,V<si/BikAEmEzB2rCOiMP(' );
define( 'LOGGED_IN_SALT',   '7IG<A,1`k%d%}1A((Tfn0Y=-pgM)v7[epp=o@Qfo5!*rxIM@2ME.1v0UX-/nq/=b' );
define( 'NONCE_SALT',       '5^y^zuT%Ej#>[Q#a_b8.f`4?n N87yPABW93`9Rgs-{k@wE@k>Ee1_o`aFg:$e.M' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'pf_';

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
