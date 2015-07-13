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
$sha = getenv('WORDPRESS_SALT_SEED') ? getenv('WORDPRESS_SALT_SEED') : getenv('DB_PASS');
$sha = sha1($sha, true); define('AUTH_KEY',         base64_encode($sha));
$sha = sha1($sha, true); define('SECURE_AUTH_KEY',  base64_encode($sha));
$sha = sha1($sha, true); define('LOGGED_IN_KEY',    base64_encode($sha));
$sha = sha1($sha, true); define('NONCE_KEY',        base64_encode($sha));
$sha = sha1($sha, true); define('AUTH_SALT',        base64_encode($sha));
$sha = sha1($sha, true); define('SECURE_AUTH_SALT', base64_encode($sha));
$sha = sha1($sha, true); define('LOGGED_IN_SALT',   base64_encode($sha));
$sha = sha1($sha, true); define('NONCE_SALT',       base64_encode($sha));

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

/* ==[ Begin custom edits ]== */

/* Hard code for now */
// define('WP_HOME','http://crossoverhealth.com');
// define('WP_SITEURL','http://crossoverhealth.com');

/* Enable Multisite */
// define('WP_ALLOW_MULTISITE', true);

/* Actual Multisite? */
// define('MULTISITE', true);
// define('SUBDOMAIN_INSTALL', true);
// define('DOMAIN_CURRENT_SITE', 'crossoverhealth.com');
// define('PATH_CURRENT_SITE', '/');
// define('SITE_ID_CURRENT_SITE', 1);
// define('BLOG_ID_CURRENT_SITE', 1);

/* Force HTTPS if we're behind a load balancer */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https')
  $_SERVER['HTTPS'] = 'on';

/* ==[ End custom edits ]== */

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
