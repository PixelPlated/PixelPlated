<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         'ZujcqR5scaSfFqGXu9qaviZLfbWJPnoQ/BUgFFIsXa7eh83eAUkgpU1yFdBRGX6wLnnGilxR0t6aMwHn+VnFjw==');
define('SECURE_AUTH_KEY',  'VOxXrg7S3Zq4HMzhnIvs40ZxKd/fB6COzGegWAqRhMGbvt4bjlgwUajVXaWrNxYqYZ490DU+PbIBIdZpcjGa/Q==');
define('LOGGED_IN_KEY',    'GlXRGGNAlKbJp3eilQUngSVL51yMDkywExI8Jo0VanFIkIv9gVru6oWXLkge0L2zQ4BCer8gY2DipKjrf/zFXw==');
define('NONCE_KEY',        'nux70X38rNPmMtSKITy5exQba1Iy3nXZxGpFH8k9ag9RfBbP6ylqYkTlhynDEFlwT7h0mN5X33Q1nMqNdziuCg==');
define('AUTH_SALT',        'DUYwe+0GCQQqgk3H5auNvGO69r1CMoCWTCo+5hA1mAbOTa69Kw1XB9IKBf5hTKsBQKniiD95X7xF2DCSpjLnSg==');
define('SECURE_AUTH_SALT', 'quldexfuB8y7Nwnj0ODTBIGBDgSe48dabGf2DYDlhkqBfLUXT3eyAt12YnHYxK1U7TvIMFYJ66+vfiMioLGhYA==');
define('LOGGED_IN_SALT',   'QC349xTlL+/5edh2UfKOh3SLoBfdFsLrNxI+UmKGBMHtIHzOjaL5v3iJe5ewAmFFITrKPhx0HlEyrVEUIiPP3Q==');
define('NONCE_SALT',       'JgivR7dLDx2ds+XyMnUIIUFQZv+HkuEQMazUAU4yVoMRPEXOgMXCzZmgNICWH2rFWc14PU2p4GpvpJPpeoJ9wg==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
