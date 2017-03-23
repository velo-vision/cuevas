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
define('DB_NAME', 'cuevas');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '=y<ndc:p71@CCfOV/pzq5kU^+&e+GVDyPQLlha;n#B7.O.vAv+AbZJTj@MCmNC-F');
define('SECURE_AUTH_KEY',  'YQ,+`Ge5jS@`sqZnkg7u2X|,&h6osUOw3ciJb=H8PBmSq5hi.ldZc[ )Km`Z96a!');
define('LOGGED_IN_KEY',    'UL>]!bXDcnOzd[CJsIKM0nMLa>~hnNnUvah&WB9-}*9&[4X.>n*3nMPI6_}N9;TF');
define('NONCE_KEY',        '}xec#]c+H/Kuq8KFS9G}x N#JK|, [K(oiX9!K*c-2&xzJ3zj6`Q{bp?,jMjXjfo');
define('AUTH_SALT',        'Q&?x_!_CB!;rD6eB<>Pkeu&u1Q7=?[0`VNIA_.$w*H;a6()o`{S`D_TT^xK|6/7;');
define('SECURE_AUTH_SALT', 'Z}7Bvc`eAeSZe]TGjJQ v*bxAAYp(17Yo&?2rUc6]UGS|GDs86Bk*r,R6-3X>9PU');
define('LOGGED_IN_SALT',   'm`+.u0@TDae@@hSl9H)JETf,Oy$7l[B0Ae?2v3t$lvP(Z2@7S0~I$,cySgm@HCV&');
define('NONCE_SALT',       'uUi}3tJyl%97eLjHO66nG:6mq]qB` .,(f-T,h^OSSp(~?mq&v%U:YrSt4C|?D6N');

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
