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
define('DB_NAME', getenv('DB_NAME'));

/** MySQL database username */
define('DB_USER', getenv('DB_USER'));

/** MySQL database password */
define('DB_PASSWORD', getenv('DB_PASS'));

/** MySQL hostname */
define('DB_HOST', getenv('DB_HOST').":".getenv('DB_PORT'));

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
define('AUTH_KEY',         '_)xkII5E6oj;9U)Vp.LBZz]fpx~HQe8&RsFD`)%bn5BVqBz>)U.2`oP&I?Hl,Q?@');
define('SECURE_AUTH_KEY',  'yau6;j?X[P3h|Og=|;&>v0|z%Dy&? N9tADcnDL0.||}}{_4[h4Jg.m@^;gndvHH');
define('LOGGED_IN_KEY',    'Gp^h;Ph}`$|w+&J~0ezKx|H-wqOZR=&8_H^g{ F,8of|a ]/olNL0:=j>:zmwBPT');
define('NONCE_KEY',        '|_1AF<uXze{BOd+@kl82_sE1=eBW)V}$L$Y$)/hG]X6{jF?-ncf%r|EF6<k$Z|<:');
define('AUTH_SALT',        '[gVp do1Z.x.[2R|5(=9FKVv%V _C[RX!>T9`.,]Njy+u+AiUY`Qn>iY0/|Jox?-');
define('SECURE_AUTH_SALT', '`+Ew<[^(7b-`awEt--Ksh`1Fv(lU;n$d-->Ec!9e+2]ser 0O[zGq/#PgqC[yN{]');
define('LOGGED_IN_SALT',   'Be]<R2{@LV={^v t}~Z]_H,MF:_-K$5C?+:HftEmI/cG~S8^#2L-q~*eY=o3aRWK');
define('NONCE_SALT',       '][*sHxMdV`OQD?E|k{Gq#fx[8bN%9^0[6O}<(f}zfYK(C,Nvq9G>X<f[Y;a|_1}o');

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

/* Hard code for now */
define('WP_HOME','https://wordpress.crossoverhealth.com');
define('WP_SITEURL','https://wordpress.crossoverhealth.com');

/* Force HTTPS if we're behind a load balancer */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
  $_SERVER['HTTPS'] = 'on';

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** change permisssions for plugin installation */
define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);
