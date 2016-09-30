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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'nitrous');

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
define('AUTH_KEY',         'dE8Zl}vFAvN|AVd]kwc%YjD%m~9Y{:NoqN%D[h2)GSbU`,~:wH-1,^JyJ8,[I7o#');
define('SECURE_AUTH_KEY',  'r=xgP2Pr;MaHgMu$$CCYjgLBfgH%=D[Ir?w7+I16s l;!$0x!XnDMqHQ#M= saE?');
define('LOGGED_IN_KEY',    'bc|b9J_%GAcBO b?fUM],LK2KP=NLF5rpTS%4![g~E{&u<Ur1/*I@:U}!|wVfp2f');
define('NONCE_KEY',        'Do:mTqxMjKBG1``upd#=<a-C Lb}A9W`&~e!~^:SVq+z8k(78B 51E0[ wgHOGl,');
define('AUTH_SALT',        '~ax$1.>mvVMzOUipj;p>-4ailm)n_F:irne2fIuZ=NRLUxT7ZbnS]Y9<cYF,Th.V');
define('SECURE_AUTH_SALT', 'pEN>Yxx?zRnc},(-cojr<;yk13  Y/?nD@GV! ORVx_[|F5uh-OOR5`UCfu{0RX/');
define('LOGGED_IN_SALT',   'yY0wX^{),1=-0y1D0`BnVtBS*;F~{*.edftc0Uli e;-0Q2Z$L>*Dw*>8K}b]%s!');
define('NONCE_SALT',       '~%&I2veRBFy FMs0Wl2LW9Rq6BphsF7vjuXiG)Ok6%>;R?_R)]~s_aF&/|KLX)IE');

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
