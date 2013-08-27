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
define('DB_NAME', 'HFBC');

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
define('AUTH_KEY',         '}5::PIFP5iS y]S8+? -mEF9@C0g@l8eF8W`hiA+m~Jn$3h}1oN(+%Gf| =2w6]l');
define('SECURE_AUTH_KEY',  '7+X,=yIYqWcWjN21|Pw6;SO%>qc}ALyw!5v5xZ -!Q0[#M!e+].@ZRt*o/0Ltcdq');
define('LOGGED_IN_KEY',    'Lcd6^Gg9FO*50+CsVJx(?7[7Kdg.6|q}&blt++Ab+H~#Bk)H=!~%@]fj}8t)+qNx');
define('NONCE_KEY',        'e;LK%yi+DR)>Q}d08GILzjC|A|kG]Jrg6ac>L.2~Ab=t/,F=]#BJM~QaxT|.:Roh');
define('AUTH_SALT',        's]iO+Kdb(+q)|:nq|ddEB]mP!*)`r{E;}9Sl(TxO~dq+t6 fq85.C*fZV).yeF-Y');
define('SECURE_AUTH_SALT', '$$|8#-Mkr(C5PTo{+:Eu@qRwfe])-4FVlUH`g2J+S:a0{b7~sxg/1j%N7-K*ZTCi');
define('LOGGED_IN_SALT',   '2P52HXeaB0o$6]PFzo49y_~%LIS=L|<fj3e!kpF?R! |dlx/!r|X/TC`-2U#c#G?');
define('NONCE_SALT',       'GJZyX<Lu]Ki,8)FhviUS)VgD*uRX-C_0iZ7E[bX`gXR!WZL/E[qo/Sm+;r:w>q}|');

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
