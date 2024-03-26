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


define('AUTH_KEY',         'F/OK/1G4FUgpE+k7T0t99LF9/vywArcjow4ho3mIY3JSJ5lLPs4qPtQ/zJPDHQsdOeb/AbQNqc8YhOm4Hh+Duw==');
define('SECURE_AUTH_KEY',  'FBDDiVfNwVPjtbo8fQOA8YDMFwEE+ASjn9W8AXdBTDt3hgoPq2WzeZj+WcyRcTVDsACwxsWkMPtjmIY1Mkvu1Q==');
define('LOGGED_IN_KEY',    'yMeLFXaYXe2NfboXDhANTpytvfM0DPA5gL8v8yuWEiTX+qOnJ4QTTWKlQV0WMxwdHPywqOtK3uBIg5o+JiCqIA==');
define('NONCE_KEY',        'BMlgTtH8vMJTsv2XOvJlelKJY1y+kG2we9twUKJ4bHU4b7eBVtXdiYrZCZ0P2AM7ryn1g12OmRiwmIP9kVkXqQ==');
define('AUTH_SALT',        'PatbhUO99Gm/GeNRc28Lqc6Fd3W69W7ou/x/0T7jXK94ED0WeFLiCbG1DJRDDciX6KtWnJl1ojNs2KLGqToiEQ==');
define('SECURE_AUTH_SALT', 'A6Fahy3TIdhBFzaOkD9WcvJrUQVjAK16Cj4SGZwQzBEWxC4OY6FowxDVTdxT8lv2AY3/XTmX5UYuw2B/HeIcow==');
define('LOGGED_IN_SALT',   'bU/x8Y9w5zjAxIgwDiU6moNQIvNWyvhbhCHpjiL2EJkbjJAUvVQ1DUqaZ6PNUqpZPKb+RZQ+7yyZWGNT1Mnnsg==');
define('NONCE_SALT',       'Rjw1nmm5CPwJ+rSG61uJ8B9RNJG1UsU1DyErCzdxjEvqpuBhKJtvsqy02a6ryTXaw/9yICYAWJfTKnYY2AgCkA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
