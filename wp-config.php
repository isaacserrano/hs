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
define('DB_NAME', 'hs');

/** MySQL database username */
define('DB_USER', 'db208768_dev1');

/** MySQL database password */
define('DB_PASSWORD', '5j?ge0nK@M}');

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
define('AUTH_KEY',         '6W@B3)BcSGPhEzR~;U9>HEf66?mGm/45-enLvcKfJ[4c<ubhAd3]9^AugsW:BkW-');
define('SECURE_AUTH_KEY',  '^P&?3vB]Be5C2l*}^%`Ae]1J$tH29fooFFb;wKBC]RaTLK-bY0VI>ZLu ^R9@4x~');
define('LOGGED_IN_KEY',    'wd[F6Gk1:~&u.jtSnbo <)oL9~V>#Z8X2XA2zL4+f`3xneP@sJ^Fb/tmnD {seoe');
define('NONCE_KEY',        '!(B;)o8!~|0czt#M)RMSaZO4!4;;;JWCH;FN^NRAnL %|z$>%~CLJSwXgxEapA&5');
define('AUTH_SALT',        'y}G>Fa,Q`1YuF,]F3c|$Nh7-)m1h@JK:%9L^4:ev^EKZO!x1KuPM*0MUw;-Y4&_Z');
define('SECURE_AUTH_SALT', 'W_Af-HtfaL-lD>0cDstmldH>k]5GRZgZs91S~m]u)5vSw{GUn#2%sUu|SyxSi3q2');
define('LOGGED_IN_SALT',   '?WbA=V2p3d=HhG}:*v 20<B^}=nR0VV86ywGBs9jQ$G,}+Ho4W_+F]ZFTR9f5F~`');
define('NONCE_SALT',       'gTx%~U-aZwCm.Q4NqZYD2CKl1 +].K;!(Ycw]&>)~nJGF&ZE1.#JdRVq2wpJ<BFa');

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
