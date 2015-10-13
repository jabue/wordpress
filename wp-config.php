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
define('DB_NAME', 'shop_ev');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         '&T1lGa-:xj>qg[HA)JvVT (mh<Uh-/pzh5x@g.1:*l+cI^VaYmE-jM!4?!S+?8mE');
define('SECURE_AUTH_KEY',  '5pC<I-2N.NghQW|@,sc*uDHlYoe<J0.@l{j~_.hrn/$Q 8!T`%k_~%Kg=TeJIFp*');
define('LOGGED_IN_KEY',    '{Fi^JI++D/x,X)l:{zKCfsNzb]dao5jN9uqg580ynI0;^9lT0t10iMaV{C+)sEKI');
define('NONCE_KEY',        'j~L!g2OtK GqbfBZ!0=n=XJMEY9eJGCv}@y4|]T+$Ttcf+`=2Jd{}:{fs0<+JS^i');
define('AUTH_SALT',        'y&A? A4b-K!5S$z>I+*i-Q?*G2y=/-Z)k9~TlLbAlya0J|u-<:|fx2mv)Y9TB*hj');
define('SECURE_AUTH_SALT', ',tEh7.B;RO.[o:cWp:wthkv?4NA.mu^q2tyHP-&#JOUuuai>{_~(oo+kds]b[|.n');
define('LOGGED_IN_SALT',   'n*yvWifW^Ald`,Nb6-}n,nB}-q)T@ S3H:@*m8b7k3Dxv*SrZljY+}+Ry+rrM&9h');
define('NONCE_SALT',       '%ODHkVq3&)XDBD;rK?5c[U{/QB#dZG-mXl4}q$1(Si/pu@6:P-H#v{wE/}$!^c: ');

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
