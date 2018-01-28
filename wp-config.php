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
define('DB_NAME', 'curso_wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', '1234');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'O.O-KC1s3Q[O11%]F&Hz&{x%*Xp?1c[d6uo8A)V#VyRg GR1YY`I= +f|o@yav:P');
define('SECURE_AUTH_KEY',  'B?l;)K:|Ec(sa?<JF~^ce eiIbSJTWe_AP$F4ywVEMKG~_`O%7p_UNfoI(OBVmV ');
define('LOGGED_IN_KEY',    '4~FYrglkW-myIg7jxTv<hJT^}]w-wq}iIC`*vt_cq*_bpFFQxSt~+!R!Y`v*&-Eq');
define('NONCE_KEY',        '6dO6,C@kgu*USln6o)0`CP2o{UV-;Z>e#4UG[T/fB<KY$~| ?)%y{`5;[8Wj?&??');
define('AUTH_SALT',        'yw8<lwlq@~NSaDLeC(ra1S$1U3X:Tiwo%ymA=|F#JN[:7x1QAe^@97!fMH.8DD/O');
define('SECURE_AUTH_SALT', 'FcJ2{hx;E;=BsT(7t$Tu~y-$Xe]qFfC&sV?yS?@o,pruU_`<9(pOi{1gVJ{=:=d;');
define('LOGGED_IN_SALT',   ':58iaEFD*</*^]L~!SIrQLgE;iu`e-S%9YM>Z,MCR5XXaqpSu/^U6gwFJ~=G68U,');
define('NONCE_SALT',       ' 7?#hV|I4;XZHIN0;JPwW}N7f*!jy <mbc<e.C nQ]^#Uz]:ZB}3*1wY[%DWn~%M');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
