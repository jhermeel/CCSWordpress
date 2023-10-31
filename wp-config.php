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
define( 'DB_NAME', 'ccs' );

/** Database username */
define( 'DB_USER', 'root' );

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
define( 'AUTH_KEY',         'Gqj#&H)`0;qQsRa+N_?>I+Tp3iV3)Ax=#~X:a>T`IqF)(x&Q,ub5i[JHaa.mk&R=' );
define( 'SECURE_AUTH_KEY',  '1sasS>Li`0Rm?b8liNx_N?hm.w]>qQ)^<{k,G;^c(!wk^(Wo1<)$<:`*FRHti>En' );
define( 'LOGGED_IN_KEY',    'JqNO6</e}H``E@Ek3c:vN-A!yShyG~{O/L*_]OLC/m8Wc2^9*$,%WHHP.u&~beMf' );
define( 'NONCE_KEY',        ']=1?:=GW#]B!KaC}3l_Y{-DT&)*6f**.y9nNmrl&90 dMRA<Y2Xk5&|jXFiYG(}t' );
define( 'AUTH_SALT',        'dXpR}5E.-H#ldA&YV$QWaD@9{Lb-p<M!1g|duvzIQ%[3^Yh)I6fF{6z.8t_S+ F{' );
define( 'SECURE_AUTH_SALT', 'QDda: [d.1qv6d#0[w #7(Xtv^ZZy#[QE2`7Po9E}H4yZ<6C.dII,9{QbfPR;a~W' );
define( 'LOGGED_IN_SALT',   ']|6[~_=SMt,`#v]#w`0j5VP7h<mea-%7iQq$X6Cg^|k,%<DNPsr,.tt:X@3e?3Tn' );
define( 'NONCE_SALT',       'L^+fs-mG>Q<lp&?yi4I)?. ^,y-N)eQjyh&LV=gs6.{Qb#,azo0RYh |`wduT``J' );

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
