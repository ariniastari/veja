<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sql561885');

/** MySQL database username */
define('DB_USER', 'sql561885');

/** MySQL database password */
define('DB_PASSWORD', 'zP7!yW2!');

/** MySQL hostname */
define('DB_HOST', 'sql5.freemysqlhosting.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'X+];!d$mu,XvD4pWkQ-$SV|Ck+M<:bRP_Ez2o7]dvF+btU-UKF4f:[@rOb|!Dmde');
define('SECURE_AUTH_KEY',  'NzuvdUAN9@mD#](H}sC&s3dq=o;SHen&r>+__NZ^Rqkn?SFhu+>t*3-#;d=|?<2[');
define('LOGGED_IN_KEY',    'yZ%yK^BBE)^[Qm.1MK;5_ V{t([wXb2UN-:Cg)0ER|Q,]}x*6eD,:+|A9:fUIn|s');
define('NONCE_KEY',        'ka]S jjQ&VLaZTH%3GS,Z^i.XV-&<ZQh#`NQ-jeDL0 !>rXDQPy5t[n=s>>~!$b<');
define('AUTH_SALT',        'p2mU=z](DS-RVF^Hy78E]Apr4|1cJE-vQ%NqO0{3qaU6q2vv`eh42Ed]gv>xzQ^y');
define('SECURE_AUTH_SALT', 'LJjHD+vk-7t3/=kOQKNWKaZ;-kWp2!-^MRC(bsQ?G1w`]|fmK0M3!GY|~y^,a}_%');
define('LOGGED_IN_SALT',   '{?&>h?]2FPda0CyE5U;F$C sJ0+~^/!SR^M-(D]M<a @##t<+X>9O$Z+g@^r%|HS');
define('NONCE_SALT',       'leu-_|{kLohCbdhSyIL5 <#TV|S_BSW{ ?B[wy:2Ac]xH6?oS}!-LXgw7E$lkaTE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
