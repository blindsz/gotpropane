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
define('DB_NAME', 'gotpropane_wp');

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
define('AUTH_KEY',         '1D04d7g=X*8K2i._ez$:Cv2>F{e(T}GSy[#1zsggos2~+N>q+;:>l!D!#*~$^DH?');
define('SECURE_AUTH_KEY',  'nnYVAh6$6E_E;V*6fEklE7ULJRrzU&L~aX<6i;S9JgLvx_1Q`H -R.Y[-)[V!*y/');
define('LOGGED_IN_KEY',    '>BFx{$hUTIeC-pn3+K}pOH8-r4Wh zQ_ %ghk;lAjn9Fankk03,^zpAy ;{S~U.W');
define('NONCE_KEY',        '<+#0JZh!gTz#KR1|pdL!lb3iaS%)d]R]l=XwfZ[j)j(<{)@sGnOYkAumH+CcvCMm');
define('AUTH_SALT',        'M!LlLmi5G*FU3nNnPCkS,igJ(b#|:iYj7HK%OPKiV<WB*kU0.$z<i;+=qSI*/XDF');
define('SECURE_AUTH_SALT', '1u)}&iSrLS>W#pwR|M/M;:LL>01IRPd#&zaUvm1*3WVHkk+8+T%mT*^jL]wi5T6&');
define('LOGGED_IN_SALT',   'D)Zf)`5YawNvakWR[IvBBd R_uQH:F^lrsSYpob}2XQw0,9ZON+{E@sDi/EV)(FG');
define('NONCE_SALT',       'WW23dg#Uh-2/zMaXJ+WJp/V#h~%8~9 +7en;N`G= Y%$!`]s.>$#(Jx[E{(nMQ!#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gotpropane_wp_';

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
