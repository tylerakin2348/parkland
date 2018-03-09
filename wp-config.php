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
define('DB_NAME', 'parkland');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'CYp0)|T!)-;KX_DU%xV/Fw<<;A?PU=;!43Dd<|h}qwv~n^0|I$H^&9^O_/|YH/cd');
define('SECURE_AUTH_KEY',  'WJNcg@u,%d*/XQwzx(G+@O){nm|Xtz?S^|TxXB:||1Xz!Ha)3*akA/wUZ+KXJE85');
define('LOGGED_IN_KEY',    'km(;p{-Ft0@jt$zexz2Q`o,y+$[B~SG6}<tWTZVK@vHcL&7i3M&En.a`lup:8h19');
define('NONCE_KEY',        'oaR[>yOT8t!8cUQzlvMw*KeeqF$/!z9U_s+#c3{,p%1P1m&B10-BZ!M$kvjk~!Y;');
define('AUTH_SALT',        'P!$S@))VZBS|`s<Z(@2>t@$Q0]lw(q|zVi.9|r:xLrfN>k*<]-r)^z$VG&UW|b9Y');
define('SECURE_AUTH_SALT', 'S<J5d`gxo608tYNip}_ThLt=qyG/i_)?hRydi`{oL</]wTsHj_*PT+sB*QC9[|{8');
define('LOGGED_IN_SALT',   'ae.=(uBb[Vh-*6b:Xacj!zWd(1G%b)6.leFAcc)]W6[C.Pg(__;bcE|K({/j*=<t');
define('NONCE_SALT',       '~(Jk17{-w<tRcgfV.M+#rz@qG/mzzbRyZs>DB1qov>>Td:.{<w|[3#|/6.eM24JO');

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
