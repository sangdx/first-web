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
define('DB_NAME', 'wp_sale');

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
define('AUTH_KEY',         'ooRiDYVn|*U04iJK[S/hb7Qflq#QPDFmY$8W.s%HuHElt+3tzV&_*t=UN5l@)nR%');
define('SECURE_AUTH_KEY',  'p[?sa>)*ba {HP>f%Q`,b$Qc`T6kX!G#UI6;H5gW|,)utLZ7e998-k]zU)P10Tmb');
define('LOGGED_IN_KEY',    '^9eq@xr,_dEYo;4)C/%lEqhcN=VO38R|z<mY,f>[;}-]lX4a(R3Ua[zZmh+oz:&k');
define('NONCE_KEY',        'nl%qxMys=8w|/?k462B=oT@>UTNcF3D0GU^dI[swS^2v^(9V3+$pIz>G/GSZ(IId');
define('AUTH_SALT',        'W+VaqsYCtU]5KbJ&$/3H~^)TIR&KO^skloba5-|O5}EhOltUf|i5R2HFbgPDLVY>');
define('SECURE_AUTH_SALT', 'vym $`X2V7c.Ok;=@h:J{#?ifApOr11|L&?!(*_=/+X?h->N9Tr_w}-Uu2_(2~R/');
define('LOGGED_IN_SALT',   'Yt}EQ@8QOH-?g/nA>{RRgw&y= 8Q1P1f_~Rx-K5c!TO>ovg:[DMx(lFG]7S<>r_=');
define('NONCE_SALT',       'mlTqEk.{&U8%`~I2v#S Q_(#z+[P%faNIP]eM+-M8~^!f<u/LL.@B*|Kr1pFUi!A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_sale';

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
