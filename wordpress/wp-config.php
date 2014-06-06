<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'activities');

/** MySQL database username */
define('DB_USER', 'kunal15595');

/** MySQL database password */
define('DB_PASSWORD', 'jtmzk04484');

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
define('AUTH_KEY',         '/wfzSox-dmpd*m:[joxUu# -R8hlrEb9kE0^#B:<p_p$g[U_m!`oS2ggEIHtpRMr');
define('SECURE_AUTH_KEY',  't(-QgJs+(g2g6}fogndZ0!Cnx#?#j/6k-$/Fd[,{NeR&Ko7o8.z)K }DL[Ovxt}f');
define('LOGGED_IN_KEY',    'Fzy&{ZU|vW0s?ED&R]CBQ%=s>/#}LGmh2K}+JN4Z<7W97v<XJ%LEhbdD_mj%.98;');
define('NONCE_KEY',        ')XAep-0$O_Z5,D?As.Qe5LmH,.XVJqe#q^%At-4k5&d]g*jt@0RAeM/^e@ S(^-!');
define('AUTH_SALT',        'u)`:Tz0(@fZXNIicP|OvjOke6-2thiQv`JqnWPmSZCNSv4rspTR?d0WeOcK45u3!');
define('SECURE_AUTH_SALT', 'b!xrn1@EBeZ)$<moMn:s`k)$E8Amr6s$Fg@E`jWmG?G~Tcpf%{BypKgSS/I84#&%');
define('LOGGED_IN_SALT',   'nzHPfWhjTzQ<4@wubT4+!nBK:<t!SmD 35EnHg[:.07$yH37^O$sn@3jdT>tUWEr');
define('NONCE_SALT',       'mqEf4J]!rHs%Zt72j[oPZUwV1xrpdqykFMmo-J.ESMm.5_h[.NMW,_lRE/u|~|$U');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
