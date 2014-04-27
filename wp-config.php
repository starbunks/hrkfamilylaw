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
define('DB_NAME', 'hrk');

/** MySQL database username */
define('DB_USER', 'hrk_admin');

/** MySQL database password */
define('DB_PASSWORD', '4hrkLAW!');

/** MySQL hostname */
define('DB_HOST', 'mysqlv111');

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
define('AUTH_KEY',         'T)?C_d|wi);]^DQyuZkn~X{ ;Ls &)<T)3^!GTeei0E%U<lbL76T)(<_Z-m/,2]c');
define('SECURE_AUTH_KEY',  '8:fhx1~k&XBTST:[%?f4.4O]ky_3p?0cY,95C.2W kUu^AKCg^11,)UbNDKGY@QA');
define('LOGGED_IN_KEY',    '1LPSp~Dm-*RLe)-<#zrf$n<).HfuZ5)ItAs3b31J)lC+IRdLYm |H~AgeCtXPht4');
define('NONCE_KEY',        'o}-eJIUM6]`u~:5q#L mIn]NW&=+%3ff5Rug5srycu,/vw`7Vv,um4N.V4rewmvv');
define('AUTH_SALT',        'tt{B>r5VafCFOtwuSN?fj1rXn|MuBuDf0Vn3d0J=BCdlfR*o]^?HnsY+D=YtK),T');
define('SECURE_AUTH_SALT', 'QQ=n}A}{hQbQ$suDuP=ky8Wk$NWc+=vLnhG[+.TeDBK5X7L}`P&OynVI/$RKv9JL');
define('LOGGED_IN_SALT',   '% L2%L&y>K(XZVy@ZOwk[:5|jAqXO,}q`8&J-kmqh)Dpm^{-;X q:pX?ZyC)R[+b');
define('NONCE_SALT',       '2Iq?xGJK47D}+[3mtM(1D#(n$nksV9oG+E5U$H^f*Zd2EMe,(li=<~<?,+GJE&_?');

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
