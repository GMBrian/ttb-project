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
define('DB_NAME', 'techbakery_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'ib(fiaz&V[hWisZ7{}-;Jfy;?`6&l/{VrU,%`4BE2dZvUVn~+B);yt*h2RO$wOPQ');
define('SECURE_AUTH_KEY',  '[kL+@**i*N3C#ls]4~X)c+e,cj|FAo}U3P5c%R#K}h+3IO=x_^4jLi=J<5I$^S;A');
define('LOGGED_IN_KEY',    '/J|x^OsGUM:C*S3rTm#6w?g&UTdLM{_^a0$o7;|mv!MVLcG@D=*86BQ2vlyuN{v6');
define('NONCE_KEY',        '>xr4:);}+w2-Ha)wL|-^{wR?c7}C6[FW7yM+pIv32$DN4Kk;v!5)vjU,^0;+=Tx-');
define('AUTH_SALT',        '|X`:xL#Gw_0cw+2_||Sv]!&jb!]|]Rn2vc]>Lit$I05T)pZmb|-Xk&5[}VKo_$W+');
define('SECURE_AUTH_SALT', 'c|QbM|X2|9Z9HV!=Yp-lQ-&aPhec&[nD(byaan-ji$^ybV+~/`hb |t:KkhT4z1q');
define('LOGGED_IN_SALT',   'BkLg01T#N%?5e.a>-DIS&KZDq/[eZA:u~fI5%#}eDwP>3^Dy0}diC(+uJf5(B^q-');
define('NONCE_SALT',       'r*pR{7+~t4h-BwPZM$x9=0R<aWTc9Va=z+Fng7gqn81QA+0H}D^xkSx*$?m-+:#0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'ttb17_';

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
