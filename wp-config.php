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
define('DB_NAME', 'soundblogChild');

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
define('AUTH_KEY',         'tlBHRJM`[%Ni?fDQX>|9EQgBWhz>)iLGumghAwOch[]~aKzUT^z%)Cxuk+&HYFAW');
define('SECURE_AUTH_KEY',  '@L?6RJv!Mw7@f]}Cl-eLE/%<IOanAJHEi}c,HW:%k%8*PRtm(Er(f0wN-$.aPrSd');
define('LOGGED_IN_KEY',    'Ev_o$d3#9!@xjdz`rKw0C#|7OqMJO u%.)EK#zK~+iI8{Ulhu@%2BbG7#TlT-;XF');
define('NONCE_KEY',        'w0%hE@+RW)HOaIr_md^(:Elm9m&..1)TW#s WoWK[uOY=uv(}8cd*WO12hG8Hmk]');
define('AUTH_SALT',        ':Ua0Ev|l(F[sZuqf0*(Uy974931=,.1lJ^@$un7wS#RD=TuYq0lAry(cCa]j-@,?');
define('SECURE_AUTH_SALT', 'jvY0UFXgoVj=Xfs]VuW>-S$Y({)<6DOPeqaE/F>/*L:3?SP<zN?5}Slcy@I7%Gr|');
define('LOGGED_IN_SALT',   '2Qqyp(6onTw;&uvc_Vv$~hZV_s1&3db0N@{qSk ocza>.|~}sS:2gSE.jWebOKIy');
define('NONCE_SALT',       'Bp@4r|COCD:)Fu*#|>8bf7V/CF0?i53PmjSD^Oaj7wP06Iq%i,xa|x.`#x]:EWW{');

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

define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
