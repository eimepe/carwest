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
define('DB_NAME', 'carwest');

/** MySQL database username */
define('DB_USER', 'eimepe');

/** MySQL database password */
define('DB_PASSWORD', 'eimepe73');

/** MySQL hostname */
define('DB_HOST', 'mysql-carwest.cdbsdrwiat5y.us-west-2.rds.amazonaws.com');

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
define('AUTH_KEY',         'bd7LfzCVmovqxZcQtBzhuB5pGjeEibWWQUGLkFolfZxrN39Mg5VeiSrJgBuLtGXT');
define('SECURE_AUTH_KEY',  'aPBuckT9lh1MSOJckm1tCEOCMaKIFGRct51tMrQgJASgk895kIkFVjEhhZqg2KrC');
define('LOGGED_IN_KEY',    '2FVe1tkcLSebI2COpuTu3FQDVjkoO3G3h9aCar9fCS5PoNdBQDKaKWb7jdj4ZTfO');
define('NONCE_KEY',        'Du50HYyCdeFgL3MumAEL1sQectC4iGMyKOjhAXucCTCmCHgtV2UhBpvsVK3Amqib');
define('AUTH_SALT',        '3gEQwhPvRogSgIsfIFptl92mx05fNDrdHwvupqcK2wJEpQJfGQBHs2sRFYg6gOvE');
define('SECURE_AUTH_SALT', 'W2L1TKVpKhJ9ShsqUBkAfz5JRxPsCsrHW1PqOZu7TgsY8OEEEHlShiZv63o2nguk');
define('LOGGED_IN_SALT',   'M8fULS8kIoCUpj9X5S1f23HXObWbbLfK0rGztzNBoJbNzytYFN3bVkKsVqzRY8S3');
define('NONCE_SALT',       'Bl1x0xbURdKhQd8ySC0KSSAiUaFJxK30yzdOPNWuAYSLr03E69j9MDGB2gPSxpBY');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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

define( 'WP_MEMORY_LIMIT', '256M' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
