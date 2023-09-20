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


define('AUTH_KEY',         '8jZ6B5di0LsilaIGox5S1FmiqvjG3mzG79oX2RLRk1tzxVQ68dWL0q54kE7xZVtHABSpheUexMJ9k/Sg/5wkUw==');
define('SECURE_AUTH_KEY',  'ZVUuwXQN/I7Y+RevxZFPGeXzmTqnxUnWG1nLTq/qSPOeu60q0jpeV5q6wvUvl3KS7Mz+GYPSbiSqF95Y+ygOXw==');
define('LOGGED_IN_KEY',    '3y+7vK40dpFOypLkEGsnYvyDK6SzehIQEqh2LZ3VjQhL9difXF9OIfzU/sjgsuorm688IU1UpJSZNb06F9bkJg==');
define('NONCE_KEY',        'Q5vvhDnAlpiSUbMMf5lSlE+olKCO+2HXOWxz6H9U/aJtyMY8bNICUv2iDEt57qwETMmJs+2DRLqa5cMli9EL/g==');
define('AUTH_SALT',        'BOYFOKd5xSmDkDovRc7FtCzk5JlUypYajGmjkQqfvb+m4x9VygP9kBhVdXlz/Bv2lIzB63CEuE+xMrKH2HeJfw==');
define('SECURE_AUTH_SALT', 'jXNn000KzRGspyVNWhmJxZOn+wwmuC4v3iPtvLL+NA3blDDk683AzT4B0Qrpgbg0NZjbmZW8bix74SxFUlaNmQ==');
define('LOGGED_IN_SALT',   'Z76F08Zr1v1c6bO3PHsiBej4jXbBJw1aGm5LNRZo/PbftV2Vt000/35OA2pTfEyF02Q02MGVgI5sE8kYkH55Hw==');
define('NONCE_SALT',       'r+wZcG/u40YP2v/3dqfVc/J6Ij8UBcnXe3btWOl+IVerfWHpfLdb8tvEjkdda/22rPgxRA7LlSyLJxDwEK7PqA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
