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
define('AUTH_KEY',         'yQ=@`>j`ARet{^q`,;-!?K$G<dZ20Q/g:&ke:Aqh`.1dA;UJlS[`xm!nfs%q4k;-');
define('SECURE_AUTH_KEY',  '[?w8o7JI4*BZ7W(_^JsLJ5qe5.>c9G w![b/H:m]_]#Ya)8i#Fc=_s[Z=}3~b@~x');
define('LOGGED_IN_KEY',    '$`5}yC*Vj&$qfr%3(}wsViyQE^IH@ Px?rXo(vT$mi]zu1`DH3VF>uG$1?wO$=nW');
define('NONCE_KEY',        'ns#I_7]gL Xw8+a|hN<[wOC%,fWDR6C/OaJKC{01d&%oPrVCr|B_bnF0W0UY#Xr}');
define('AUTH_SALT',        '8e@&,hS2(]]>fYwx&!jr`(QcU>.[J?Bgo}lApD%WoJxf$q-_}M}6EI^C|8AEG6*2');
define('SECURE_AUTH_SALT', '5U]KBQzNCS6cI2S6)W4/FBw|pX;bv#gc{SDc`gY0f):>q8Y,!?CL8G=%dYn<3`4?');
define('LOGGED_IN_SALT',   '5D-Nz1q]L0{46k+mq=^5(#!w?#S+iI03dCiP2Nez.Kn|r!PlzL.glApiW)#kRPD5');
define('NONCE_SALT',       'DA>.@GPL=77F~J}[~47K/CB#:sV?H`y6ss*zXLQBo@LMZ}@GBG!76Jq5f <1tWZw');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'gotpropane_';

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
