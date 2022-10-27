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
define( 'DB_NAME', 'id19776154_wp_b96215bfdaffc7476a8af3cd5dcbe946' );

/** MySQL database username */
define( 'DB_USER', 'id19776154_wp_a04637c84ca8bb6b75d5a5b7ec935c98' );

/** MySQL database password */
define( 'DB_PASSWORD', 'b709810a5e09ab9fd3999b5a3eeac95701151bc5' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '^h-h=R6+&r&r?X>=K%8]/cs*FY?Wz6<S^54+}5b ZoKA]0?qpgy:p*aS)&QP#J/L' );
define( 'SECURE_AUTH_KEY',   '<iuMoZj[_BX.E1cL}h-;jwi9HX|~C%8LFtmJzn?rrb&XAo(|%_5J+f3L[8)i<A5]' );
define( 'LOGGED_IN_KEY',     'N`+!R2koUw&aOo2&B4R+=d:_s(YYP {W3@2`atXkO;rWBhuY8J;TK,Tjqx/1:}/J' );
define( 'NONCE_KEY',         'Jt3<- y!dku&6t=**W{sz 4m->eKV;g`kk//nBfRW{s:)Ko^4tEkN e*{hi#[jWS' );
define( 'AUTH_SALT',         'n.&ac;cj_#~;xH~x::7x! mr:vs=3&8lmZ%I,w([#AFa=2c*o?bZiYRojJ6CS}WQ' );
define( 'SECURE_AUTH_SALT',  'c)ZOAid{gNz?hK(6%:FB<Bb{x2b]PdJcA*d9cW*|.:;,x0v[}X20)vbLKTG#o1I[' );
define( 'LOGGED_IN_SALT',    'RL.l#XE%ZX|5*y%Wf1p0Z`i<hoYIvf._(sS2Bh4r,;P{:FM_KY^}k{Sv[X,?8>0Z' );
define( 'NONCE_SALT',        'V2xBf69Z4Y<w#d?4cZ7X|/R)}Ugn^_ k5{^@_5ydg`iAz1s_O^3=B^}};|e{XkTP' );
define( 'WP_CACHE_KEY_SALT', 'LBHp%6a(Ja^*4Af0,F6#c/6(tIm.FkSv3X@lfs*[~>T8odvu5|WG>kGdv$Fcs^sz' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
