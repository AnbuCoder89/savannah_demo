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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3307' );

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
define( 'AUTH_KEY',         '{uvJ)f:h242512y}X>#CD{9e4n@-H(P#V9;bs78F8q(I[`:&C+4;>^h#bSn>%.g5' );
define( 'SECURE_AUTH_KEY',  'NElpOECq[rl2 yYQL5LNPJ1{;#19uu[!$,hQpV)F<Q D#w+yxuC[$DMg!byIN;B2' );
define( 'LOGGED_IN_KEY',    'Ad8m<k2jjI{`~Ed6Hg0p_i7N;;9[`}rOc?m-dzMD4-5}s,&J`4x|S^@VzEnR]?jR' );
define( 'NONCE_KEY',        'Bg|t/eD!n>OS!#~6Ppk<;[]h-m(o4AThtO-Cm;2oeG!_i|&m^zFw)  eG~EX0/Qd' );
define( 'AUTH_SALT',        '_Jut3Q6Ds@@p<g&gVNE%]5[;8=xucP9Hzl]T3Urv0nvPf__:qo$Kh_+XvFwTg,+t' );
define( 'SECURE_AUTH_SALT', ',wf2nI[@B`lk[XYPY@kkw&bBq!xtI$:jcm0LZXz>|>uc%@qw8g4_zogxz`xjzs42' );
define( 'LOGGED_IN_SALT',   '|k1<hYL(KVy0j5@#WNj0d8GFhEt0bT/(WzedI7xHspj0*&*|8+.4|a+nXE[XMg|1' );
define( 'NONCE_SALT',       'X3{l{zzS00hR%r>s`1Zdks?rx^.=;UF~5~*CYJl<NqB7g:^:y`}s*zn*C4AN-$u+' );

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
